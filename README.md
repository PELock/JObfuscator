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
    //  mix_code_flow = true,
    //  ints_to_arrays = true
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
// An output from JObfuscator v1.01 - Bartosz Wójcik
//
// Website   : https://www.pelock.com/products/jobfuscator
// Version   : v1.01
// Params    : /MixCodeFlow /RenMethods /RenVars /ShuffleMethods /CryptStr /IntsToArray
// New lines : Windows (CRLF - \r\n)
// Date      : 28.07.2021
//
////////////////////////////////////////////////////////////////////////////////

import java.util.*;
import java.lang.*;
import java.io.*;

class Ideone {

    public static double func_2837(double[] numArray) {
        int[] var_1503 = { 16773034, 161954010, 805149903, 0, 1398016587, 1322929540, 709627242, 2103650494, 70093929, 2 };
        int TWRCHOYPM_HAUIOXNTK = var_1503[3];
        double YMWMKMVWDG = 0;
        int iRrxjpzptTjjlcNcwbro = 0;
        double var_1127 = 0, WJSLVS_FVOLPTLOC_ROSDCT = 0;
        TWRCHOYPM_HAUIOXNTK = var_1503[2];
        while (TWRCHOYPM_HAUIOXNTK != var_1503[0]) {
            switch(TWRCHOYPM_HAUIOXNTK) {
                case 161954010:
                    YMWMKMVWDG = var_1127 / iRrxjpzptTjjlcNcwbro;
                    TWRCHOYPM_HAUIOXNTK -= -var_1503[5];
                    break;
                case 1484883550:
                    for (double var_1710 : numArray) {
                        WJSLVS_FVOLPTLOC_ROSDCT += Math.pow(var_1710 - YMWMKMVWDG, var_1503[9]);
                    }
                    TWRCHOYPM_HAUIOXNTK += -var_1503[8];
                    break;
                case 2103650494:
                    iRrxjpzptTjjlcNcwbro = numArray.length;
                    TWRCHOYPM_HAUIOXNTK += -var_1503[6];
                    break;
                case 1414789621:
                    TWRCHOYPM_HAUIOXNTK -= var_1503[4];
                    break;
                case 805149903:
                    WJSLVS_FVOLPTLOC_ROSDCT = 0.0;
                    TWRCHOYPM_HAUIOXNTK = var_1503[7];
                    break;
                case 1394023252:
                    for (double esCneZa9_592q_7_zU : numArray) {
                        var_1127 += esCneZa9_592q_7_zU;
                    }
                    TWRCHOYPM_HAUIOXNTK = var_1503[1];
                    break;
            }
        }
        return Math.sqrt(WJSLVS_FVOLPTLOC_ROSDCT / iRrxjpzptTjjlcNcwbro);
    }

    public static void main(String[] args) {
        int[] var_790 = { 365752868, 851221905, 25, 65535, 0, 485469037, 795894447, 401516633 };
        int cW3xMWsn_C7UwiY6ExFuU__X = var_790[4];
        double var_1834 = 0;
        double[] g_hTqcygvfmuVgqnycpRtyciz = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        cW3xMWsn_C7UwiY6ExFuU__X = var_790[7];
        while (cW3xMWsn_C7UwiY6ExFuU__X != var_790[5]) {
            switch(cW3xMWsn_C7UwiY6ExFuU__X) {
                case 949930742:
                    var_1834 = func_2837(g_hTqcygvfmuVgqnycpRtyciz);
                    cW3xMWsn_C7UwiY6ExFuU__X = var_790[1];
                    break;
                case 401516633:
                    double[] nFxybvzyibGbscguuDbtalok = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
                    cW3xMWsn_C7UwiY6ExFuU__X ^= var_790[6];
                    break;
                case 851221905:
                    String var_2996 = "";
                    int[] g_bXiluergf = { 0x0053, 0x0073, 0x005F, 0x006B, 0x0060, 0x005C, 0x006C, 0x005D, 0x0018, 0x003B, 0x005B, 0x006B, 0x005D, 0x0054, 0x0066, 0x005A, 0x005F, 0x005D, 0x000E, 0x002A, 0x000C, 0x0010, 0x0018, 0x001F, 0x004E };
                    for (int mz4_C_ZS_vx2imtni61li_ = 0, bOY__H_s8XgO_P52NscyFre = 0; mz4_C_ZS_vx2imtni61li_ < var_790[2]; mz4_C_ZS_vx2imtni61li_++) {
                        bOY__H_s8XgO_P52NscyFre = g_bXiluergf[mz4_C_ZS_vx2imtni61li_];
                        bOY__H_s8XgO_P52NscyFre += mz4_C_ZS_vx2imtni61li_;
                        var_2996 += (char) (bOY__H_s8XgO_P52NscyFre & var_790[3]);
                    }
                    System.out.format(var_2996, var_1834);
                    cW3xMWsn_C7UwiY6ExFuU__X += -var_790[0];
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
 * Version        : v1.01
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
    //  mix_code_flow = true,
    //  ints_to_arrays = true
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
 * Version        : v1.01
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
// for each method, extract all possible integers from the code and store them in an array
//
$myJObfuscator->intsToArrays = true;

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
    //  mix_code_flow = true,
    //  ints_to_arrays = true
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