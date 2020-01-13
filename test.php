<?php                 
$A = array(1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0);
$B = array(1, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0);
$C = array(0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0);
$D = array(0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0);
$E = array(1, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0);
$AL = array(1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1);
$AI = array(1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0);
$X = array(1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0); 
$resultA = array();
$resultB = array();
$resultC = array();
$resultD = array();
$resultE = array();
$resultAL = array();
$resultAI = array();

foreach ($A as $index => $code) {
    if ($A[$index] == 1 && $X[$index] == 1) {
        $resultA[$index] = 1;
    } else if (($A[$index] == 0 && $X[$index] == 0)) {
        $resultA[$index] = 0;
    } else {
        $resultA[$index] = 0;
    }
}

foreach ($B as $index => $code) {
    if ($B[$index] == 1 && $X[$index] == 1) {
        $resultB[$index] = 1;
    } else if (($B[$index] == 0 && $X[$index] == 0)) {
        $resultB[$index] = 0;
    } else {
        $resultB[$index] = 0;
    }
}

foreach ($C as $index => $code) {
    if ($C[$index] == 1 && $X[$index] == 1) {
        $resultC[$index] = 1;
    } else if (($C[$index] == 0 && $X[$index] == 0)) {
        $resultC[$index] = 0;
    } else {
        $resultC[$index] = 0;
    }
}

foreach ($D as $index => $code) {
    if ($D[$index] == 1 && $X[$index] == 1) {
        $resultD[$index] = 1;
    } else if (($D[$index] == 0 && $X[$index] == 0)) {
        $resultD[$index] = 0;
    } else {
        $resultD[$index] = 0;
    }
}

foreach ($E as $index => $code) {
    if ($E[$index] == 1 && $X[$index] == 1) {
        $resultE[$index] = 1;
    } else if (($E[$index] == 0 && $X[$index] == 0)) {
        $resultE[$index] = 0;
    } else {
        $resultE[$index] = 0;
    }
}

foreach ($AL as $index => $code) {
    if ($AL[$index] == 1 && $X[$index] == 1) {
        $resultAL[$index] = 1;
    } else if (($AL[$index] == 0 && $X[$index] == 0)) {
        $resultAL[$index] = 0;
    } else {
        $resultAL[$index] = 0;
    }
}

foreach ($AI as $index => $code) {
    if ($AI[$index] == 1 && $X[$index] == 1) {
        $resultAI[$index] = 1;
    } else if (($AI[$index] == 0 && $X[$index] == 0)) {
        $resultAI[$index] = 0;
    } else {
        $resultAI[$index] = 0;
    }
}

// Perbandingan antara data hepatitis dengan sample pasien
// Hepatitis A
$pembandingA = array_count_values($resultA);
$critA = array_count_values($A);
$total = count($A);
$perA = $pembandingA[1] / $critA[1];
$perA = $perA * 100;
$format_numberA = number_format($perA, 2, '.', '');
echo ("Persentase Hepatitis A : " . $format_numberA . "% <br>");

// Hepatitis B
$pembandingB = array_count_values($resultB);
$critB = array_count_values($B);
$perB = $pembandingB[1] / $critB[1];
$perB = $perB * 100;
$format_numberB = number_format($perB, 2, '.', '');
echo ("Persentase Hepatitis B : " . $format_numberB . "% <br>");

// Hepatitis C
$pembandingC = array_count_values($resultC);
$critC = array_count_values($C);
$perC = $pembandingC[1] / $critC[1];
$perC = $perC * 100;
$format_numberC = number_format($perC, 2, '.', '');
echo("Persentase Hepatitis C : " . $format_numberC . "% <br>");

// Hepatitis D
$pembandingD = array_count_values($resultD);
$critD = array_count_values($D);
$perD = $pembandingD[1] / $critD[1];
$perD = $perD * 100;
$format_numberD = number_format($perD, 2, '.', '');
echo ("Persentase Hepatitis D : " . $format_numberD . "% <br>");

// Hepatitis E
$pembandingE = array_count_values($resultE);
$critE = array_count_values($E);
$perE = $pembandingE[1] / $critE[1];
$perE = $perE * 100;
$format_numberE = number_format($perE, 2, '.', '');
echo ("Persentase Hepatitis E : " . $format_numberE . "% <br>");

// Hepatitis Alcoholic
$pembandingAL = array_count_values($resultAL);
$critAL = array_count_values($AL);
$perAL = $pembandingAL[1] / $critAL[1];
$perAL = $perAL * 100;
$format_numberAL = number_format($perAL, 2, '.', '');
echo ("Persentase Hepatitis Alcoholic : " . $format_numberAL . "% <br>");

// Hepatitis Otoimun
$pembandingAI = array_count_values($resultAI);
$critAI = array_count_values($AI);
$perAI = $pembandingAI[1] / $critAI[1];
$perAI = $perAI * 100;
$format_numberAI = number_format($perAI, 2, '.', '');
echo ("Persentase Hepatitis Otoimun : " . $format_numberAI . "% <br><br>");
echo "Berdasarkan kalkulasi data yang anda inputkan diatas, anda terindikasi terkena Hepatitis Otoimun (Val : 100%)";
?>