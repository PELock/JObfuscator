<?php
/******************************************************************************
 * JObfuscator WebApi interface
 *
 * Version        : v1.0
 * Language       : PHP
 * Author         : Bartosz Wójcik
 * Web page       : https://www.pelock.com
 *
 *****************************************************************************/

namespace PELock;

class JObfuscator
{
	/**
	 * @var string default JObfuscator WebApi endpoint
	 */
	const API_URL = "https://www.pelock.com/api/jobfuscator/v1";

	/**
	 * @var string WebApi key for the service
	 */
	protected $_ApiKey = null;

	/**
	 * @var bool should the source code be compressed
	 */
	public $enableCompression = true;

	/**
	 * @var bool change linear code execution flow to non-linear version
	 */
	public $mixCodeFlow = true;

	/**
	 * @var bool rename variable names to random string values
	 */
	public $renameVariables = true;

	/**
	 * @var bool rename method names to random string values
	 */
	public $renameMethods = true;

	/**
	 * @var bool shuffle methods order in the output source
	 */
	public $shuffleMethods = true;

	/**
	 * @var bool encrypt strings using polymorphic encryption algorithms
	 */
	public $cryptStrings = true;

	/**
	 * @var integer success
	 */
	const ERROR_SUCCESS = 0;

	/**
	 * @var integer invalid size for source code (it's 1500 bytes max. for demo version)
	 */
	const ERROR_INPUT_SIZE = 1;

	/**
	 * @var integer input source is empty
	 */
	const ERROR_INPUT = 2;

	/**
	 * @var integer Java source code parsing error
	 */
	const ERROR_PARSING = 3;

	/**
	 * @var integer Java parsed code obfuscation error
	 */
	const ERROR_OBFUSCATION = 4;

	/**
	 * @var integer An error occurred while generating output code
	 */
	const ERROR_OUTPUT = 5;

	/**
	 * Initialize JObfuscator class
	 *
	 * @param string|null $ApiKey Activation key for the service (it can be empty for demo mode)
	 */
	function __construct($ApiKey = null)
	{
		$this->_ApiKey = $ApiKey;
	}

	/**
	 * Login to the service and get the information about the current license limits
	 *
	 * @param bool $ReturnAsArray  Return result as an associative array or JSON encoded string
	 * @return mixed               An array with the results or false on error
	 */
	public function Login($ReturnAsArray = true)
	{
		// parameters
		$Params["command"] = "login";

		return $this->PostRequest($Params, $ReturnAsArray);
	}

	/**
	 * Obfuscate Java source code file using provided parameters
	 *
	 * @param string $JavaFilePath Java source code *.java file path
	 * @param bool $ReturnAsArray  Return result as an associative array or JSON encoded string
	 * @return mixed               An array with the results or false on error
	 */
	public function ObfuscateJavaFile($JavaFilePath, $ReturnAsArray = true)
	{
		$Source = @file_get_contents($JavaFilePath);

		if (!$Source) return null;

		return $this->ObfuscateJavaSource($Source, $ReturnAsArray);
	}

	/**
	 * Obfuscate Java source code (string) using provided parameters
	 *
	 * @param string $JavaSource  Java source code
	 * @param bool $ReturnAsArray Return result as an associative array or JSON encoded string
	 * @return mixed              An array with the results or false on error
	 */
	public function ObfuscateJavaSource($JavaSource, $ReturnAsArray = true)
	{
		// additional parameters
		$ParamsArray["command"] = "obfuscate";
		$ParamsArray["source"] = $JavaSource;

		return $this->PostRequest($ParamsArray, $ReturnAsArray);
	}

	/**
	 * Send a POST request to the server
	 *
	 * @param array $ParamsArray  An array with the parameters
	 * @param bool $ReturnAsArray Return result as an associative array or JSON encoded string
	 * @return mixed              An array with the results or false on error
	 */
	protected function PostRequest($ParamsArray, $ReturnAsArray)
	{
		// add activation key to the parameters array
		if (!empty($this->_ApiKey))
		{
			$ParamsArray["key"] = $this->_ApiKey;
		}

		//
		// obfuscation strategies
		//
		if ($this->mixCodeFlow) $ParamsArray["mix_code_flow"] = "1";
		if ($this->renameVariables) $ParamsArray["rename_variables"] = "1";
		if ($this->renameMethods) $ParamsArray["rename_methods"] = "1";
		if ($this->shuffleMethods) $ParamsArray["shuffle_methods"] = "1";
		if ($this->cryptStrings) $ParamsArray["crypt_strings"] = "1";

		//
		// check if compression is enabled
		//
		if ($this->enableCompression && !empty($ParamsArray["source"]))
		{
			$ParamsArray["source"] = @base64_encode(@gzcompress($ParamsArray["source"], 9));
			$ParamsArray["compression"] = "1";
		}

		if (!function_exists('curl_version'))
		{
			return false;
		}

		$ch = curl_init();

		// URL
		curl_setopt($ch, CURLOPT_URL, self::API_URL);

		// send POST request
		curl_setopt($ch, CURLOPT_POST, true);

		// POST parameters
		curl_setopt($ch, CURLOPT_POSTFIELDS, $ParamsArray);

		// user agent
		curl_setopt($ch, CURLOPT_USERAGENT, "PELock JObfuscator");

		// return only result
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// execute query
		$response = curl_exec($ch);

		// close the session
		curl_close($ch);

		// check the result
		if (empty($response)) return false;

		// decode to array
		$result = json_decode($response, true);

		if (empty($result)) return false;

		// depack output code back into the string
		$depacked = false;

		if ($this->enableCompression && $result["error"] === self::ERROR_SUCCESS)
		{
			$result["output"] = @gzuncompress(@base64_decode($result["output"]));
			$depacked = true;
		}

		if ($ReturnAsArray)
		{
			return $result;
		}

		// if output was depacked - pack it again to JSON format
		if ($depacked)
		{
			return json_encode($result);
		}

		// return original JSON response code
		return $response;
	}
}
?>