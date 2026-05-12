<?php

/******************************************************************************
 * JObfuscator WebApi interface usage example.
 *
 * In this example we will obfuscate sample source with custom options.
 *
 * Version        : v1.06
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
// should the source code be compressed (both input & compressed)
//
$myJObfuscator->enableCompression = true;

//
// global obfuscation options
//
// when disabled will discard any @Obfuscate annotation declaration
// in the Java source code
//
// you can disable a particular obfuscation strategy globally if it
// fails or you don't want to use it without modifying the source codes
//
// by default all obfuscation strategies are enabled
//

//
// array initializer encryption (int / char / double / String)
//
$myJObfuscator->arrayIntCrypt = true;
$myJObfuscator->arrayCharCrypt = true;
$myJObfuscator->arrayDoubleCrypt = true;
$myJObfuscator->arrayStringCrypt = true;

//
// encrypt strings using polymorphic encryption algorithms
//
$myJObfuscator->cryptStrings = true;

//
// rename method names to random string values
//
$myJObfuscator->renameMethods = true;

//
// shuffle order of methods in the output source
//
$myJObfuscator->shuffleMethods = true;

//
// encrypt integers using more than 15 floating point math functions from the java.lang.Math.* class
//
$myJObfuscator->intsMathCrypt = true;

//
// encrypt doubles using floating point math from the java.lang.Math.* class
//
$myJObfuscator->dblsMathCrypt = true;

//
// rename variable names to random string values
//
$myJObfuscator->renameVariables = true;

//
// change linear code execution flow to non-linear version
//
$myJObfuscator->mixCodeFlow = true;

//
// store string fragments in char array vaults
//
$myJObfuscator->stringCharVault = true;

//
// derive integer literals via double-based math
//
$myJObfuscator->intsFromDoubleMath = true;

//
// insert opaque predicate chains into control flow
//
$myJObfuscator->opaqueMixerChain = true;

//
// replace boolean conditions with equivalent complex expressions
//
$myJObfuscator->complexifyBooleans = true;

//
// wrap code in try/finally blocks with dead noise
//
$myJObfuscator->tryFinallyNoise = true;

//
// for each method, extract all possible integers from the code and store them in an array
//
$myJObfuscator->intsToArrays = true;

//
// for each method, extract all possible doubles from the code and store them in an array
//
$myJObfuscator->dblsToArrays = true;

//
// source code in Java format
//
$sourceCode = 'import java.util.*;
import java.lang.*;
import java.io.*;

//
// you must include custom annotation
// to enable entire class or a single
// method obfuscation
//
@Obfuscate
class Ideone
{
    //@Obfuscate
    public static double calculateSD(double numArray[])
    {
        double sum = 0.0, standardDeviation = 0.0;
        int length = numArray.length;

        for(double num : numArray) {
            sum += num;
        }

        double mean = sum/length;

        for(double num: numArray) {
            standardDeviation += Math.pow(num - mean, 2);
        }

        return Math.sqrt(standardDeviation/length);
    }

    //
    // selective obfuscation strategies
    // can be applied for the entire
    // class or a single method (by
    // default all obfuscation strategies
    // are enabled when you use @Obfuscate
    // annotation alone)
    //
    //@Obfuscate(
    //  array_int_crypt = true,
    //  array_char_crypt = true,
    //  array_double_crypt = true,
    //  array_string_crypt = true,
    //  split_strings = true,
    //  crypt_strings = true,
    //  rename_methods = false,
    //  shuffle_methods = true,
    //  ints_math_crypt = true,
    //  dbls_math_crypt = true,
    //  rename_variables = true,
    //  mix_code_flow = true,
    //  string_char_vault = true,
    //  ints_from_double_math = true,
    //  opaque_mixer_chain = true,
    //  complexify_booleans = true,
    //  try_finally_noise = true,
    //  ints_to_arrays = true,
    //  dbls_to_arrays = true
    // )
    public static void main(String[] args) {

        double[] numArray = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        double SD = calculateSD(numArray);

        System.out.format("Standard Deviation = %.6f", SD);
    }
}';

//
// by default all options are enabled, both helper random numbers
// generation & obfuscation strategies, so we can just simply call:
//
$result = $myJObfuscator->ObfuscateJavaSource($sourceCode);

//
// it's also possible to pass a Java source file path instead of a string e.g.
//
// $result = $myJObfuscator->ObfuscateJavaFile("/path/to/project/source.java");

//
// $result[] array holds the obfuscation results as well as other information
//
// $result["error"]         - error code
// $result["output"]        - obfuscated code
// $result["demo"]          - was it used in demo mode (invalid or empty activation key was used)
// $result["credits_left"]  - usage credits left after this operation
// $result["credits_total"] - total number of credits for this activation code
// $result["expired"]       - if this was the last usage credit for the activation key it will be set to true
//
if ($result !== false)
{
	// display obfuscated code
	if ($result["error"] === \PELock\JObfuscator::ERROR_SUCCESS)
	{
		// format output code for HTML display
		echo "<pre>" . htmlentities($result["output"]) . "</pre>";
	}
	else
	{
		die("An error occurred, error code: " . $result["error"]);
	}
}
else
{
	die("Something unexpected happen while trying to obfuscate the code.");
}

?>