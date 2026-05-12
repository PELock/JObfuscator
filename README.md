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
// you must include a custom annotation
// to enable the entire class or a single
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
}
```

### The same Java source code after the obfuscation

```java
////////////////////////////////////////////////////////////////////////////////
//
// An output from JObfuscator v1.30 - Bartosz Wójcik
//
// Website   : https://www.pelock.com/products/jobfuscator
// Version   : v1.30
// Params    : /MixCodeFlow /RenMethods /RenVars /ShuffleMethods /ArrayIntCrypt
//             /ArrayDoubleCrypt /ArrayCharCrypt /ArrayStringCrypt /IntsMathCrypt
//             /DblsMathCrypt /CryptStr /StringCharVault /IntsFromDoubleMath
//             /OpaqueMixerChain /ComplexifyBooleans /TryFinallyNoise /IntsToArray
//             /DblsToArray
// New lines : Windows (CRLF - \r\n)
// Date      : 12.05.2026
//
////////////////////////////////////////////////////////////////////////////////

import java.util.*;
import java.lang.*;
import java.io.*;
import java.lang.Math.*;

class Ideone {

    @SuppressWarnings("InstanceVariableMayNotBeInitialized")
    public static double func_1724(double[] numArray) {
        double[][][] Pdoq_sV5K__F_9f5SaRjyt3 = { { { 6.401655019204359, 95884.0823, 5.110803641588686, 8770.854896931358, 87097.25804, 1.3971198945943959E9, 1.892350634428797E9, 56786.94189881095, 3.3283399340234725, 1.5176390061641358, 3741.392295220618, 8.16565, 69862.2424524571, 12.13495, 0.9451601857000002, 0.9834503308, 0.5425461865, 4.798, 3.9913131388798E8, 9.641968134500872E8 } }, { { 3.200018228926783E8, 40773.60275258074, 11.884094855841758, 0.23669023330000005, 3.1999190178488827E8, 2.70505, 36147.781843892895, 18196.63608 } }, { { 0.05482872187724608, 5.8454525764000005, 9.434482615286889E8, 17.310405645999843, 6.431425696657185, 8782.597186760471, 0.564850801, 1.54696132107148E9, 4.769427709, 0.044379112600000006, 1.8923577323011875E9, 1.52035, 2414.1505156698463, 5.2868947654000005, 2.9889540028000003, 3.5441189992000006, 3.5076998224762005E8, 6392.7950335933, 100847.10065248981, 3.136871513530262E8 } } };
        double[][][] l_C_hgNaDnkvnesz_R_OOZN = { { { 4.4267534344, 1.61245, 5.750671546985263, 0.9390512188000001, 0.3811823764000001, 1.6597488099329417E9, 2.7484, 0.7041959160000001, 2.8613059613734886, 1.9690856840558727E9, 7828.6564021765, 31.535771883617105, 16.01945999717542, 1.2294161474736387, 12.598749999999999, 4.202539341414161, 1.1288119834, 1.427217785286896E8, 1892.2327114416098, 0.668196636, 1.659752453691146E9, 7112.683884420002, 9.274345271215736E8, 6.2235629146, 1809.6614460839178, 5.5642887739, 0.4316485260719022, 0.7593721714, 1.969245605454755E9, 1.3971266703756752E9, 68315.4138000521, 0.7839143216, 1.5469618668169096E9, 9.434412748076282E8, 1.6597561622202623E9, 12.72195130880529, 32016.03727743696, 1.22640643768087E9 } }, { { 0.35995280100000004, 4.5930641797, 9289.752816307291, 1.6480006445781412E9, 0.8933883481000001, 7242.7212144341, 1.2055, 37467.09212198536, 3.6870570217000003, 0.22125557500000004, 6.2694287416, 2.204279346961284, 0.7454867635000001, 6631.339762713615, 4.7046500821, 1.7772714292537992, 4233.992360660652, 9.014642538653958E8, 4.4283260602303E8, 8.15913195046282, 0.43364440267522875, 0.9538935418000001, 6.078111696100001, 4.517242692291632, 78553.42892, 1.491440968677048E9, 7.057156933079119E8, 972.672254567272, 1.3971318081715064E9, 2.8629399718419277, 0.5293194136, 3151.9369800000004, 5668.498007757736, 7.057089600812986E8, 66578.03389094891, 11252.774959999999, 1.88785, 3.637735550200001, 2.1177546094000004, 6716.6735234693, 1020.0140472065463, 4.892574313, 0.7935341292000001, 8.012799999999999, 43212.94368357691, 3.359399093200001, 8.1600083866714E8, 0.14963537464050122, 45.56202271703884, 4.230408387934413, 0.6730365392, 6900.8776631056, 9.568122475071176E8, 3.40015, 0.04706959510000001, 1.8965716581518798E9, 3.9037573468000004, 0.5177935804405761, 5.6236001995, 55863.88272, 3.1508666551, 0.19316613680000003, 4910.5532842016, 1765.7666433383506, 9.641998651366923E8 } }, { { 1.2284055892169825, 15808.3533841768, 1.9692401984353554E9, 1306.9297154385654, 2.49355, 5.93875, 52740.94518, 24.98696301649659, 5.595640894, 1.771607935948064, 0.8695826082, 4381.240652846844, 1.5471334576000002, 7137.225340168699, 0.5316766138, 5.6401, 75027.6888424984, 0.8102153824591833, 6.156962100082349, 28035.955063380192, 1.4637725382479436E9, 5.494987394200001, 2.3075637373, 2.85338177995813E8, 9.434453709034914E8, 56973.94222511504, 909.4763480743229, 1859.0492393613001, 12.701581411272276, 3.5916812335000006, 8.598095049843401E8, 0.13662566848021884, 354.38875256639994, 5.5307376073, 52134.4742215671, 3.201948850451506E8, 4197.553386045639, 9447.850657950901, 6569.86862, 1.5938716172833964, 66646.66706, 9152.840407653486, 19.99962, 5.885852202100001, 0.029791372600000005, 1.8923640817661812E9, 0.7856742864, 0.549649007, 0.6237948413966522, 4.841240652948879, 5.4665882794, 7613.4841440633, 996.2244142457815, 1.8923414216501663E9, 2.3429951019506805, 2.3465811052000003, 4.2604426891, 1.2340440268053618, 0.025431940918328733, 8.229801811853001E8, 9.434472831989284E8, 1.0660449133, 32882.34236, 3910.9218, 7.1671000000000005, 5.308680627908243, 8.282553483997775, 5.8854752227, 1.4396499999999999, 10728.5792424226, 24832.393868357518, 11.9038, 5.006900173196025, 84945.34571557493, 2.7232463557, 5.819168142247696, 2.9518215319000003 } } };
        double[][][] GDVAXSNFVS_WIPCF = { { { 12.0, 11.0, 9.0, 4.0, 0.0 } }, { { 6.0 } }, { { 8.0, 3.0, 7.0, 1.0, 15.0, 24.0, 5.0, 2.0, 18.0 } } };
        double[][][] var_353 = { { { 2.0, 51.0, 10.0, 41.0, 35.0, 47.0, 13.0, 0.0, 34.0, 4.0, 31.0, 23.0, 7.0, 25.0, 38.0, 28.0 } }, { { 48.0, 15.0, 19.0, 8.0, 36.0, 50.0, 40.0, 5.0, 22.0, 9.0, 17.0 } }, { { 44.0, 33.0, 26.0, 24.0, 49.0, 6.0, 37.0, 20.0, 12.0, 14.0, 29.0, 42.0, 32.0, 21.0, 46.0, 3.0, 45.0, 43.0, 1.0, 18.0, 39.0, 11.0, 30.0, 27.0, 16.0 } } };
        double[][] USIPUTKN_LQZPAFOI = { { 1.215340574E9, 3.88405237E8, 18.0, 9.90349209E8, 39210.0, 29.0, 598705.0, 64.0, 954143.0, 56.0, 1.975923806E9, 13.0, 9.48898162E8, 6.43433763E8, 1.343738042E9, 1.0, 1022993.0 }, { 1.580419972E9, 669815.0, 2.087681444E9, 1.511705936E9, 1.24067581E9, 1.317449521E9, 1.38409722E9, 5.18338534E8, 879777.0, 1.914849727E9, 666248.0, 340889.0, 1.231898904E9, 8.68922127E8, 220481.0, 5.9315539E7, 3.90292391E8, 2.0, 1.21890183E8, 169656.0, 19.0, 1.76936382E9, 1.812745603E9, 1.86411786E9, 2.020544746E9, 1.528132637E9, 312076.0, 1.507713428E9, 5.27748909E8, 2.01677243E8, 376695.0, 4.9745491E7, 15.0, 666737.0, 9.15391739E8, 2.128026134E9, 0.0, 690429.0, 7.08400245E8, 1.828379437E9, 1.055699389E9, 883994.0, 2.049973481E9, 5.8752864E7, 1.475533268E9, 1.28723041E9, 1.030500746E9, 8.79911179E8, 9.87057579E8, 754367.0, 9.72812988E8, 1.853138826E9 } };
        int var_708 = (int) ((((l_C_hgNaDnkvnesz_R_OOZN[01][0][0x11] - Math.log1p(Pdoq_sV5K__F_9f5SaRjyt3[1][0][0x7])) - Math.acos(Math.min(Pdoq_sV5K__F_9f5SaRjyt3[0x2][0][0b1001], l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0x3e]))) + Math.exp(Math.max(-(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][033] - Math.asin(l_C_hgNaDnkvnesz_R_OOZN[0][0][0x1f])), (Math.tanh(l_C_hgNaDnkvnesz_R_OOZN[01][0][0b100110]) + l_C_hgNaDnkvnesz_R_OOZN[01][0][023])))) - Math.sin((Math.min((Math.expm1(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][044]) + l_C_hgNaDnkvnesz_R_OOZN[1][0][02]), (Pdoq_sV5K__F_9f5SaRjyt3[0x1][0][02] - Math.tanh(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0x2d]))) - Math.log(((l_C_hgNaDnkvnesz_R_OOZN[1][0][050] - Math.exp(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0xf])) - Math.acos(Double.longBitsToDouble(4584900674801461654L)))))));
        double DSYQRTVL_NJMIX_YNYCS = (Double.longBitsToDouble(4606042054568142723L) - Math.cos((Math.min(Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][03], Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][0x4]) - Math.acos(Double.longBitsToDouble(4605307877980885451L)))));
        double g_tagGzudzbzjIqtyyQkhzkagn = (Math.atan(((Math.tanh(l_C_hgNaDnkvnesz_R_OOZN[0x0][0][27]) + l_C_hgNaDnkvnesz_R_OOZN[0b10][0][65]) - Math.log10((l_C_hgNaDnkvnesz_R_OOZN[0b10][0][042] - Math.sqrt(l_C_hgNaDnkvnesz_R_OOZN[01][0][067]))))) + -Math.max(-(l_C_hgNaDnkvnesz_R_OOZN[00][0][0b10101] + Math.asin(l_C_hgNaDnkvnesz_R_OOZN[01][0][0b111101])), (l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0xf] - Math.acos(l_C_hgNaDnkvnesz_R_OOZN[2][0][0x2e]))));
        long RXVENCPVM_XSMNSRAXL = GmshdsaNntyu(0L, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][7])][0][18])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][0x3])][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][0b111])])]));
        RXVENCPVM_XSMNSRAXL = PbeieabgzwFunc(RXVENCPVM_XSMNSRAXL, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][8])])][(int) (var_353[0b10][0][04])]));
        RXVENCPVM_XSMNSRAXL = z_Cd_aujU_pjrJzLcsOy_bHEA(RXVENCPVM_XSMNSRAXL, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][(int) (GDVAXSNFVS_WIPCF[02][0][0x8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][7])][(int) (GDVAXSNFVS_WIPCF[0x0][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0b10][0][07])])]));
        RXVENCPVM_XSMNSRAXL = z_Cd_aujU_pjrJzLcsOy_bHEA(RXVENCPVM_XSMNSRAXL, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[00][0][0x4])][(int) (GDVAXSNFVS_WIPCF[0][0][0b100])][(int) (GDVAXSNFVS_WIPCF[02][0][0b10])])][(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[00][0][4])][24])]));
        RXVENCPVM_XSMNSRAXL = kkBWAE_UepH_Y_k(RXVENCPVM_XSMNSRAXL, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][022])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0][0][4])][0][2])]));
        RXVENCPVM_XSMNSRAXL = func_254(RXVENCPVM_XSMNSRAXL, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[0][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][02])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][0x3])][(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][(int) (GDVAXSNFVS_WIPCF[02][0][0b1])])]));
        try {
            RXVENCPVM_XSMNSRAXL = func_254(RXVENCPVM_XSMNSRAXL, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b10][0][18])][(int) (var_353[0x1][(int) (GDVAXSNFVS_WIPCF[0b0][0][0x4])][03])]));
        } finally {
            {
                long UbnEDnxYKS7oh_0 = (((2248581916639279139L + 2251390751704740124L) ^ Long.bitCount(1123287685799164196L)) - (Math.max(1549323793524117165L, 2272251286805138975L) + Long.bitCount(1910764988750843349L)));
                UbnEDnxYKS7oh_0 |= Long.reverseBytes(728757138093333177L);
            }
            {
                int MXpcXEuOD3YbX_1 = Integer.reverse((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][07])][0][18])][(int) (var_353[0x2][0][0x14])]));
                MXpcXEuOD3YbX_1 += (((int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][(int) (GDVAXSNFVS_WIPCF[2][0][010])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][0x3])][0][(int) (GDVAXSNFVS_WIPCF[1][0][0])])]) | (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b10][0][0x12])][(int) (var_353[0b0][(int) (GDVAXSNFVS_WIPCF[0b0][0][0b100])][11])])) - Integer.rotateLeft((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0x0][0][4])][07])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[00][0][4])][0][(int) (GDVAXSNFVS_WIPCF[02][0][2])])]), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][0x2])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][03])][0][7])])));
            }
        }
        RXVENCPVM_XSMNSRAXL = Gwsjtk(RXVENCPVM_XSMNSRAXL, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[00][0][4])][0][0b111])][(int) (var_353[0x0][0][9])]));
        if (Long.compare(RXVENCPVM_XSMNSRAXL, -7574155636064490325L) == (int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0b0][0][0b100])][022])][(int) (var_353[01][0][04])])) {
            int JLUJAZYIQ = (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][7])][0][(int) (GDVAXSNFVS_WIPCF[2][0][010])])][(int) (var_353[1][(int) (GDVAXSNFVS_WIPCF[0b0][0][04])][0x4])]);
        }
        int HKBZJWR = (int) (-(Math.tan((-(Math.atan(l_C_hgNaDnkvnesz_R_OOZN[2][0][0x1d]) + -l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0b110000]) + Math.acos(Double.longBitsToDouble(4595063294446113134L)))) + -Double.longBitsToDouble(4594964744341338980L)) + Math.cos(Double.longBitsToDouble(4604876395646818619L)));
        double var_3098 = (Math.log10((Math.min(l_C_hgNaDnkvnesz_R_OOZN[0b0][0][36], l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0b111]) - Math.asin((-l_C_hgNaDnkvnesz_R_OOZN[0x1][0][071] + Math.cosh(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0b1110]))))) + -(Math.sinh(Math.min(Pdoq_sV5K__F_9f5SaRjyt3[00][0][016], l_C_hgNaDnkvnesz_R_OOZN[01][0][39])) + (l_C_hgNaDnkvnesz_R_OOZN[1][0][061] - Math.atan(l_C_hgNaDnkvnesz_R_OOZN[02][0][0b111101]))));
        long twLoBSm7Wd_axvCM5v_VQ_kw = func_254(0L, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0x7])][0][(int) (GDVAXSNFVS_WIPCF[02][0][010])])][(int) (var_353[0b10][0][0x9])]));
        try {
            twLoBSm7Wd_axvCM5v_VQ_kw = z_Cd_aujU_pjrJzLcsOy_bHEA(twLoBSm7Wd_axvCM5v_VQ_kw, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][(int) (GDVAXSNFVS_WIPCF[2][0][0x8])])][(int) (var_353[0][0][(int) (GDVAXSNFVS_WIPCF[2][0][01])])]));
        } finally {
            if (Long.bitCount(((2271767563442804123L - 213226984605871583L) - (293218035940044520L - 580009462907418320L))) > (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b0][0][0b100])][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][2])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b0][0][0x4])][0][(int) (GDVAXSNFVS_WIPCF[00][0][0b0])])])) {
                System.nanoTime();
            }
            {
                int nY2wjHPHW2i5C_1 = (Integer.bitCount((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][0][022])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][0b111])][(int) (GDVAXSNFVS_WIPCF[00][0][04])][(int) (GDVAXSNFVS_WIPCF[02][0][05])])])) | ((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0b111])][(int) (GDVAXSNFVS_WIPCF[0][0][0x4])][0b10010])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0][0][04])][(int) (GDVAXSNFVS_WIPCF[0b0][0][04])][0x5])]) + (int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0x0][0][0x4])][(int) (GDVAXSNFVS_WIPCF[02][0][0b1000])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0x3])][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][0b11])])])));
                {
                    long nY2wjHPHW2i5C_1_n = ((202058840323885481L ^ 1819271124267262513L) ^ Long.bitCount(765645124906685113L));
                    nY2wjHPHW2i5C_1_n ^= nY2wjHPHW2i5C_1;
                }
            }
        }
        twLoBSm7Wd_axvCM5v_VQ_kw = OribretFunc(twLoBSm7Wd_axvCM5v_VQ_kw, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][0][022])][(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][026])]));
        try {
            twLoBSm7Wd_axvCM5v_VQ_kw = PbeieabgzwFunc(twLoBSm7Wd_axvCM5v_VQ_kw, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][18])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][07])][(int) (GDVAXSNFVS_WIPCF[0b0][0][0b100])][0b10101])]));
        } finally {
            Math.abs(Integer.rotateLeft(((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][0][0b10010])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][0][9])]) + (int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0b10][0][8])])][(int) (var_353[0x0][(int) (GDVAXSNFVS_WIPCF[00][0][0x4])][0b111])])), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][7])][0][18])][(int) (var_353[0x2][(int) (GDVAXSNFVS_WIPCF[0][0][4])][12])])));
            if (Integer.bitCount(Math.max(Integer.reverse((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0b111])][(int) (GDVAXSNFVS_WIPCF[0][0][04])][0b10010])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][07])][(int) (GDVAXSNFVS_WIPCF[0b0][0][0x4])][0x8])])), Math.max((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b10][0][18])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][(int) (GDVAXSNFVS_WIPCF[0][0][4])][(int) (GDVAXSNFVS_WIPCF[0x0][0][0b100])])]), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b10][0][18])][(int) (var_353[00][0][0x1])])))) < (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0x7])][(int) (GDVAXSNFVS_WIPCF[0][0][0x4])][18])][(int) (var_353[1][(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][4])])) {
                System.nanoTime();
            }
        }
        twLoBSm7Wd_axvCM5v_VQ_kw = Gwsjtk(twLoBSm7Wd_axvCM5v_VQ_kw, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x0][(int) (GDVAXSNFVS_WIPCF[00][0][4])][0b111])][(int) (var_353[2][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][6])])]));
        try {
            twLoBSm7Wd_axvCM5v_VQ_kw = GmshdsaNntyu(twLoBSm7Wd_axvCM5v_VQ_kw, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][0x8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][07])][0][022])]));
        } finally {
            if (Integer.bitCount((Integer.bitCount((int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][(int) (GDVAXSNFVS_WIPCF[2][0][8])])][(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0x0][0][4])][(int) (GDVAXSNFVS_WIPCF[0x0][0][0b100])])])) - ((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][0][022])][(int) (var_353[0b1][(int) (GDVAXSNFVS_WIPCF[0x0][0][4])][9])]) | (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b10][0][0b10010])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0][0][04])][(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][0b1111])])))) < (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0b111])][0][022])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][03])][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0b0][0][0x3])])])) {
                System.nanoTime();
            }
        }
        try {
            try {
                twLoBSm7Wd_axvCM5v_VQ_kw = PbeieabgzwFunc(twLoBSm7Wd_axvCM5v_VQ_kw, -(int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][(int) (GDVAXSNFVS_WIPCF[00][0][4])][0b10010])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][0x7])][0][0x1])]));
            } finally {
                Math.max(((int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0x2][0][0b1000])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][0x7])][0][0b1101])]) | (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0x7])][0][(int) (GDVAXSNFVS_WIPCF[2][0][0x8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0x7])][(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][0b1010])])), Integer.reverse((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][(int) (GDVAXSNFVS_WIPCF[00][0][4])][18])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][0x7])][0][017])])));
            }
        } finally {
            {
                int Mcsf7DmnBDX6m_0 = ((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][07])][0][022])][(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0x0][0][0b100])][0b10011])]) ^ (int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][0x12])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0b111])][(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][(int) (GDVAXSNFVS_WIPCF[0b0][0][0x1])])]));
                Mcsf7DmnBDX6m_0 += Math.max(((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b10][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][03])][(int) (GDVAXSNFVS_WIPCF[0x0][0][4])][0x5])]) - (int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][0b10010])][(int) (var_353[0b0][0][0b1010])])), ((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][7])][0][(int) (GDVAXSNFVS_WIPCF[02][0][010])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][0x3])][(int) (GDVAXSNFVS_WIPCF[00][0][4])][(int) (GDVAXSNFVS_WIPCF[0x0][0][4])])]) | (int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][0b1000])])][(int) (var_353[2][0][0b10000])])));
            }
            Math.abs((((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0x7])][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][3])][0][(int) (GDVAXSNFVS_WIPCF[0b10][0][02])])]) ^ (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b0][0][07])][(int) (var_353[0x2][0][(int) (GDVAXSNFVS_WIPCF[0b0][0][0b10])])])) | ((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0b111])][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][010])])][(int) (var_353[0x1][0][010])]) + (int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][18])][(int) (var_353[0x2][0][0xe])]))));
        }
        twLoBSm7Wd_axvCM5v_VQ_kw = GmshdsaNntyu(twLoBSm7Wd_axvCM5v_VQ_kw, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][022])][(int) (var_353[02][0][0b110])]));
        if (Long.compare(twLoBSm7Wd_axvCM5v_VQ_kw, -14886166832075850L) == (int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0x0][0][0x4])][(int) (GDVAXSNFVS_WIPCF[2][0][0x8])])][(int) (var_353[1][0][(int) (GDVAXSNFVS_WIPCF[00][0][3])])])) {
            int AMSIMF = (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[02][0][7])][(int) (GDVAXSNFVS_WIPCF[0b0][0][4])][(int) (GDVAXSNFVS_WIPCF[02][0][0x8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][0b11])][(int) (GDVAXSNFVS_WIPCF[0x0][0][4])][04])]);
        }
        while (var_708 != (int) (((Math.sin((Pdoq_sV5K__F_9f5SaRjyt3[02][0][0x3] - Math.log1p(Pdoq_sV5K__F_9f5SaRjyt3[00][0][0x4]))) + Math.max(l_C_hgNaDnkvnesz_R_OOZN[1][0][041], l_C_hgNaDnkvnesz_R_OOZN[01][0][032])) - Math.asin(Double.longBitsToDouble(4595787458782617908L))) - Math.tan((Math.exp(((l_C_hgNaDnkvnesz_R_OOZN[1][0][060] - Math.tanh(l_C_hgNaDnkvnesz_R_OOZN[00][0][020])) - Math.expm1((-l_C_hgNaDnkvnesz_R_OOZN[0b0][0][2] + Math.sinh(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0114]))))) + -(Double.longBitsToDouble(4604173232215441912L) + Math.asin((Math.acos(l_C_hgNaDnkvnesz_R_OOZN[1][0][0x0]) + -l_C_hgNaDnkvnesz_R_OOZN[01][0][024]))))))) {
            switch(var_708) {
                case 0b1010111001100011100011111111000:
                    DSYQRTVL_NJMIX_YNYCS = var_3098 / HKBZJWR;
                    var_708 ^= (int) Math.max(((Math.atan((Pdoq_sV5K__F_9f5SaRjyt3[00][0][9] + Math.acos(l_C_hgNaDnkvnesz_R_OOZN[0][0][0x4]))) + Math.min(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0x2d], Pdoq_sV5K__F_9f5SaRjyt3[0x2][0][0xa])) + Math.cosh((-Math.max(-l_C_hgNaDnkvnesz_R_OOZN[0x0][0][0b11000], l_C_hgNaDnkvnesz_R_OOZN[0b10][0][022]) + Math.tan((-l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0x9] + Math.expm1(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0b1000100])))))), (Math.sqrt(((l_C_hgNaDnkvnesz_R_OOZN[00][0][17] - Math.asin(l_C_hgNaDnkvnesz_R_OOZN[00][0][0x13])) - Math.log((Pdoq_sV5K__F_9f5SaRjyt3[00][0][7] - Math.expm1(Pdoq_sV5K__F_9f5SaRjyt3[0][0][0b1011]))))) + (Math.min(l_C_hgNaDnkvnesz_R_OOZN[2][0][0x35], Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][0b110]) - Math.asin((-l_C_hgNaDnkvnesz_R_OOZN[0][0][0x8] + Math.log(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][42]))))));
                    break;
                case 0b100111111110101101000110010001:
                    for (double WDLXL_EAZGTF : numArray) {
                        try {
                            g_tagGzudzbzjIqtyyQkhzkagn += Math.pow(WDLXL_EAZGTF - DSYQRTVL_NJMIX_YNYCS, (int) ((Math.tan(Math.min((Math.log10(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0b100110]) + -l_C_hgNaDnkvnesz_R_OOZN[2][0][0b111001]), (l_C_hgNaDnkvnesz_R_OOZN[0b10][0][013] - Math.tanh(Pdoq_sV5K__F_9f5SaRjyt3[2][0][016])))) + ((l_C_hgNaDnkvnesz_R_OOZN[0x0][0][014] - Math.expm1(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][04])) - Math.atan(Math.max(l_C_hgNaDnkvnesz_R_OOZN[02][0][070], -l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0xd])))) - Math.acos((Math.max(-(Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][12] + Math.acos(l_C_hgNaDnkvnesz_R_OOZN[1][0][0x32])), Double.longBitsToDouble(4609773440293964106L)) - Math.tanh(Math.max(-(Math.sinh(l_C_hgNaDnkvnesz_R_OOZN[1][0][0b101001]) + l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0x34]), Double.longBitsToDouble(4613768068980951630L)))))));
                        } finally {
                            Long.toUnsignedString(Long.rotateLeft(Long.rotateLeft(107987714131730675L, (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[2][0][0b111])][0][0b10010])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0x7])][0][0b111])])), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0b0][0][07])][(int) (var_353[1][(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][(int) (GDVAXSNFVS_WIPCF[0x0][0][2])])]))).hashCode();
                        }
                    }
                    var_708 += (int) (Math.log10((Math.min(Math.min(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0x10], l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0x22]), (l_C_hgNaDnkvnesz_R_OOZN[2][0][0b11001] - Math.acos(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][9]))) + Math.sin(((l_C_hgNaDnkvnesz_R_OOZN[0x0][0][043] - Math.exp(l_C_hgNaDnkvnesz_R_OOZN[0b0][0][0b1])) - Math.log10((l_C_hgNaDnkvnesz_R_OOZN[0][0][0b11110] + Math.asin(l_C_hgNaDnkvnesz_R_OOZN[00][0][0b11]))))))) + -(Math.cosh(Double.longBitsToDouble(4614427367445102230L)) + ((l_C_hgNaDnkvnesz_R_OOZN[02][0][23] - Math.exp(l_C_hgNaDnkvnesz_R_OOZN[0][0][016])) - Math.log1p((Math.asin(Pdoq_sV5K__F_9f5SaRjyt3[00][0][017]) + l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0b100000])))));
                    break;
                case 1663268828:
                    g_tagGzudzbzjIqtyyQkhzkagn = ((Math.asin((Math.expm1(Pdoq_sV5K__F_9f5SaRjyt3[02][0][013]) + -l_C_hgNaDnkvnesz_R_OOZN[0b1][0][035])) + (Math.exp(l_C_hgNaDnkvnesz_R_OOZN[0][0][06]) + -l_C_hgNaDnkvnesz_R_OOZN[02][0][0113])) - Math.log1p(Math.max((Pdoq_sV5K__F_9f5SaRjyt3[1][0][1] - Math.cbrt(l_C_hgNaDnkvnesz_R_OOZN[0b0][0][37])), (Math.expm1(Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][17]) + Pdoq_sV5K__F_9f5SaRjyt3[0b1][0][0b110]))));
                    var_708 = (int) ((((l_C_hgNaDnkvnesz_R_OOZN[1][0][52] + Math.cos(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0b1])) - Math.tanh(Double.longBitsToDouble(4613332026520326704L))) - Math.log10(((l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0106] - Math.log(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0b111011])) + Math.sin((l_C_hgNaDnkvnesz_R_OOZN[2][0][0x48] - Math.tan(l_C_hgNaDnkvnesz_R_OOZN[01][0][60])))))) + Math.tanh(Double.longBitsToDouble(4615131654948294660L)));
                    break;
                case 654906155:
                    var_3098 = (((Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][0x8] + Math.expm1(l_C_hgNaDnkvnesz_R_OOZN[01][0][0b110])) - Math.cosh((l_C_hgNaDnkvnesz_R_OOZN[0][0][0xd] - Math.asin(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0x2f])))) - Math.log10((Math.sinh(Math.max(l_C_hgNaDnkvnesz_R_OOZN[0x0][0][031], -l_C_hgNaDnkvnesz_R_OOZN[0x2][0][27])) + (l_C_hgNaDnkvnesz_R_OOZN[2][0][19] - Math.tan(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0b1010])))));
                    var_708 -= (int) (-(((l_C_hgNaDnkvnesz_R_OOZN[0x1][0][031] - Math.tan(l_C_hgNaDnkvnesz_R_OOZN[2][0][50])) + Math.exp(Math.min(l_C_hgNaDnkvnesz_R_OOZN[0][0][10], l_C_hgNaDnkvnesz_R_OOZN[2][0][0b101]))) - Math.cbrt(((l_C_hgNaDnkvnesz_R_OOZN[02][0][59] - Math.log1p(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0x23])) - Math.log1p((l_C_hgNaDnkvnesz_R_OOZN[02][0][0b1001001] + Math.exp(Pdoq_sV5K__F_9f5SaRjyt3[1][0][05])))))) - Math.cbrt(Math.max(((l_C_hgNaDnkvnesz_R_OOZN[0x1][0][64] + Math.cos(l_C_hgNaDnkvnesz_R_OOZN[02][0][43])) - Math.cbrt((l_C_hgNaDnkvnesz_R_OOZN[0x1][0][03] - Math.cosh(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][22])))), ((Pdoq_sV5K__F_9f5SaRjyt3[0b0][0][19] - Math.sin(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][026])) + Math.acos(Double.longBitsToDouble(4603427302460750727L))))));
                    break;
                case 013225327532:
                    var_708 = (int) (Math.expm1(Math.min(Math.max(-(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0b11] - Math.cbrt(l_C_hgNaDnkvnesz_R_OOZN[01][0][0x2e])), (l_C_hgNaDnkvnesz_R_OOZN[0b1][0][11] - Math.sinh(l_C_hgNaDnkvnesz_R_OOZN[1][0][025]))), Math.max((l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0x10] - Math.asin(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][42])), -(Math.tan(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][016]) + l_C_hgNaDnkvnesz_R_OOZN[02][0][36])))) + (((l_C_hgNaDnkvnesz_R_OOZN[0x2][0][20] - Math.log1p(l_C_hgNaDnkvnesz_R_OOZN[2][0][62])) - Math.exp((Math.tanh(l_C_hgNaDnkvnesz_R_OOZN[02][0][0b100001]) + l_C_hgNaDnkvnesz_R_OOZN[02][0][0b11100]))) + Math.log(((Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][18] - Math.sqrt(Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][18])) + Math.cosh((l_C_hgNaDnkvnesz_R_OOZN[0b0][0][013] - Math.expm1(l_C_hgNaDnkvnesz_R_OOZN[1][0][53])))))));
                    break;
                case 017773525043:
                    var_708 = (int) (Math.expm1((((Math.tan(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0b1000011]) + l_C_hgNaDnkvnesz_R_OOZN[2][0][7]) + Math.tanh((Pdoq_sV5K__F_9f5SaRjyt3[0][0][0b10] - Math.cos(Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][0x8])))) - Math.log1p(((Math.log(l_C_hgNaDnkvnesz_R_OOZN[02][0][63]) + l_C_hgNaDnkvnesz_R_OOZN[01][0][054]) - Math.acos((Math.atan(Pdoq_sV5K__F_9f5SaRjyt3[0b0][0][0b10000]) + -l_C_hgNaDnkvnesz_R_OOZN[0x2][0][58])))))) + (Math.max(Math.max(l_C_hgNaDnkvnesz_R_OOZN[00][0][20], l_C_hgNaDnkvnesz_R_OOZN[00][0][042]), (l_C_hgNaDnkvnesz_R_OOZN[0x0][0][5] + Math.log10(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0x6]))) + Math.exp(Math.max((Math.log10(Pdoq_sV5K__F_9f5SaRjyt3[00][0][01]) + l_C_hgNaDnkvnesz_R_OOZN[2][0][0b1000010]), -Math.min(l_C_hgNaDnkvnesz_R_OOZN[02][0][01], Pdoq_sV5K__F_9f5SaRjyt3[2][0][021])))));
                    break;
                case 0b100010000110011101010010111101:
                    for (double vQ_lKp_tp_We_N4Sj3jKG : numArray) {
                        try {
                            var_3098 += vQ_lKp_tp_We_N4Sj3jKG;
                        } finally {
                            if (Integer.compareUnsigned(Integer.bitCount((int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][18])][(int) (var_353[0x0][0][015])])), Integer.reverse((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][7])][0][0b10010])][(int) (var_353[0x0][0][(int) (GDVAXSNFVS_WIPCF[0x1][0][0b0])])]))) == (int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x2][0][0b10010])][(int) (var_353[0b1][(int) (GDVAXSNFVS_WIPCF[0][0][0b100])][0xa])])) {
                                throw new AssertionError();
                            }
                            if (Integer.bitCount(Integer.bitCount(((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0][0][04])][(int) (GDVAXSNFVS_WIPCF[00][0][0x4])][7])][(int) (var_353[2][0][(int) (GDVAXSNFVS_WIPCF[0x2][0][4])])]) ^ (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b0][0][0x4])][(int) (GDVAXSNFVS_WIPCF[0][0][04])][(int) (GDVAXSNFVS_WIPCF[0x2][0][0b10])])][(int) (var_353[0b10][0][(int) (GDVAXSNFVS_WIPCF[2][0][8])])])))) < (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][0x7])][0][(int) (GDVAXSNFVS_WIPCF[2][0][8])])][(int) (var_353[01][(int) (GDVAXSNFVS_WIPCF[0x0][0][0b100])][0b100])])) {
                                throw new AssertionError();
                            }
                            {
                                int VmxuwAy4s4NZm_2 = Integer.reverse((Integer.rotateLeft((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0b10][0][2])])][(int) (var_353[0][0][06])]), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][0][0b111])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][07])][0][025])])) + Integer.bitCount((int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[0][0][0x4])][(int) (GDVAXSNFVS_WIPCF[0x2][0][010])])][(int) (var_353[0x2][(int) (GDVAXSNFVS_WIPCF[00][0][4])][(int) (GDVAXSNFVS_WIPCF[2][0][0b110])])]))));
                                VmxuwAy4s4NZm_2 &= Integer.bitCount((int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][(int) (GDVAXSNFVS_WIPCF[0][0][0b100])][(int) (GDVAXSNFVS_WIPCF[0x2][0][8])])][(int) (var_353[0x0][0][(int) (GDVAXSNFVS_WIPCF[00][0][0b0])])]));
                            }
                        }
                    }
                    var_708 += (int) Math.min((Math.sinh(Math.min(Double.longBitsToDouble(4586726950757758424L), Math.max(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][063], l_C_hgNaDnkvnesz_R_OOZN[0b1][0][5]))) + Math.max((Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][0x2] - Math.tan(Pdoq_sV5K__F_9f5SaRjyt3[2][0][0x1])), (Math.log10(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0x18]) + l_C_hgNaDnkvnesz_R_OOZN[0b10][0][60]))), Math.max(((l_C_hgNaDnkvnesz_R_OOZN[0b0][0][0x21] + Math.atan(l_C_hgNaDnkvnesz_R_OOZN[0b0][0][0b0])) + Math.atan((Math.acos(l_C_hgNaDnkvnesz_R_OOZN[0][0][0x7]) + l_C_hgNaDnkvnesz_R_OOZN[1][0][027]))), (Math.expm1(Math.min(l_C_hgNaDnkvnesz_R_OOZN[2][0][64], l_C_hgNaDnkvnesz_R_OOZN[1][0][063])) + (Math.cosh(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][0x25]) + l_C_hgNaDnkvnesz_R_OOZN[2][0][0x18]))));
                    break;
                case 956812243:
                    var_708 = (int) (Math.max(Math.max((l_C_hgNaDnkvnesz_R_OOZN[2][0][0b10] + Math.tan(l_C_hgNaDnkvnesz_R_OOZN[1][0][0b111000])), (l_C_hgNaDnkvnesz_R_OOZN[0][0][0b1001] + Math.expm1(l_C_hgNaDnkvnesz_R_OOZN[02][0][0107]))), ((Math.cbrt(l_C_hgNaDnkvnesz_R_OOZN[2][0][30]) + l_C_hgNaDnkvnesz_R_OOZN[0][0][034]) - Math.cbrt((l_C_hgNaDnkvnesz_R_OOZN[0x0][0][026] - Math.cbrt(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][022]))))) - Math.sin((Math.log10(((Math.exp(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][053]) + Pdoq_sV5K__F_9f5SaRjyt3[00][0][12]) + Math.sin(Math.min(l_C_hgNaDnkvnesz_R_OOZN[02][0][0x20], l_C_hgNaDnkvnesz_R_OOZN[00][0][027])))) + Math.max(-(l_C_hgNaDnkvnesz_R_OOZN[00][0][022] - Math.sinh(l_C_hgNaDnkvnesz_R_OOZN[02][0][054])), (-l_C_hgNaDnkvnesz_R_OOZN[0][0][0b11010] - Math.sin(Pdoq_sV5K__F_9f5SaRjyt3[0x2][0][13]))))));
                    break;
                case 0b110101101110110110010011000101:
                    var_708 ^= (int) ((((Pdoq_sV5K__F_9f5SaRjyt3[0x2][0][19] + Math.sinh(Pdoq_sV5K__F_9f5SaRjyt3[0b1][0][03])) - Math.cbrt(Math.min(Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][0b111], l_C_hgNaDnkvnesz_R_OOZN[00][0][0x20]))) - Math.tanh(((Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][0] - Math.cosh(l_C_hgNaDnkvnesz_R_OOZN[2][0][0xc])) + Math.cos((l_C_hgNaDnkvnesz_R_OOZN[02][0][0b110001] - Math.sin(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][55])))))) + Math.log10(Math.min(Math.max((l_C_hgNaDnkvnesz_R_OOZN[0x2][0][26] + Math.sin(Pdoq_sV5K__F_9f5SaRjyt3[0x2][0][06])), (Pdoq_sV5K__F_9f5SaRjyt3[0b10][0][5] - Math.cos(l_C_hgNaDnkvnesz_R_OOZN[0b10][0][010]))), ((l_C_hgNaDnkvnesz_R_OOZN[2][0][0b101001] - Math.sinh(l_C_hgNaDnkvnesz_R_OOZN[0x1][0][8])) - Math.tanh(Math.min(l_C_hgNaDnkvnesz_R_OOZN[2][0][0b100101], l_C_hgNaDnkvnesz_R_OOZN[02][0][025]))))));
                    break;
                case 02677266114:
                    var_708 += (int) ((Math.acos((Math.atan((l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0x2f] - Math.sinh(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][54]))) + (l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0b10001] - Math.atan(l_C_hgNaDnkvnesz_R_OOZN[01][0][04])))) + Math.max((l_C_hgNaDnkvnesz_R_OOZN[02][0][35] - Math.expm1(Pdoq_sV5K__F_9f5SaRjyt3[0x0][0][0b1101])), Math.max(Pdoq_sV5K__F_9f5SaRjyt3[01][0][0x0], Pdoq_sV5K__F_9f5SaRjyt3[1][0][04]))) - Math.sinh((-Math.max(Double.longBitsToDouble(4618229955159754441L), -(Pdoq_sV5K__F_9f5SaRjyt3[0b0][0][10] + Math.cosh(Pdoq_sV5K__F_9f5SaRjyt3[0x2][0][0xf]))) + Math.sinh((Math.acos((-l_C_hgNaDnkvnesz_R_OOZN[0b10][0][0x1f] + Math.acos(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][30]))) + Math.min(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0b110110], l_C_hgNaDnkvnesz_R_OOZN[0x1][0][077]))))));
                    break;
                case 016530046616:
                    HKBZJWR = numArray.length;
                    var_708 -= (int) (Math.asin((Math.sinh((Math.sinh((l_C_hgNaDnkvnesz_R_OOZN[0x2][0][047] - Math.atan(l_C_hgNaDnkvnesz_R_OOZN[01][0][12]))) + -(Pdoq_sV5K__F_9f5SaRjyt3[2][0][00] - Math.tan(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][58])))) + (Math.min(l_C_hgNaDnkvnesz_R_OOZN[0][0][017], l_C_hgNaDnkvnesz_R_OOZN[0b1][0][015]) - Math.log10(Math.min(l_C_hgNaDnkvnesz_R_OOZN[0b1][0][0b11111], l_C_hgNaDnkvnesz_R_OOZN[02][0][0b1000101]))))) + Math.min(Math.max((Math.cbrt(Pdoq_sV5K__F_9f5SaRjyt3[2][0][0x10]) + l_C_hgNaDnkvnesz_R_OOZN[0b0][0][0b11101]), (Pdoq_sV5K__F_9f5SaRjyt3[0b0][0][0b101] - Math.log10(l_C_hgNaDnkvnesz_R_OOZN[02][0][0b101000]))), ((l_C_hgNaDnkvnesz_R_OOZN[0x1][0][034] - Math.asin(l_C_hgNaDnkvnesz_R_OOZN[02][0][10])) + Math.cosh((Math.sin(l_C_hgNaDnkvnesz_R_OOZN[0x2][0][0x4a]) + l_C_hgNaDnkvnesz_R_OOZN[2][0][0x0])))));
                    break;
            }
        }
        try {
            return Math.sqrt(g_tagGzudzbzjIqtyyQkhzkagn / HKBZJWR);
        } finally {
            {
                int IjBp6182Fly3Q_0 = (Integer.bitCount((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][7])][(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][(int) (GDVAXSNFVS_WIPCF[02][0][0x8])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][07])][0][17])])) + Integer.rotateLeft((int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][0x12])][(int) (var_353[0x0][0][0x8])]), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][0][(int) (GDVAXSNFVS_WIPCF[2][0][02])])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][(int) (GDVAXSNFVS_WIPCF[0x0][0][04])][0])])));
                {
                    long IjBp6182Fly3Q_0_n = ((1569376713476307532L + 514661699821513257L) ^ (650065972881940006L + 1817414262047498050L));
                    IjBp6182Fly3Q_0_n ^= IjBp6182Fly3Q_0;
                }
            }
            {
                int NvEQUZcs7dPKf_1 = (((int) (USIPUTKN_LQZPAFOI[(int) (var_353[02][0][(int) (GDVAXSNFVS_WIPCF[02][0][010])])][(int) (var_353[02][(int) (GDVAXSNFVS_WIPCF[00][0][0b100])][0x3])]) + (int) (USIPUTKN_LQZPAFOI[(int) (var_353[2][0][0x12])][(int) (var_353[00][(int) (GDVAXSNFVS_WIPCF[0][0][0x4])][0b1110])])) - ((int) (USIPUTKN_LQZPAFOI[(int) (var_353[0x0][(int) (GDVAXSNFVS_WIPCF[0][0][04])][0x7])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0][0][0b100])][0][(int) (GDVAXSNFVS_WIPCF[02][0][07])])]) ^ (int) (USIPUTKN_LQZPAFOI[(int) (var_353[00][0][(int) (GDVAXSNFVS_WIPCF[02][0][0b10])])][(int) (var_353[0x2][(int) (GDVAXSNFVS_WIPCF[0b0][0][04])][(int) (GDVAXSNFVS_WIPCF[02][0][0x0])])])));
                {
                    long NvEQUZcs7dPKf_1_n = (Math.max(218692361192817415L, 1129804403098414370L) - Math.max(263733413916131066L, 371308413178936386L));
                    NvEQUZcs7dPKf_1_n ^= NvEQUZcs7dPKf_1;
                }
            }
            {
                int MVSQpFDzTEDOS_2 = Integer.reverse((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x2][0][7])][0][0b10010])][(int) (var_353[0x2][(int) (GDVAXSNFVS_WIPCF[0][0][0x4])][23])]));
                MVSQpFDzTEDOS_2 &= Integer.rotateLeft((int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0b111])][(int) (GDVAXSNFVS_WIPCF[0b0][0][0b100])][18])][(int) (var_353[0x0][0][(int) (GDVAXSNFVS_WIPCF[0x0][0][03])])]), (int) (USIPUTKN_LQZPAFOI[(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0x0][0][4])][0][7])][(int) (var_353[(int) (GDVAXSNFVS_WIPCF[0b10][0][0b11])][0][01])]));
            }
        }
    }

    @SuppressWarnings("InstanceVariableMayNotBeInitialized")
    public static void main(String[] args) {
        double[] pYnhskaVf_TWk_jnp_N = { 193277.52787000002, 4070.1973659284004, 0.5766628222, 4.9909659364, 13.7902, 58827.4708167082, 10.049673832653898, 39.87911796148132, 65923.43924785695, 0.19215615700000002, 1.27126737098314E9, 0.8405331892, 0.24196, 83734.3253, 1159.9768199999999, 1.9734764917716851E9, 1.8575131636000004, 1.0060072795355226E9, 1.0793893107384058, 0.99548, 9305.4693743516, 3657.63421, 80498.70938, 0.717845643, 5.865118335100001, 1.02385, 65102.195286049064, 1.3411447626947302E7, 74.88958665189274, 430.01995167689716, 0.7291584386062064, 7124.062484128514, 1.2698237560729735E9, 0.17518649640000003, 1.1162388639974303, 65535.0, 5753.88494, 75332.11303629371, 8233.83534, 1.27784, 1736.6687982634, 5.420459483792768, 8.058777028550209E7, 0.013706918200000001, 65535.09774, 8.657804327906597, 148.33923933165, 11257.77486, 40866.62693601716, 0.013706059879954985, 6839.21601, 5.945550180645818E7, 2.8078782310000006, 9073.814560923998, 0.026569468800000003, 1102.1271493565714, 56265.924749270096, 1.6766887114000002, 2804.0195640356, 0.35557301441674305, 1.6496090245000004, 0.0656672455, 1.0665475525000003, 1.5915300437349737E9, 84475.31060931279, 2.13415, 2.626372895389E7, 45306.09388, 4.7512698679000005, 1.1989186470504699E9, 4318.2657256814, 81053.78320568666, 0.19434, 74900.50198, 3.762122595853876, 2.4080915773000005, 1.6732393976404122E8, 1.00600988237522E9, 2581.769736553281, 3.4399589414058767, 65535.16623459683, 0.4876231578994191, 3217.9356599999996, 65540.79446682516, 11.024998523712588, 17.44861264765747, 1.3406529968988178E7, 4.2630815448999995, 0.35154329050000005, 14.540307204558848, 66291.23595309145, 0.7564948699999999, 5.311963895500001, 1.5925046274113553E9, 61389.7722, 3.784254877, 2388.4191576111, 4.3181601088298744E8, 0.38079238420000006, 1.35336567065503E9, 9.937127465523455E8, 0.24245, 0.09758, 65543.35475107157, 1.5584057269274865, 17.92290352528695, 1277.97446, 0.39336213280000004, 0.5669086618, 1.5562437931000002, 80735.4857097632, 7.397454441933947E8, 2.7999616636000004, 2.6842289878000005, 3.624387610129374, 6540.1402834594 };
        double[][][] var_3369 = { { { 44.0, 27.0, 6.0 } }, { { 36.0, 15.0, 14.0, 20.0 } }, { { 40.0, 9.0, 4.0, 23.0, 28.0, 25.0, 32.0, 22.0, 17.0, 37.0, 21.0, 42.0, 26.0, 7.0, 5.0, 48.0, 1.0, 49.0, 2.0, 31.0, 33.0, 45.0, 11.0, 0.0, 24.0, 16.0, 30.0, 50.0, 18.0, 46.0, 3.0, 34.0, 10.0, 12.0 } } };
        double[][][] _uD_qJR3ptiQIR_z7A = { { { 96.0, 86.0, 92.0, 55.0, 7.0, 48.0, 33.0, 58.0, 17.0, 38.0 } }, { { 97.0, 67.0, 90.0, 28.0, 54.0, 75.0, 80.0, 11.0, 78.0, 46.0, 83.0, 91.0, 13.0, 82.0, 40.0, 95.0, 0.0, 50.0, 22.0, 53.0, 37.0, 10.0, 25.0, 76.0, 12.0, 24.0, 63.0, 5.0, 85.0, 52.0, 14.0, 101.0, 23.0, 93.0, 45.0, 41.0, 34.0, 87.0, 4.0, 77.0, 9.0, 65.0, 66.0, 21.0, 74.0, 18.0, 70.0, 61.0, 3.0, 2.0, 36.0, 73.0 } }, { { 30.0, 44.0, 16.0, 94.0, 29.0, 88.0, 42.0, 47.0, 81.0, 100.0, 68.0, 39.0, 32.0, 1.0, 27.0, 98.0, 84.0, 15.0, 64.0, 6.0, 62.0, 71.0, 20.0, 43.0, 19.0, 60.0, 31.0, 8.0, 56.0, 35.0, 49.0, 79.0, 89.0, 51.0, 26.0, 59.0, 69.0, 99.0, 57.0, 72.0 } } };
        int[] var_1885 = { 1669649144, 12, 015363043400, 0x91e9d, 011255775752, 0b1001000111110110001010010111110, 015707333105, 904217740, 565529360, 013264175751, 0x21f08538, 1587219028, 01776333, 06474660161, 0x10, 0b1001010010100000110001101000101, 03261515, 1279465593, 011721574551, 1177785388, 017325545532, 0b10101101010101101101, 0b100101010000101000100101100100, 05666041553, 0x404a59bf, 0x574ea, 012134647400, 012577766042, 0b100111000110111100000000011000, 0b1010011110110110001110101110, 0b1101111001100100111111000101011, 0x62c1a04f, 0x4cc3dd6f, 0x69e7a6f6, 0x3e8bddde, 0x5feabcb2, 0x2f1e181a, 0b110110000001100000100101110001, 016640126055, 17, 0x5713cae4, 325038471, 695451103, 997659578, 036, 01131317, 490853, 0x53384872, 0x17, 0b11010, 0x1c4aabd0, 03761023, 0b1110001100011011101111101011001, 0x47058800, 1079854234, 927431, 1187884846, 0b111000, 012673002633, 0x812db, 0b100011010100011001, 026105004, 0b111010, 01612141, 0b1100110111100111110111010101, 016511645021, 01543021015, 1832631823, 1875208664, 0b1100001010000010011111110010110, 017701044131, 04770700661, 0x1b, 0x4f286e8f, 01672532, 810324, 0x13e0d13b, 010161570153, 1128669037, 981063, 015536706615, 124621198, 0b10000001000011111011001101000, 0b1111101101110011, 0b0, 0b1101011111111111010011100110000, 646291, 0x3818c004, 015721207276, 012000324223, 016326100070, 012023506053, 1590669778, 0x188c16ae, 02, 854823087, 06265536741, 0b1010, 1184318849, 0b1001011000110100001010100101, 011526370551, 0x12da4252 };
        int Bkg_Bord4GMi_l_km4u = (int) (-(pYnhskaVf_TWk_jnp_N[76] + Math.asin(pYnhskaVf_TWk_jnp_N[0x9])) + Math.sin(Math.max(-pYnhskaVf_TWk_jnp_N[0x35], pYnhskaVf_TWk_jnp_N[0b100111])));
        long hUopnddhqrhBrshtuh = func_254(0L, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][020])][0][0b11000])]);
        try {
            hUopnddhqrhBrshtuh = EchbdwoerGxkkedw(hUopnddhqrhBrshtuh, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][0x17])][(int) (var_3369[02][0][23])][3])]);
        } finally {
            {
                int WpI2InsTdKrNs_0 = (var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][0][05])] + var_1885[(int) (_uD_qJR3ptiQIR_z7A[0][(int) (var_3369[0b10][0][027])][06])]);
                WpI2InsTdKrNs_0 += (Integer.rotateLeft(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][18])][(int) (var_3369[2][0][027])][(int) (var_3369[0x2][0][0x20])])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][022])][(int) (var_3369[02][0][23])][(int) (var_3369[2][0][032])])]) | Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][16])][(int) (var_3369[0x2][0][0b10111])][(int) (var_3369[0x2][0][06])])]));
            }
            {
                int YAEQbv9rkZvVS_1 = ((var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][0][(int) (var_3369[2][0][0xd])])] ^ var_1885[(int) (_uD_qJR3ptiQIR_z7A[0][(int) (var_3369[02][0][027])][(int) (var_3369[02][0][23])])]) | (var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0x10])][0][034])] ^ var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][0][(int) (var_3369[02][0][0x21])])]));
                {
                    long YAEQbv9rkZvVS_1_n = Long.reverseBytes((1128396661292667373L - 2245902783383777410L));
                    YAEQbv9rkZvVS_1_n ^= YAEQbv9rkZvVS_1;
                }
            }
        }
        try {
            hUopnddhqrhBrshtuh = mfkQ_fFz_mXyp__sKihuQ(hUopnddhqrhBrshtuh, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][022])][(int) (var_3369[02][0][0b10111])][(int) (var_3369[0b10][0][024])])]);
        } finally {
            Integer.toHexString((Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][0][063])]) + (var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][18])][(int) (var_3369[02][0][0x17])][0x1d])] ^ var_1885[(int) (_uD_qJR3ptiQIR_z7A[01][(int) (var_3369[2][0][0x17])][33])]))).length();
        }
        try {
            hUopnddhqrhBrshtuh = mfkQ_fFz_mXyp__sKihuQ(hUopnddhqrhBrshtuh, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[02][0][(int) (var_3369[0b10][0][023])])]);
        } finally {
            {
                long rQH5rc7FnwmMQ_0 = Math.max((478214882864688372L ^ 2254289089834397487L), Long.bitCount(1289524216603063536L));
                rQH5rc7FnwmMQ_0 ^= (456249952598210162L + 1319919766930178457L);
            }
            if (Double.isNaN((double) Long.bitCount((170541318874295131L - 1923534533085199201L)))) {
                System.nanoTime();
            }
        }
        try {
            hUopnddhqrhBrshtuh = EchbdwoerGxkkedw(hUopnddhqrhBrshtuh, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][0b10111])][(int) (var_3369[02][0][23])][0b1])]);
        } finally {
            if (Double.isNaN((double) Long.bitCount(Long.reverseBytes(1546295228606337876L)))) {
                throw new AssertionError();
            }
            {
                int o35VuExtDHC6W_1 = Integer.reverse((var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][0][(int) (var_3369[2][0][0x7])])] + var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][0][(int) (var_3369[02][0][0x11])])]));
                o35VuExtDHC6W_1 |= (var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][18])][(int) (var_3369[02][0][027])][(int) (var_3369[0x2][0][0x3])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][0b10010])][(int) (var_3369[02][0][0b10111])][(int) (var_3369[2][0][012])])]);
            }
            {
                long C2ndSXlzKF0D6_2 = ((1378011756290626582L ^ 1880589481602733375L) + Long.reverseBytes(2139410650691785427L));
                C2ndSXlzKF0D6_2 ^= ((776868518060038885L - 59243367216448749L) ^ Math.max(1391613930083165353L, 653140586809414420L));
            }
        }
        try {
            hUopnddhqrhBrshtuh = OribretFunc(hUopnddhqrhBrshtuh, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0x10])][0][(int) (var_3369[2][0][0b111])])]);
        } finally {
            {
                int wiP7WUHL0jcbF_0 = (Integer.rotateLeft(Math.max(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][16])][(int) (var_3369[0x2][0][23])][19])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b1][0][025])]), var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b1][0][0b0])]) | (Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[02][(int) (var_3369[2][0][0b10111])][045])]) | (var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][020])][(int) (var_3369[0b10][0][027])][(int) (var_3369[0b10][0][0x1c])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0x10])][0][0x26])])));
                wiP7WUHL0jcbF_0 &= (Integer.reverse(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][16])][(int) (var_3369[0b10][0][027])][(int) (var_3369[0b10][0][010])])]) - (var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0b10111])][0][9])] ^ var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][020])][(int) (var_3369[0b10][0][027])][(int) (var_3369[0b10][0][0b11110])])]));
            }
            {
                long SA2yFEg2mjpTH_1 = Long.reverseBytes(Long.reverseBytes(1606532089592646414L));
                SA2yFEg2mjpTH_1 ^= (1279960106066279999L ^ 503448370618333589L);
            }
            if (Integer.compareUnsigned(Integer.reverse(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0b10010])][0][(int) (var_3369[02][0][6])])]), Integer.rotateLeft(var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][0][(int) (var_3369[02][0][02])])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][0][0x1])])) == var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][(int) (var_3369[0x2][0][027])][(int) (var_3369[0b10][0][036])])]) {
                throw new AssertionError();
            }
        }
        try {
            hUopnddhqrhBrshtuh = Gwsjtk(hUopnddhqrhBrshtuh, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][16])][0][(int) (var_3369[2][0][15])])]);
        } finally {
        }
        try {
            try {
                hUopnddhqrhBrshtuh = func_2628(hUopnddhqrhBrshtuh, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0b10000])][(int) (var_3369[0x2][0][23])][(int) (var_3369[0x0][0][00])])]);
            } finally {
                {
                    long ACdPbXYsWhqCo_0 = Long.bitCount(((1110751954526577023L ^ 2077017306248259684L) ^ (487644460434785684L ^ 1429941419825879451L)));
                    ACdPbXYsWhqCo_0 -= (1874446690641052596L ^ 2163582534272857990L);
                }
                {
                    int PLvIVU7tsnquJ_1 = (((var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][23])][(int) (var_3369[0b10][0][027])][(int) (var_3369[2][0][13])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0x10])][0][(int) (var_3369[0x2][0][05])])]) - (var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b1][0][(int) (var_3369[1][0][3])])] ^ var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0b10010])][(int) (var_3369[0x2][0][0x17])][(int) (var_3369[0b1][0][0])])])) ^ (Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][0x10])][0][043])]) ^ Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b1][0][037])])));
                    PLvIVU7tsnquJ_1 -= (var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b1][0][41])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[01][0][(int) (var_3369[02][0][0x15])])]);
                }
                {
                    int hyWq31O3ADCG7_2 = Integer.bitCount(((var_1885[(int) (_uD_qJR3ptiQIR_z7A[1][(int) (var_3369[0x2][0][0x17])][0b11101])] - var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][23])][0][0x2])]) - (var_1885[(int) (_uD_qJR3ptiQIR_z7A[01][0][(int) (var_3369[1][0][0])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][16])][(int) (var_3369[0b10][0][0b10111])][2])])));
                    hyWq31O3ADCG7_2 &= Integer.reverse(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0x10])][(int) (var_3369[2][0][0x17])][(int) (var_3369[1][0][0b10])])]);
                }
            }
        } finally {
        }
        if (Long.compare(hUopnddhqrhBrshtuh, -1547868418284067274L) == var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][(int) (var_3369[02][0][027])][(int) (var_3369[0x2][0][0x19])])]) {
            int uO650_4_9tMJkaB9_aohBV_e = var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][0b10010])][(int) (var_3369[0b10][0][23])][(int) (var_3369[0b10][0][25])])];
        }
        double buB__V2juMvqHO03w3_ = (pYnhskaVf_TWk_jnp_N[0x2d] - Math.log1p(pYnhskaVf_TWk_jnp_N[0b100100]));
        long var_885 = mfkQ_fFz_mXyp__sKihuQ(0L, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0b10000])][(int) (var_3369[02][0][0b10111])][(int) (var_3369[02][0][014])])]);
        var_885 = Gwsjtk(var_885, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][020])][(int) (var_3369[2][0][23])][0x5])]);
        var_885 = func_2628(var_885, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0x10])][(int) (var_3369[2][0][0b10111])][(int) (var_3369[0b10][0][0x1])])]);
        try {
            var_885 = func_254(var_885, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][020])][(int) (var_3369[2][0][0b10111])][0x2b])]);
        } finally {
            {
                int m33FWUEc8wYn6_0 = Integer.reverse((Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[02][0][07])]) + (var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][0][4])] - var_1885[(int) (_uD_qJR3ptiQIR_z7A[1][0][15])])));
                m33FWUEc8wYn6_0 += Integer.reverse(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][020])][(int) (var_3369[02][0][23])][(int) (var_3369[2][0][0xb])])]);
            }
            {
                int rkRkNZPH1mlLi_1 = (Math.max(var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][(int) (var_3369[0x2][0][23])][0b11011])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][16])][(int) (var_3369[0x2][0][027])][(int) (var_3369[0x2][0][29])])]) - Integer.bitCount(var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][0][(int) (var_3369[0x2][0][31])])]));
                {
                    long rkRkNZPH1mlLi_1_n = Math.max((603686448512544986L + 294407950725490808L), Long.rotateLeft(1526786050404846658L, var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x0][(int) (var_3369[02][0][23])][5])]));
                    rkRkNZPH1mlLi_1_n ^= rkRkNZPH1mlLi_1;
                }
            }
            java.util.Objects.hash((var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][0][(int) (var_3369[01][0][0b10])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][(int) (var_3369[0b10][0][027])][0x1])]), (1192026497783643065L + 499177265316835899L));
        }
        var_885 = mfkQ_fFz_mXyp__sKihuQ(var_885, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][022])][0][0b100011])]);
        try {
            var_885 = func_2628(var_885, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][0][(int) (var_3369[2][0][0x5])])]);
        } finally {
            {
                long IDMhV1DCjERNw_0 = ((1152911372133416967L - 640629809441077971L) - (187434691877648905L ^ 1816210450389149746L));
                IDMhV1DCjERNw_0 += (318740470294286239L | 936808779714096145L);
            }
            {
                long p3ygp2H4YjZhb_1 = Long.bitCount(Math.max(1660895285208585737L, 370629109368378395L));
                p3ygp2H4YjZhb_1 |= ((1073955195020040241L - 1346149302351920867L) | Long.rotateLeft(1895661604731824381L, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][027])][(int) (var_3369[0x2][0][027])][0b101])]));
            }
            {
                int h5FYKJ9Hfvc7r_2 = Integer.rotateLeft(Math.max(var_1885[(int) (_uD_qJR3ptiQIR_z7A[2][(int) (var_3369[0b10][0][0x17])][(int) (var_3369[02][0][0x4])])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][020])][(int) (var_3369[2][0][0x17])][(int) (var_3369[0x2][0][031])])]), var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][0x10])][(int) (var_3369[0b10][0][0b10111])][(int) (var_3369[2][0][0b11010])])]);
                {
                    long h5FYKJ9Hfvc7r_2_n = (Long.reverseBytes(749347397531287642L) | (1306182628557286343L - 1565546797555660971L));
                    h5FYKJ9Hfvc7r_2_n ^= h5FYKJ9Hfvc7r_2;
                }
            }
        }
        try {
            var_885 = OribretFunc(var_885, -var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][020])][(int) (var_3369[2][0][0x17])][(int) (var_3369[0b10][0][31])])]);
        } finally {
        }
        try {
            var_885 = z_Cd_aujU_pjrJzLcsOy_bHEA(var_885, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][0x10])][(int) (var_3369[0b10][0][0b10111])][(int) (var_3369[2][0][040])])]);
        } finally {
            java.util.Objects.hash((var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][16])][(int) (var_3369[0x2][0][0x17])][(int) (var_3369[0b10][0][041])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][0][8])]), (1346505064962106328L ^ 744120586318686594L));
            {
                long Yi9MCiZH8tTTu_1 = Long.rotateLeft(613854392956533699L, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][18])][(int) (var_3369[02][0][0b10111])][046])]);
                Yi9MCiZH8tTTu_1 -= (Long.rotateLeft(585709122576420857L, var_1885[(int) (_uD_qJR3ptiQIR_z7A[02][0][0xd])]) | (138738093389715898L - 381510130398445406L));
            }
        }
        var_885 = OribretFunc(var_885, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][022])][0][(int) (var_3369[02][0][18])])]);
        if (Long.compare(var_885, -4961334633222465540L) == var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0x12])][(int) (var_3369[0x2][0][23])][(int) (var_3369[02][0][25])])]) {
            int var_1072 = var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][0][(int) (var_3369[02][0][25])])];
        }
        double[] _n_ns57DI_A5UGkjgoOxs_u = { Double.longBitsToDouble(-798711607489354990L), Double.longBitsToDouble(-794208007861984494L), Double.longBitsToDouble(-796459807675669742L), Double.longBitsToDouble(-825733205253577966L), Double.longBitsToDouble(-826859105160420590L), Double.longBitsToDouble(-827985005067263214L), Double.longBitsToDouble(-820103705719364846L), Double.longBitsToDouble(-821229605626207470L), Double.longBitsToDouble(-822918455486471406L), Double.longBitsToDouble(-822355505533050094L) };
        Bkg_Bord4GMi_l_km4u = (int) ((pYnhskaVf_TWk_jnp_N[0x20] - Math.acos(pYnhskaVf_TWk_jnp_N[0x17])) - Math.log1p((pYnhskaVf_TWk_jnp_N[0107] - Math.asin(pYnhskaVf_TWk_jnp_N[107]))));
        while (Bkg_Bord4GMi_l_km4u != (int) Math.max((pYnhskaVf_TWk_jnp_N[0x56] - Math.atan(pYnhskaVf_TWk_jnp_N[020])), (pYnhskaVf_TWk_jnp_N[27] + Math.atan(pYnhskaVf_TWk_jnp_N[03])))) {
            switch(Bkg_Bord4GMi_l_km4u) {
                case 0b1110101101000001101110010001101:
                    buB__V2juMvqHO03w3_ = func_1724(_n_ns57DI_A5UGkjgoOxs_u);
                    Bkg_Bord4GMi_l_km4u = (int) (Math.max(pYnhskaVf_TWk_jnp_N[17], pYnhskaVf_TWk_jnp_N[0b1001101]) - Math.acos(Math.min(pYnhskaVf_TWk_jnp_N[0163], pYnhskaVf_TWk_jnp_N[0b1001000])));
                    break;
                case 05405717255:
                    Bkg_Bord4GMi_l_km4u = (int) ((pYnhskaVf_TWk_jnp_N[0xf] + Math.tanh(pYnhskaVf_TWk_jnp_N[0b1001011])) + Math.asin(Math.max(-pYnhskaVf_TWk_jnp_N[96], pYnhskaVf_TWk_jnp_N[12])));
                    break;
                case 1591530046:
                    for (int tWkgwyqovbvGgdzetagwb = (int) (Math.atan(Double.longBitsToDouble(4603715097446904863L)) + -(Math.sinh(pYnhskaVf_TWk_jnp_N[0b111110]) + -pYnhskaVf_TWk_jnp_N[0b11110])); tWkgwyqovbvGgdzetagwb < _n_ns57DI_A5UGkjgoOxs_u.length; tWkgwyqovbvGgdzetagwb++) {
                        long CKUHYOVTFA_ABQCMTNA_DBEQH = 0;
                        try {
                            CKUHYOVTFA_ABQCMTNA_DBEQH = Double.doubleToRawLongBits(_n_ns57DI_A5UGkjgoOxs_u[tWkgwyqovbvGgdzetagwb]);
                        } finally {
                            Math.abs(((var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][18])][(int) (var_3369[2][0][0b10111])][(int) (var_3369[0b10][0][0b1000])])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][020])][(int) (var_3369[02][0][0b10111])][0b1101])]) + Integer.reverse(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][18])][0][0x6])])));
                            {
                                long uR1ThemR0y2zr_1 = (38972635800264505L - 829435978420065434L);
                                uR1ThemR0y2zr_1 += (Long.bitCount(1857211284762259553L) | Math.max(1783715629055696715L, 1686410264105973919L));
                            }
                            {
                                int qEpdf8siH2RV3_2 = Integer.reverse(Integer.rotateLeft(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0x12])][0][023])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][(int) (var_3369[2][0][23])][047])]));
                                {
                                    long qEpdf8siH2RV3_2_n = (Math.max(1745168488162901944L, 2114270872196425407L) - Math.max(2167459272307034085L, 20760884367471071L));
                                    qEpdf8siH2RV3_2_n ^= qEpdf8siH2RV3_2;
                                }
                            }
                        }
                        try {
                            CKUHYOVTFA_ABQCMTNA_DBEQH ^= 2796171840526644247L;
                        } finally {
                            {
                                int brZ4Ua2bKuqFO_0 = Integer.rotateLeft(((var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0b10000])][0][(int) (var_3369[2][0][0x0])])] - var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][0x17])][(int) (var_3369[02][0][0b10111])][0b1000])]) + Math.max(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][18])][(int) (var_3369[2][0][0b10111])][(int) (var_3369[0b10][0][0x18])])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0x12])][0][(int) (var_3369[02][0][0b1100])])])), var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[2][0][0x17])][(int) (var_3369[0b10][0][0b10111])][0b101])]);
                                brZ4Ua2bKuqFO_0 += Integer.bitCount((var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][0][0b1000])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0b10000])][0][(int) (var_3369[02][0][0b11011])])]));
                            }
                            if (Double.isNaN((double) Long.bitCount((1352213039829774639L ^ 2304967400303521366L)))) {
                                System.nanoTime();
                            }
                            {
                                int tp7UHab7CplXd_2 = (var_1885[(int) (_uD_qJR3ptiQIR_z7A[2][0][0x12])] | var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x1][0][057])]);
                                tp7UHab7CplXd_2 |= ((var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][0][0b1001])] + var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][0x10])][(int) (var_3369[02][0][0b10111])][39])]) ^ Integer.rotateLeft(var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][23])][0][4])], var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0x12])][(int) (var_3369[0x2][0][0x17])][(int) (var_3369[02][0][22])])]));
                            }
                        }
                        try {
                            try {
                                CKUHYOVTFA_ABQCMTNA_DBEQH -= -1767628187892705588L;
                            } finally {
                                {
                                    int Z6tpipwKJ7GDy_0 = ((var_1885[(int) (_uD_qJR3ptiQIR_z7A[0x2][(int) (var_3369[0b10][0][0x17])][(int) (var_3369[0x1][0][01])])] - var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0x12])][(int) (var_3369[0x2][0][027])][0b0])]) - (var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0b10000])][0][(int) (var_3369[0b10][0][0x9])])] + var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[02][0][020])][(int) (var_3369[0x2][0][0x17])][027])]));
                                    Z6tpipwKJ7GDy_0 ^= Integer.reverse(Integer.reverse(var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b1][0][(int) (var_3369[00][0][2])])]));
                                }
                            }
                        } finally {
                            {
                                long h4L7J7UzgH6Fe_0 = (Long.rotateLeft(Long.rotateLeft(882953303823485643L, var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][23])][0][(int) (var_3369[0x2][0][0b1110])])]), var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0b10][0][0b10010])][(int) (var_3369[0x2][0][0b10111])][024])]) | Long.bitCount((232887691814444455L + 494384605141510037L)));
                                h4L7J7UzgH6Fe_0 ^= (292211421479520970L ^ 1244846673075352585L);
                            }
                        }
                        try {
                            CKUHYOVTFA_ABQCMTNA_DBEQH += 6143059460036771783L;
                        } finally {
                        }
                        _n_ns57DI_A5UGkjgoOxs_u[tWkgwyqovbvGgdzetagwb] = Double.longBitsToDouble(CKUHYOVTFA_ABQCMTNA_DBEQH);
                    }
                    Bkg_Bord4GMi_l_km4u = (int) ((Math.log(pYnhskaVf_TWk_jnp_N[0b1010010]) + pYnhskaVf_TWk_jnp_N[0b1101111]) - Math.tan((Math.acos(pYnhskaVf_TWk_jnp_N[0x21]) + pYnhskaVf_TWk_jnp_N[34])));
                    break;
                case 07375477031:
                    String dUofjbd = "";
                    int[] iJasuyltsv = { 0x0053, 0x0071, 0x005B, 0x0065, 0x0058, 0x0052, 0x0060, 0x004F, 0x0008, 0x0029, 0x0047, 0x0055, 0x0045, 0x003A, 0x004A, 0x003C, 0x003F, 0x003B, 0xFFEA, 0x0004, 0xFFE4, 0xFFE6, 0xFFEC, 0xFFF1, 0x001E };
                    for (int _7ZKDWLbrGZY2u___mnT9z = (int) Math.max((Math.log(pYnhskaVf_TWk_jnp_N[0x5e]) + -pYnhskaVf_TWk_jnp_N[0b1010100]), -Math.max(pYnhskaVf_TWk_jnp_N[0x32], pYnhskaVf_TWk_jnp_N[58])), mUcbdrdiycoKevhdubfrdBqjgxsmur = (int) Math.max((pYnhskaVf_TWk_jnp_N[0x31] - Math.atan(pYnhskaVf_TWk_jnp_N[0x2b])), -Math.min(pYnhskaVf_TWk_jnp_N[20], pYnhskaVf_TWk_jnp_N[025])); _7ZKDWLbrGZY2u___mnT9z < (int) ((Math.sinh(pYnhskaVf_TWk_jnp_N[0x57]) + -pYnhskaVf_TWk_jnp_N[85]) + Math.cosh((pYnhskaVf_TWk_jnp_N[0162] - Math.tanh(pYnhskaVf_TWk_jnp_N[0x5f])))); _7ZKDWLbrGZY2u___mnT9z++) {
                        mUcbdrdiycoKevhdubfrdBqjgxsmur = iJasuyltsv[_7ZKDWLbrGZY2u___mnT9z];
                        for (int bFkasjLgwgeRruaoyg = (int) ((Math.cos(pYnhskaVf_TWk_jnp_N[2]) + pYnhskaVf_TWk_jnp_N[0b1010001]) - Math.acos(Math.min(pYnhskaVf_TWk_jnp_N[101], pYnhskaVf_TWk_jnp_N[0x28]))); bFkasjLgwgeRruaoyg < (int) (Math.atan((Math.log10(pYnhskaVf_TWk_jnp_N[0xe]) + -pYnhskaVf_TWk_jnp_N[0x12])) + (pYnhskaVf_TWk_jnp_N[0b110] - Math.log1p(pYnhskaVf_TWk_jnp_N[0152]))); bFkasjLgwgeRruaoyg++) {
                            try {
                                mUcbdrdiycoKevhdubfrdBqjgxsmur = (((~(mUcbdrdiycoKevhdubfrdBqjgxsmur & (int) ((pYnhskaVf_TWk_jnp_N[90] - Math.asin(pYnhskaVf_TWk_jnp_N[98])) - Math.cbrt((pYnhskaVf_TWk_jnp_N[0x61] + Math.log10(pYnhskaVf_TWk_jnp_N[0x2f])))))) & (int) (Math.cbrt((pYnhskaVf_TWk_jnp_N[42] - Math.sqrt(pYnhskaVf_TWk_jnp_N[10]))) + (pYnhskaVf_TWk_jnp_N[26] + Math.tanh(pYnhskaVf_TWk_jnp_N[074])))) + (int) (Math.sin((pYnhskaVf_TWk_jnp_N[41] - Math.acos(pYnhskaVf_TWk_jnp_N[0b1011011]))) + (Math.sin(pYnhskaVf_TWk_jnp_N[0x71]) + pYnhskaVf_TWk_jnp_N[104]))) & (int) (Math.max(pYnhskaVf_TWk_jnp_N[0x2c], pYnhskaVf_TWk_jnp_N[0x38]) - Math.sinh(Math.min(pYnhskaVf_TWk_jnp_N[0b1100110], pYnhskaVf_TWk_jnp_N[0b1000110])));
                            } finally {
                                if (String.valueOf((var_1885[(int) (_uD_qJR3ptiQIR_z7A[02][(int) (var_3369[0x2][0][23])][(int) (var_3369[0b0][0][1])])] - var_1885[(int) (_uD_qJR3ptiQIR_z7A[(int) (var_3369[0x2][0][0x10])][0][(int) (var_3369[0b10][0][0x16])])])).length() < var_1885[(int) (_uD_qJR3ptiQIR_z7A[0b10][(int) (var_3369[02][0][027])][16])]) {
                                    throw new AssertionError();
                                }
                            }
                        }
                        for (int BCSJLAED = (int) Math.min((pYnhskaVf_TWk_jnp_N[59] + Math.tan(pYnhskaVf_TWk_jnp_N[0x70])), (pYnhskaVf_TWk_jnp_N[31] + Math.log(pYnhskaVf_TWk_jnp_N[0111]))); BCSJLAED < (int) (-(pYnhskaVf_TWk_jnp_N[7] - Math.acos(pYnhskaVf_TWk_jnp_N[0b1101100])) + Math.exp((pYnhskaVf_TWk_jnp_N[0b1001010] - Math.asin(pYnhskaVf_TWk_jnp_N[54])))); BCSJLAED++) {
                            try {
                                mUcbdrdiycoKevhdubfrdBqjgxsmur = ((mUcbdrdiycoKevhdubfrdBqjgxsmur & (int) ((pYnhskaVf_TWk_jnp_N[0x53] - Math.log(pYnhskaVf_TWk_jnp_N[0b1000011])) + Math.log10((pYnhskaVf_TWk_jnp_N[0100] + Math.tanh(pYnhskaVf_TWk_jnp_N[68]))))) + _7ZKDWLbrGZY2u___mnT9z) & (int) Math.min(Math.max(pYnhskaVf_TWk_jnp_N[0b100011], pYnhskaVf_TWk_jnp_N[0b101]), (pYnhskaVf_TWk_jnp_N[045] - Math.tanh(pYnhskaVf_TWk_jnp_N[0b110100])));
                            } finally {
                                if (Double.isNaN((double) Long.bitCount((934571893010780263L | 2203842086156844665L)))) {
                                    System.nanoTime();
                                }
                            }
                        }
                        for (int VQCQHX_HBAAQHL = (int) (-(Math.sinh(pYnhskaVf_TWk_jnp_N[92]) + pYnhskaVf_TWk_jnp_N[056]) + Math.expm1((pYnhskaVf_TWk_jnp_N[0b1011001] - Math.log(pYnhskaVf_TWk_jnp_N[38])))); VQCQHX_HBAAQHL < (int) Math.max((-pYnhskaVf_TWk_jnp_N[0b110111] + Math.cbrt(pYnhskaVf_TWk_jnp_N[0b1100011])), -(Math.sqrt(pYnhskaVf_TWk_jnp_N[0102]) + -pYnhskaVf_TWk_jnp_N[78])); VQCQHX_HBAAQHL++) {
                            mUcbdrdiycoKevhdubfrdBqjgxsmur = (mUcbdrdiycoKevhdubfrdBqjgxsmur ^ (((mUcbdrdiycoKevhdubfrdBqjgxsmur & (int) ((Math.cos(pYnhskaVf_TWk_jnp_N[0x39]) + pYnhskaVf_TWk_jnp_N[0b1010000]) + Math.tan((pYnhskaVf_TWk_jnp_N[0b1001111] - Math.sinh(pYnhskaVf_TWk_jnp_N[88]))))) << (int) Math.max((pYnhskaVf_TWk_jnp_N[105] - Math.log10(pYnhskaVf_TWk_jnp_N[13])), -(pYnhskaVf_TWk_jnp_N[0x1c] - Math.asin(pYnhskaVf_TWk_jnp_N[0xb])))) & (int) (Math.min(pYnhskaVf_TWk_jnp_N[0x6e], pYnhskaVf_TWk_jnp_N[0x16]) - Math.expm1((Math.sqrt(pYnhskaVf_TWk_jnp_N[00]) + -pYnhskaVf_TWk_jnp_N[035]))))) & (int) (Math.acos(Math.max(-pYnhskaVf_TWk_jnp_N[0b1], pYnhskaVf_TWk_jnp_N[0b10011])) + (pYnhskaVf_TWk_jnp_N[103] - Math.exp(pYnhskaVf_TWk_jnp_N[0x41])));
                        }
                        dUofjbd += (char) (mUcbdrdiycoKevhdubfrdBqjgxsmur & (int) ((Math.expm1(pYnhskaVf_TWk_jnp_N[25]) + pYnhskaVf_TWk_jnp_N[0x8]) - Math.cbrt((pYnhskaVf_TWk_jnp_N[0x33] - Math.sqrt(pYnhskaVf_TWk_jnp_N[0105])))));
                    }
                    System.out.format(dUofjbd, buB__V2juMvqHO03w3_);
                    Bkg_Bord4GMi_l_km4u ^= (int) ((pYnhskaVf_TWk_jnp_N[0b1100100] + Math.sinh(pYnhskaVf_TWk_jnp_N[0b111101])) - Math.log((Math.tan(pYnhskaVf_TWk_jnp_N[0x18]) + pYnhskaVf_TWk_jnp_N[0x30])));
                    break;
                case 0x4baff900:
                    Bkg_Bord4GMi_l_km4u = (int) Math.max((Math.sinh(pYnhskaVf_TWk_jnp_N[0x6d]) + pYnhskaVf_TWk_jnp_N[63]), (pYnhskaVf_TWk_jnp_N[0135] - Math.exp(pYnhskaVf_TWk_jnp_N[0x4])));
                    break;
            }
        }
    }

    static long EchbdwoerGxkkedw(long acc, int s) {
        int[][] iYrukmdnpwxJfclucyiszRfqkamj = { { 0377 }, { 1 } };
        int p = ((int) (acc & 0x7fffL)) * (((s & iYrukmdnpwxJfclucyiszRfqkamj[00][0x0]) | iYrukmdnpwxJfclucyiszRfqkamj[1][0x0]));
        long q = acc + (long) p;
        return q ^ (long) Integer.bitCount(s ^ (int) (acc & 0xFFFFFFFFL));
    }

    static long mfkQ_fFz_mXyp__sKihuQ(long acc, int s) {
        int[] g_tLnagmHfbnqyqzfpRxftryzqpq = { 17, 01, 0b111 };
        long v = acc * 31L + (long) (s ^ (s >>> g_tLnagmHfbnqyqzfpRxftryzqpq[0b10]));
        return Long.rotateLeft(v, g_tLnagmHfbnqyqzfpRxftryzqpq[0]) ^ (long) Short.reverseBytes((short) (s + g_tLnagmHfbnqyqzfpRxftryzqpq[1]));
    }

    static long func_2628(long acc, int s) {
        int[][] OGFOK = { { 01, 0b11, 0x2 }, { 0x0 } };
        double[][] oA_sSEVLdO__MdcLmqK_hx9m = { { 1.0, 13107.0, 1.635557093E9 }, { 63.0, 12.0, 64.0, 1.935935139E9 } };
        long x = Long.divideUnsigned(acc | 1L, (long) ((s & (int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[0b0][0]][OGFOK[0b1][00]])) + (int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[01][0b0]][OGFOK[0b1][0x0]]))) + acc;
        try {
            return x ^ Long.lowestOneBit((long) (s ^ (int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[0x1][0]][OGFOK[00][00]])));
        } finally {
            if (Long.bitCount((Long.reverseBytes(1796598765124807253L) - Long.reverseBytes(2050271309776375464L))) > (int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[0b0][0]][OGFOK[0][2]])) {
                System.nanoTime();
            }
            {
                int xs0uT0BGJKwPG_1 = Integer.reverse(((int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[0b1][00]][OGFOK[00][0b10]]) ^ (int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[0][0b0]][OGFOK[00][0b1]])));
                {
                    long xs0uT0BGJKwPG_1_n = Long.rotateLeft((389645124425194489L + 1912187614870680940L), (int) (oA_sSEVLdO__MdcLmqK_hx9m[OGFOK[0b0][0]][OGFOK[0][00]]));
                    xs0uT0BGJKwPG_1_n ^= xs0uT0BGJKwPG_1;
                }
            }
            {
                long UzFXMMIuLH9tt_2 = Math.max(939841685771209779L, 1658985215850208760L);
                UzFXMMIuLH9tt_2 ^= (Long.reverseBytes(997017317576927491L) | Long.bitCount(813264804790690895L));
            }
        }
    }

    static long GmshdsaNntyu(long acc, int s) {
        double[][] hEoundsbjsgBkcfmeoTtxcx = { { 1.0 }, { 0.0 } };
        int[][] var_1192 = { { 00 }, { 0x1 } };
        double[][] var_941 = { { 63.0 }, { 1.0 } };
        long h = Long.rotateLeft(acc ^ (long) Integer.reverse(s), (s & (int) (var_941[var_1192[(int) (hEoundsbjsgBkcfmeoTtxcx[0x1][0])][(int) (hEoundsbjsgBkcfmeoTtxcx[1][0])]][var_1192[(int) (hEoundsbjsgBkcfmeoTtxcx[0x1][0b0])][(int) (hEoundsbjsgBkcfmeoTtxcx[0x1][00])]])));
        return Long.reverseBytes(h) ^ (long) (s << (int) (var_941[var_1192[(int) (hEoundsbjsgBkcfmeoTtxcx[0x0][0])][(int) (hEoundsbjsgBkcfmeoTtxcx[1][00])]][var_1192[(int) (hEoundsbjsgBkcfmeoTtxcx[01][0b0])][(int) (hEoundsbjsgBkcfmeoTtxcx[01][00])]]));
    }

    static long PbeieabgzwFunc(long acc, int s) {
        double[] VEiVlYgyug1e__iZNQ = { 1.0, 0.0 };
        int[][] XGxY_BhFF59Rlf9_L_C7i_N = { { 0b101010101010101, 0b1 }, { 65535 } };
        return (acc | (long) Integer.min(s, s ^ XGxY_BhFF59Rlf9_L_C7i_N[(int) (VEiVlYgyug1e__iZNQ[01])][(int) (VEiVlYgyug1e__iZNQ[0x1])])) ^ (long) Long.highestOneBit((long) ((s & XGxY_BhFF59Rlf9_L_C7i_N[(int) (VEiVlYgyug1e__iZNQ[0])][(int) (VEiVlYgyug1e__iZNQ[0x1])]) | XGxY_BhFF59Rlf9_L_C7i_N[(int) (VEiVlYgyug1e__iZNQ[0x1])][(int) (VEiVlYgyug1e__iZNQ[0])]));
    }

    static long z_Cd_aujU_pjrJzLcsOy_bHEA(long acc, int s) {
        double[][] var_114 = { { 0.0 }, { 1.0, 2.0 } };
        double[][][] var_2277 = { { { 17.0 } }, { { 1.0 } }, { { 37.0, 7.0 } } };
        long v = acc * 31L + (long) (s ^ (s >>> (int) (var_2277[(int) (var_114[1][0x1])][(int) (var_114[0x0][00])][(int) (var_114[1][0])])));
        try {
            try {
                return Long.rotateLeft(v, (int) (var_2277[(int) (var_114[0][0b0])][(int) (var_114[0][00])][(int) (var_114[0x0][00])])) ^ (long) Short.reverseBytes((short) (s + (int) (var_2277[(int) (var_114[1][00])][(int) (var_114[0][00])][(int) (var_114[00][0])])));
            } finally {
            }
        } finally {
            String.valueOf(Long.rotateLeft(112893008311463021L, (int) (var_2277[(int) (var_114[0b1][01])][(int) (var_114[0b0][00])][(int) (var_114[0b0][00])]))).indexOf("-");
            String.valueOf(Long.bitCount(1533918405191263805L)).indexOf("-");
        }
    }

    static long Gwsjtk(long acc, int s) {
        double[][] mDfhyzfv = { { 1.0 }, { 0.0 } };
        double[][] tFjummmeroeObdaztqgo = { { 0.0, 1.0 }, { 2.0 } };
        double[][][] AR_y3Hof_tAS_vv_D12CR = { { { 1.0 } }, { { 3.0 } }, { { 255.0 } } };
        double d = StrictMath.scalb((double) ((s & (int) (AR_y3Hof_tAS_vv_D12CR[(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[0x0][0x0])][(int) (mDfhyzfv[0b1][0])])][(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[1][0b0])][(int) (mDfhyzfv[01][0])])][(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[1][0])][(int) (mDfhyzfv[1][0])])])) + (int) (AR_y3Hof_tAS_vv_D12CR[(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[0b1][0b0])][(int) (mDfhyzfv[0b1][0b0])])][(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[1][0b0])][(int) (mDfhyzfv[0x1][0])])][(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[01][0])][(int) (mDfhyzfv[1][00])])])), (int) (acc & 15L));
        return acc ^ Long.rotateLeft(Double.doubleToRawLongBits(d), (int) (AR_y3Hof_tAS_vv_D12CR[(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[1][00])][(int) (mDfhyzfv[0b0][00])])][(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[0x1][0])][(int) (mDfhyzfv[0x1][00])])][(int) (tFjummmeroeObdaztqgo[(int) (mDfhyzfv[01][0])][(int) (mDfhyzfv[1][0x0])])]));
    }

    static long OribretFunc(long acc, int s) {
        double[] DEIVM_HIFHPZ_NQQTKJZP = { 2.0, 0.0, 1.0 };
        double[] sLxufrHxjzayRmuyeeo = { 1.0, 63.0, 12.0 };
        long h = Long.rotateLeft(acc ^ (long) Integer.reverse(s), (s & (int) (sLxufrHxjzayRmuyeeo[(int) (DEIVM_HIFHPZ_NQQTKJZP[0b10])])));
        try {
            return Long.reverseBytes(h) ^ (long) (s << (int) (sLxufrHxjzayRmuyeeo[(int) (DEIVM_HIFHPZ_NQQTKJZP[1])]));
        } finally {
            {
                long ap4ErzcxMOQO2_0 = (2263764385601807919L | 867587560710949279L);
                ap4ErzcxMOQO2_0 -= Long.rotateLeft(106515146572456039L, (int) (sLxufrHxjzayRmuyeeo[(int) (DEIVM_HIFHPZ_NQQTKJZP[0x0])]));
            }
        }
    }

    static long func_254(long acc, int s) {
        int[][] _of_jWw2lvb0E5NPQP_ = { { 16 }, { 0x1f, 1 } };
        return Long.rotateRight(acc ^ Double.doubleToRawLongBits((double) (s ^ (s >>> _of_jWw2lvb0E5NPQP_[0x0][0b0]))), (s & _of_jWw2lvb0E5NPQP_[0b1][0]) + _of_jWw2lvb0E5NPQP_[0x1][1]);
    }

    static long kkBWAE_UepH_Y_k(long acc, int s) {
        double[] NFVFLDT_MLSII = { 1.0, 0.0 };
        int[] var_3697 = { 0x0, 01 };
        double[][] ZQAGUDSU = { { 31.0 }, { 16.0, 1.0 } };
        return Long.rotateRight(acc ^ Double.doubleToRawLongBits((double) (s ^ (s >>> (int) (ZQAGUDSU[var_3697[(int) (NFVFLDT_MLSII[00])]][var_3697[(int) (NFVFLDT_MLSII[1])]])))), (s & (int) (ZQAGUDSU[var_3697[(int) (NFVFLDT_MLSII[0b1])]][var_3697[(int) (NFVFLDT_MLSII[01])]])) + (int) (ZQAGUDSU[var_3697[(int) (NFVFLDT_MLSII[00])]][var_3697[(int) (NFVFLDT_MLSII[0x0])]]));
    }

    static long func_2218(long acc, int s) {
        double[] OVSDBXUVP_ERRXUHOTTT_TMLMOAMWC = { 1.0, 255.0 };
        int p = ((int) (acc & 0x7fffL)) * (((s & (int) (OVSDBXUVP_ERRXUHOTTT_TMLMOAMWC[01])) | (int) (OVSDBXUVP_ERRXUHOTTT_TMLMOAMWC[00])));
        long q = acc + (long) p;
        return q ^ (long) Integer.bitCount(s ^ (int) (acc & 0xFFFFFFFFL));
    }

    static long EjvlulFunc(long acc, int s) {
        double[][] Z__kv5X9dRVWczD40R1_qU = { { 255.0 }, { 1.0 } };
        int p = ((int) (acc & 0x7fffL)) * (((s & (int) (Z__kv5X9dRVWczD40R1_qU[00][0b0])) | (int) (Z__kv5X9dRVWczD40R1_qU[1][0x0])));
        long q = acc + (long) p;
        return q ^ (long) Integer.bitCount(s ^ (int) (acc & 0xFFFFFFFFL));
    }

    static long RcfklfsvySkvvkfxio(long acc, int s) {
        double[][] OJZDQVX = { { 31.0 }, { 16.0, 1.0 } };
        return Long.rotateRight(acc ^ Double.doubleToRawLongBits((double) (s ^ (s >>> (int) (OJZDQVX[1][0x0])))), (s & (int) (OJZDQVX[0b0][00])) + (int) (OJZDQVX[0b1][01]));
    }

    static long YbmgixddMwmci(long acc, int s) {
        int[][][] AVTUKZK_EYQJKZ_DYWLHQE = { { { 0x2 } }, { { 0x0 } }, { { 01 } } };
        int[][][] YJJGIBISLP_UPNDTH = { { { 0b1111110001110111000110001000111, 922185971, 0x3333 } }, { { 1181855317 } }, { { 01, 2059872629, 077 } } };
        long x = Long.divideUnsigned(acc | 1L, (long) ((s & YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[0x0][0][0x0]][AVTUKZK_EYQJKZ_DYWLHQE[0b1][0][0]][AVTUKZK_EYQJKZ_DYWLHQE[0b0][0][0b0]]) + YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[0b0][0][0x0]][AVTUKZK_EYQJKZ_DYWLHQE[01][0][0b0]][AVTUKZK_EYQJKZ_DYWLHQE[0b1][0][0x0]])) + acc;
        try {
            return x ^ Long.lowestOneBit((long) (s ^ YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[0b1][0][00]][AVTUKZK_EYQJKZ_DYWLHQE[0b1][0][00]][AVTUKZK_EYQJKZ_DYWLHQE[0][0][00]]));
        } finally {
            {
                int G5NhXr7tFFaTC_0 = ((YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[02][0][00]][AVTUKZK_EYQJKZ_DYWLHQE[1][0][00]][AVTUKZK_EYQJKZ_DYWLHQE[01][0][0x0]] ^ YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[0][0][0x0]][AVTUKZK_EYQJKZ_DYWLHQE[0x1][0][0x0]][AVTUKZK_EYQJKZ_DYWLHQE[02][0][0x0]]) - (YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[0x1][0][0b0]][AVTUKZK_EYQJKZ_DYWLHQE[0x1][0][0b0]][AVTUKZK_EYQJKZ_DYWLHQE[02][0][0b0]] ^ YJJGIBISLP_UPNDTH[AVTUKZK_EYQJKZ_DYWLHQE[1][0][00]][AVTUKZK_EYQJKZ_DYWLHQE[0x1][0][00]][AVTUKZK_EYQJKZ_DYWLHQE[1][0][0x0]]));
                {
                    long G5NhXr7tFFaTC_0_n = Math.max((1062773524052389456L ^ 208437562783108409L), Math.max(1032162486000862022L, 144487339447778480L));
                    G5NhXr7tFFaTC_0_n ^= G5NhXr7tFFaTC_0;
                }
            }
            {
                long oqQDpJxCTcowG_1 = Math.max(((2002205095727026976L - 569714230445863664L) ^ (575313912689883427L ^ 1066381897984867502L)), (Long.bitCount(331330719886160503L) + Long.reverseBytes(1531965825171035842L)));
                oqQDpJxCTcowG_1 |= (610512951195821416L + 632028589065970377L);
            }
            Long.toUnsignedString(Long.reverseBytes((588231841733566167L ^ 694455944655989021L))).hashCode();
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
 * Version        : v1.05
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
    //  array_int_crypt = true,
    //  array_char_crypt = true,
    //  array_double_crypt = true,
    //  array_string_crypt = true,
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
 * Version        : v1.05
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

* Visit my site at — https://www.pelock.com
* Twitter — https://twitter.com/PELock
* GitHub — https://github.com/PELock