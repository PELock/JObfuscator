# JObfuscator — Java Source Code Obfuscation & Protection

**JObfuscator** is a source code obfuscator for the Java programming language. It can protect your Java source code and algorithms from hacking, cracking, reverse engineering, decompilation, and technology theft.

JObfuscator employs a variety of obfuscation techniques to protect & conceal the true functionality of your Java source code.

It renames all variables and methods, obfuscates the code flow by making it non-linear, and encrypts all strings with our cutting-edge polymorphic [string encryption](https://www.stringencrypt.com) engine.

More technical details, downloads, documentation available at:

https://www.pelock.com/products/jobfuscator

![JObfuscator Java Obfuscator Windows Client](https://www.pelock.com/img/en/products/jobfuscator/jobfuscator-java-obfuscator-obfuscation-1-0-main.png)

It's available for Windows & Linux (requires Mono):

https://www.pelock.com/products/jobfuscator/download

Multiple programming APIs available:

https://www.pelock.com/products/jobfuscator/api

An online obfuscator interface:

https://www.pelock.com/jobfuscator/

## Java decompilation is a huge problem

Applications written in Java and compiled to `JAR`, `WAR` or `CLASS` formats are vulnerable to decompilation.

There are a number of [decompilers](https://www.pelock.com/articles/reverse-engineering-tools-review#disassemblers-and-decompilers) that can almost completely recreate the compiled code back to Java source.

The problem is that the compiled Java code is written as a so-called [bytecode](https://en.wikipedia.org/wiki/Java_bytecode) for the [JVM](https://en.wikipedia.org/wiki/Java_virtual_machine) (as opposed to the native CPU code like `x86` or `x86-64`).

In addition to being perfectly [perfectly documented](https://docs.oracle.com/javase/specs/jvms/se7/html/jvms-6.html), this form of code allows for very accurate reproduction of the original instructions in high-level Java source code.


## What can Java decompilers do?

Take a look at this example:

![Java JAD Decompiler](https://www.pelock.com/img/en/products/jobfuscator/java-jad-decompiler-decompilation.png)

This is **decompiled** Java code! All the variable, property and method names are readable. You can even easily navigate through the entire decompiled project, jumping from one class to another.

Are you surprised? It could be your software analyzed by the competition, hackers, crackers or anyone else.

## Technology & Intellectual Property (IP) Theft

What could they do with it? Most of the time, the software or its algorithms are stolen or replicated in competing products.

In some other cases, the software gets cracked, clearly visible license checks in decompiled source code are patched or even the entire cracked software is recompiled and published on pirate sites.

## Java source code obfuscation

Obfuscation is the process of transforming Java source code into a **protected** version of itself.

The functionality remains **unchanged**, everything works the same, but the source code and the final compiled bytecode are protected from reverse engineering analysis, even after the decompilation.

### Sample Java source code before obfuscation 

```java
import java.util.*;
import java.lang.*;
import java.io.*;

//
// you must include custom annotations to enable
// entire class or a single method obfuscation
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
    // selective obfuscation strategies can be applied
    // for the entire class or a single method (by default
    // all obfuscation strategies are enabled when you
    // use @Obfuscate annotation alone)
    //
    //@Obfuscate(
    //  remove_comments = true,
    //  crypt_strings = true,
    //  rename_methods = false,
    //  rename_variables = true,
    //  shuffle_methods = true,
    //  mix_code_flow = true
    // )
    public static void main(String[] args) {

        double[] numArray = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        double SD = calculateSD(numArray);

        System.out.format("Standard Deviation = %.6f", SD);
    }
}
```

### The same Java source code after the obfuscation

```java
////////////////////////////////////////////////////////////////////////////////
//
// An output from JObfuscator v1.0 - Bartosz Wójcik
//
// Website   : https://www.pelock.com/products/jobfuscator
// Version   : v1.0
// Params    : /MixCodeFlow /RenMethods /RenVars /ShuffleMethods /CryptStr
// New lines : Windows (CRLF - \r\n)
// Date      : 14.07.2021
//
////////////////////////////////////////////////////////////////////////////////

import java.util.*;
import java.lang.*;
import java.io.*;

class Ideone {

    public static double LV__TKUxvBBALYq_PoTojpU_(double[] numArray) {
        int var_2890 = 0;
        double PJYBTTRI = 0;
        int var_1846 = 0;
        double y_YQH_fvL_0_gw6UWKGKBw = 0, eMzlai = 0;
        var_2890 = 190507166;
        while (var_2890 != 513426540) {
            switch(var_2890) {
                case 618488464:
                    for (double FVEGRM : numArray) {
                        y_YQH_fvL_0_gw6UWKGKBw += FVEGRM;
                    }
                    var_2890 ^= 410092703;
                    break;
                case 1017964047:
                    PJYBTTRI = y_YQH_fvL_0_gw6UWKGKBw / var_1846;
                    var_2890 ^= 536958471;
                    break;
                case 481144840:
                    for (double eNydxsfVevicyry : numArray) {
                        eMzlai += Math.pow(eNydxsfVevicyry - PJYBTTRI, 2);
                    }
                    var_2890 ^= 646054028;
                    break;
                case 976203908:
                    var_2890 ^= 615904488;
                    break;
                case 394538455:
                    var_1846 = numArray.length;
                    var_2890 += 223950009;
                    break;
                case 190507166:
                    eMzlai = 0.0;
                    var_2890 ^= 484361545;
                    break;
            }
        }
        return Math.sqrt(eMzlai / var_1846);
    }

    public static void main(String[] args) {
        int ATERAER = 0;
        double[] hYbhjk = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        double var_3119 = 0;
        ATERAER = 2011404002;
        while (ATERAER != 1465474782) {
            switch(ATERAER) {
                case 2011404002:
                    double[] QHo2E0x_rPfV6_CM0_3F_yrSS = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
                    ATERAER ^= 942522537;
                    break;
                case 888459970:
                    String MNQRKEJ_FBJXXATJV_CYFYCMKMJ = "";
                    int[] var_967 = { 0x10DA, 0x103B, 0x1028, 0x103D, 0x102B, 0x1028, 0x1039, 0x102B, 0x10EF, 0x10CB, 0x1034, 0x1005, 0x1030, 0x1028, 0x103B, 0x1030, 0x103E, 0x103D, 0x10EF, 0x10CC, 0x10EF, 0x10F4, 0x10FD, 0x10C5, 0x1035 };
                    for (int M_xCztBqM_jYZQW0A_ = 0, z_wQCL5jGQZ_7XcHYZR_Rt_ej = 0; M_xCztBqM_jYZQW0A_ < 25; M_xCztBqM_jYZQW0A_++) {
                        z_wQCL5jGQZ_7XcHYZR_Rt_ej = var_967[M_xCztBqM_jYZQW0A_];
                        z_wQCL5jGQZ_7XcHYZR_Rt_ej ^= 0x6CA4;
                        z_wQCL5jGQZ_7XcHYZR_Rt_ej -= 0x7C2B;
                        MNQRKEJ_FBJXXATJV_CYFYCMKMJ += (char) (z_wQCL5jGQZ_7XcHYZR_Rt_ej & 0xFFFF);
                    }
                    System.out.format(MNQRKEJ_FBJXXATJV_CYFYCMKMJ, var_3119);
                    ATERAER = 1465474782;
                    break;
                case 1338922571:
                    var_3119 = LV__TKUxvBBALYq_PoTojpU_(hYbhjk);
                    ATERAER ^= 2067432585;
                    break;
            }
        }
    }
}
```

Would you even be able to tell what the obfuscated code does if you didn't know about the original source code?

## Protect your Java projects & algorithms

Take no chances, use **JObfuscator** to obfuscate and protect your Java projects and algorithms.

Our company has a long history in obfuscation technologies and code obfuscators (see our [x86 Assembly](https://www.pelock.com/products/obfuscator) & [AutoIt](https://www.pelock.com/products/autoit-obfuscator) obfuscators).

We actively bugfix, research and develop new obfuscation strategies for our tools.

You can count on our expertise and support in this field.

### Installation

The preferred way of WebApi interface installation is via [composer](https://getcomposer.org/).

Run:

```
php composer.phar require --prefer-dist pelock/jobfuscator "*"
```

Or add this entry:

```
"pelock/jobfuscator": "*"
```

directly to your `composer.json` in require section.

The installation package is available at https://packagist.org/packages/pelock/jobfuscator

### Example of obfuscating Java source code using default options

```php
<?php

/******************************************************************************
 * JObfuscator WebApi interface usage example.
 *
 * In this example we will obfuscate sample source with default options.
 *
 * Version        : v1.0
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
    //  crypt_strings = true,
    //  rename_methods = false,
    //  rename_variables = true,
    //  shuffle_methods = true,
    //  mix_code_flow = true
    // )
    public static void main(String[] args) {

        double[] numArray = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        double SD = calculateSD(numArray);

        System.out.format("Standard Deviation = %.6f", SD);
    }
}';

//
// by default all obfuscation options are enabled, so we can just simply call:
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
```

### An example of obfuscating Java source code with customized obfuscation strategies

```php
<?php

/******************************************************************************
 * JObfuscator WebApi interface usage example.
 *
 * In this example we will obfuscate sample source with custom options.
 *
 * Version        : v1.0
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
// change linear code execution flow to non-linear version
//
$myJObfuscator->mixCodeFlow = true;

//
// rename variable names to random string values
//
$myJObfuscator->renameVariables = true;

//
// rename method names to random string values
//
$myJObfuscator->renameMethods = true;

//
// encrypt strings using polymorphic encryption algorithms
//
$myJObfuscator->cryptStrings = true;

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
    //  crypt_strings = true,
    //  rename_methods = false,
    //  rename_variables = true,
    //  shuffle_methods = true,
    //  mix_code_flow = true
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
```

#### Example of how to check the activation key status

```php
<?php

/******************************************************************************
 * JObfuscator WebApi interface usage example.
 *
 * In this example we will verify our activation key status.
 *
 * Version        : v1.0
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
// $result["string_limit"]  - max. source code size allowed (it's 1500 bytes for demo mode)
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
```

## Use Java Obfuscator Online

Online interface for the JObfuscator is available at:

https://www.pelock.com/jobfuscator/

## Windows & Linux GUI client and command line version

JObfuscator also comes with full GUI version for Windows and Linux (requires [Mono](https://www.mono-project.com/)).

You can download it at:

https://www.pelock.com/products/jobfuscator/download

An additional command line version is included in the installation package.

It is compatible with Windows (.NET) and Linux (Mono).

### Main JObfuscator window

![JObfuscator Java Obfuscator Windows Client](https://www.pelock.com/img/en/products/jobfuscator/jobfuscator-java-obfuscator-obfuscation-1-0-main.png)

### Obfuscation options:

![JObfuscator Java Obfuscator Obfuscation Options](https://www.pelock.com/img/en/products/jobfuscator/jobfuscator-java-obfuscator-obfuscation-1-0-options.png)

### Obfuscated Java code

![JObfuscator Obfuscated Java Code](https://www.pelock.com/img/en/products/jobfuscator/jobfuscator-java-obfuscator-obfuscation-1-0-obfuscated.png)

### JObfuscator command line version

![JObfuscator Command Line Version](https://www.pelock.com//img/en/products/jobfuscator/jobfuscator-java-obfuscator-obfuscation-1-0-console-comand-line.png)

Java obfuscation can be integrated into your build process or any other batch operation using the JObfuscator command line version.

Bartosz Wójcik
https://www.pelock.com