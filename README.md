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
// An output from JObfuscator v1.04 - Bartosz Wójcik
//
// Website   : https://www.pelock.com/products/jobfuscator
// Version   : v1.04
// Params    : /MixCodeFlow /RenMethods /RenVars /ShuffleMethods /IntsMathCrypt
//             /CryptStr /IntsToArray /DblsToArray
// New lines : Windows (CRLF - \r\n)
// Date      : 05.08.2021
//
////////////////////////////////////////////////////////////////////////////////

import java.util.*;
import java.lang.*;
import java.io.*;
import java.lang.Math.*;

class Ideone {

    public static void main(String[] args) {
        double[] var_3643 = { 11.281129091070447, 8.215990040064463, 9.335603284152908, 6.577895383020224, 7.877805395297853, 0.9548404018895811, 5.272519318820092, 12.245640663335054, 1.9976550397430217, 10.498728922195335, 4.456573802948024, 2.6442660372556444, 3.7216852394828073 };
        double[] POCKKZB_FGNQQA = { 8.38801852183473, 2.284191901516045, 5.084540489182378, 1.674058425502392, 6.582113966026355, 4.535954119796876, 9.655576838937206, 0.9057730473532776, 12.594924738730645, 7.746648086079376, 11.98098322298382, 3.255923593789993, 10.419132138693842 };
        int[] BQ__Y_IAsVbM2emsVuNM_ = { 7, 3, 5, 1, 2, 6, 8, 12, 9, 0, 4, 11, 10 };
        double[] jY__n3HVSq_WnFXQMnt = { 4.522937188633843, 7.63592787991592, 9.711938391204889, 12.329314329092874, 1.1257488711853099, 11.26843992090746, 0.20656899168837578, 8.596210417144972, 6.313987076769585, 2.726188726136701, 5.437577113574992, 10.94073555701292, 3.2325862076196463 };
        int[] var_801 = { 6, 10, 4, 5, 0, 12, 3, 8, 7, 9, 1, 11, 2 };
        double[] var_3117 = { 1.59679966392783E9, 5.09464, 1.7081, 1.59679967201455E9, 8221.83558, 0.6956, 81286.37426, 11.30573, 1.87014187726384E9, 0.0, 0.30216, 1.93861225375307E9, 1.61031449284985E9 };
        double[] p_vc56jpND__QGGjzT4_Wo7 = { 1.8560312987803957, 2.4090487677657637, 0.8107141612789537 };
        int[] CLOHOQ_TOCOXGBRWY_PVBHFAV = { 0, 2, 1 };
        int[] g_hFqjbczKirudqjb = { 1, 0, 2 };
        int[] A7c7WIo__fQMQjM_lR = { 1, 0, 2 };
        int[] fKzmro = { 0, 1, 2 };
        double[] pFlxasazuVysmwcpkfm = { 1.7137421654720035, 0.880784281506382, 2.044091478491187 };
        double[] b_9rz1_gUCNc_ceKC = { 25.495116489488254, 65535.73197007176, 0.7422593232260603 };
        int mZwtvvepUboureeved = (int) (-var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[4])])]])]] + Math.log(var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[11])])]])]]));
        double kW2_ZQnBOs9VL_mjKXcB__4 = var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[6])])]])]];
        double[] _KnlkZiv_t6Ohx_xWp_9M = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        mZwtvvepUboureeved = (int) (var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[8])])]])]] - Math.sinh(var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[2])])]])]]));
        while (mZwtvvepUboureeved != (int) (var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[3])])]])]] + Math.sin(var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[9])])]])]]))) {
            switch(mZwtvvepUboureeved) {
                case 1678784867:
                    String var_1767 = "";
                    int[] _KhlYbJNlonwV_I_OOZKAb_ = { 0x0052, 0x0073, 0x005C, 0x0069, 0x005B, 0x005E, 0x006D, 0x005B, 0x001F, 0x0033, 0x0050, 0x0061, 0x0050, 0x005E, 0x006B, 0x0056, 0x004E, 0x004D, 0x001F, 0x003A, 0x001F, 0x001A, 0x0001, 0x0009, 0x0055 };
                    for (int x0Qc_6t8YSu__UjlP_hUC6M6 = (int) (b_9rz1_gUCNc_ceKC[(int) (pFlxasazuVysmwcpkfm[fKzmro[A7c7WIo__fQMQjM_lR[g_hFqjbczKirudqjb[CLOHOQ_TOCOXGBRWY_PVBHFAV[(int) (p_vc56jpND__QGGjzT4_Wo7[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[3])])]])]])]]]]])]), _bFfGZu_kuSY5dNkBN_ku_tU = (int) (b_9rz1_gUCNc_ceKC[(int) (pFlxasazuVysmwcpkfm[fKzmro[A7c7WIo__fQMQjM_lR[g_hFqjbczKirudqjb[CLOHOQ_TOCOXGBRWY_PVBHFAV[(int) (p_vc56jpND__QGGjzT4_Wo7[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[3])])]])]])]]]]])]); x0Qc_6t8YSu__UjlP_hUC6M6 < (int) (b_9rz1_gUCNc_ceKC[(int) (pFlxasazuVysmwcpkfm[fKzmro[A7c7WIo__fQMQjM_lR[g_hFqjbczKirudqjb[CLOHOQ_TOCOXGBRWY_PVBHFAV[(int) (p_vc56jpND__QGGjzT4_Wo7[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[9])])]])]])]]]]])]); x0Qc_6t8YSu__UjlP_hUC6M6++) {
                        _bFfGZu_kuSY5dNkBN_ku_tU = _KhlYbJNlonwV_I_OOZKAb_[x0Qc_6t8YSu__UjlP_hUC6M6];
                        _bFfGZu_kuSY5dNkBN_ku_tU ^= x0Qc_6t8YSu__UjlP_hUC6M6;
                        _bFfGZu_kuSY5dNkBN_ku_tU += x0Qc_6t8YSu__UjlP_hUC6M6;
                        _bFfGZu_kuSY5dNkBN_ku_tU++;
                        var_1767 += (char) (_bFfGZu_kuSY5dNkBN_ku_tU & (int) (b_9rz1_gUCNc_ceKC[(int) (pFlxasazuVysmwcpkfm[fKzmro[A7c7WIo__fQMQjM_lR[g_hFqjbczKirudqjb[CLOHOQ_TOCOXGBRWY_PVBHFAV[(int) (p_vc56jpND__QGGjzT4_Wo7[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[12])])]])]])]]]]])]));
                    }
                    System.out.format(var_1767, kW2_ZQnBOs9VL_mjKXcB__4);
                    mZwtvvepUboureeved = (int) (var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[10])])]])]] - Math.log(var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[5])])]])]]));
                    break;
                case 68470377:
                    kW2_ZQnBOs9VL_mjKXcB__4 = SrwgvFunc(_KnlkZiv_t6Ohx_xWp_9M);
                    mZwtvvepUboureeved -= -(int) (var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[1])])]])]] - Math.cosh(var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[12])])]])]]));
                    break;
                case 1938612253:
                    double[] var_2915 = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
                    mZwtvvepUboureeved += -(int) (var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[0])])]])]] - Math.acos(var_3117[var_801[(int) (jY__n3HVSq_WnFXQMnt[BQ__Y_IAsVbM2emsVuNM_[(int) (POCKKZB_FGNQQA[(int) (var_3643[7])])]])]]));
                    break;
            }
        }
    }

    public static double SrwgvFunc(double[] numArray) {
        double[] hXbuzlw = { 10.104687460635152, 14.863255212498105, 0.21565589122677703, 16.92136884299982, 8.284692818502851, 12.82669846485655, 15.403473564468571, 7.030894818830625, 9.171975582854735, 19.391816756528755, 11.864284748161538, 2.226792621794286, 13.24428454752136, 6.78017800635685, 20.155440287615413, 18.27510090243092, 3.589298943371685, 4.152627738386547, 5.665271866480059, 17.704844863089786, 1.0649770468512563 };
        double[] var_575 = { 1.0296391297689236, 15.726628357412975, 20.92993527990269, 5.173619116590729, 7.844535074545817, 6.009394167087513, 16.086142381371435, 9.063044736138085, 4.990968854206419, 0.4740423015646155, 10.092369822585235, 19.48145881150217, 12.423331723670914, 13.445497843589065, 2.206559166836813, 8.16258487934631, 14.436447989183236, 11.161001228043002, 3.7977942067981534, 18.27965827256959, 17.307170323906416 };
        int[] ZTEHAAYPJ_BISQMK = { 10, 3, 18, 6, 17, 9, 13, 15, 4, 16, 1, 12, 0, 19, 2, 14, 7, 8, 11, 20, 5 };
        double[] iPlwrvpWkihvhctOrtubm = { 18.347247829648513, 15.993259210013832, 10.384509235580781, 7.659966773454712, 16.24894028024241, 14.250989627900879, 6.770226899219857, 8.283226421492104, 5.968118628152126, 1.3646389169586972, 2.717989641816233, 9.456551089444694, 11.143709780182407, 17.63249476052649, 13.72219811303589, 12.966327271855473, 3.0874626146986275, 0.861290055418454, 19.982579577626073, 20.466740193225053, 4.800445667758794 };
        int[] var_2798 = { 14, 18, 16, 7, 5, 20, 15, 17, 10, 3, 13, 8, 2, 4, 9, 0, 1, 19, 12, 6, 11 };
        int[] _w4ACl_Eb5iuB8tKft_ = { 6, 0, 16, 4, 9, 7, 1, 15, 2, 18, 20, 19, 10, 11, 12, 14, 17, 3, 8, 5, 13 };
        double[] hFhzzxalpCshbolybyAslokrjo = { 0.7181203868509979, 2.9664637532667175, 9.515313299638107, 11.028323637923771, 6.390764892028182, 1.6030539747361725, 13.602130216656779, 18.414734494486385, 12.120766708284188, 7.961180222338676, 19.660846284473546, 5.578285135296968, 10.026225747743108, 15.49952117540782, 8.311906496462326, 14.44368335473346, 16.140307679070638, 17.004912894121887, 4.181691213350765, 20.99407023105516, 3.8834204842296294 };
        int[] VAJLMKZ_MXMVAU_OHBRFS = { 7, 5, 10, 9, 1, 8, 11, 20, 17, 12, 0, 14, 13, 15, 16, 2, 6, 18, 3, 19, 4 };
        double[] sAddoktk = { 1.6917277213165E9, 8079980.36161, 1.39348949767438E9, 45675.0865, 4.90983645E8, 15.9049, 7.80728377E8, 7.8073028200948E8, 8.68929906E8, 7.2918859851708E8, 5.04406, 1.24329286210753E9, 4.8208860701707E8, 2.9335, 43629.12742, 0.0, 3.4975, 6.65968, 6.2370634220671E8, 3.21790680933E7, 1.14826593649877E9 };
        int var_921 = (int) Math.max(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[0])])]])]]])]], sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[0])])]])]]])]]);
        double var_3498 = sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[0])])]])]]])]], g_pCbzjagbHcxgvwbj = sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[0])])]])]]])]];
        int var_2533 = (int) (sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[11])])]])]]])]] - Math.exp(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[18])])]])]]])]]));
        double var_60 = sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[0])])]])]]])]];
        var_921 = (int) (sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[4])])]])]]])]] + Math.log1p(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[2])])]])]]])]]));
        while (var_921 != (int) Math.max(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[13])])]])]]])]], sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[3])])]])]]])]])) {
            switch(var_921) {
                case 1691727732:
                    g_pCbzjagbHcxgvwbj = sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[0])])]])]]])]];
                    var_921 += -(int) Math.min(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[6])])]])]]])]], sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[17])])]])]]])]]);
                    break;
                case 623706361:
                    for (double KVCJGC : numArray) {
                        g_pCbzjagbHcxgvwbj += Math.pow(KVCJGC - var_60, (int) (sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[15])])]])]]])]] - Math.log10(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[10])])]])]]])]])));
                    }
                    var_921 += (int) (Math.cos(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[1])])]])]]])]]) + sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[14])])]])]]])]]);
                    break;
                case 910999355:
                    var_2533 = numArray.length;
                    var_921 -= (int) Math.max(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[5])])]])]]])]], sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[12])])]])]]])]]);
                    break;
                case 2017195859:
                    var_921 += -(int) (sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[20])])]])]]])]] + Math.sinh(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[7])])]])]]])]]));
                    break;
                case 420015710:
                    for (double var_854 : numArray) {
                        var_3498 += var_854;
                    }
                    var_921 -= -(int) (sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[9])])]])]]])]] - Math.cbrt(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[19])])]])]]])]]));
                    break;
                case 1663307788:
                    var_60 = var_3498 / var_2533;
                    var_921 = (int) (Math.exp(sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[16])])]])]]])]]) + sAddoktk[VAJLMKZ_MXMVAU_OHBRFS[(int) (hFhzzxalpCshbolybyAslokrjo[_w4ACl_Eb5iuB8tKft_[var_2798[(int) (iPlwrvpWkihvhctOrtubm[ZTEHAAYPJ_BISQMK[(int) (var_575[(int) (hXbuzlw[8])])]])]]])]]);
                    break;
            }
        }
        return Math.sqrt(g_pCbzjagbHcxgvwbj / var_2533);
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
    //  ints_math_crypt = true,
    //  crypt_strings = true,
    //  rename_methods = false,
    //  rename_variables = true,
    //  shuffle_methods = true,
    //  mix_code_flow = true,
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
// shuffle order of methods in the output source
//
$myJObfuscator->shuffleMethods = true;

//
// encrypt integers using more than 15 floating point math functions from the java.lang.Math.* class
//
$myJObfuscator->intsMathCrypt = true;

//
// encrypt strings using polymorphic encryption algorithms
//
$myJObfuscator->cryptStrings = true;

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
    //  ints_math_crypt = true,
    //  crypt_strings = true,
    //  rename_methods = false,
    //  rename_variables = true,
    //  shuffle_methods = true,
    //  mix_code_flow = true,
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
https://www.pelock.com