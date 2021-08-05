<?php

/******************************************************************************
 * JObfuscator WebApi interface usage example.
 *
 * In this example we will verify our activation key status.
 *
 * Version        : v1.04
 * Language       : PHP
 * Author         : Bartosz Wójcik
 * Web page       : https://www.pelock.com
 *
 *****************************************************************************/

//
// include JObfuscator class
//
use PELock\JObfuscator;

//
// if you don't want to use Composer use include_once
//
//include_once "JObfuscator.php";

//
// create JObfuscator class instance (we are using our activation key)
//
$myJObfuscator = new PELock\JObfuscator("ABCD-ABCD-ABCD-ABCD");

//
// login to the service
//
$result = $myJObfuscator->Login();

//
// $result[] array holds the information about the license
//
// $result["demo"]          - is it a demo mode (invalid or empty activation key was used)
// $result["credits_left"]  - usage credits left after this operation
// $result["credits_total"] - total number of credits for this activation code
// $result["string_limit"]  - Max. source code size allowed (it's 1500 bytes for demo mode)
//
if ($result !== false)
{
	echo "Demo version status - " . ($result["demo"] ? "true" : "false") . "<br>";
	echo "Usage credits left - " . $result["credits_left"] . "<br>";
	echo "Total usage credits - " . $result["credits_total"] . "<br>";
	echo "Max. source code size - " . $result["string_limit"] . "<br>";
}
else
{
	die("Something unexpected happen while trying to login to the service.");
}

?>