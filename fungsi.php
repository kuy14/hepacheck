<?php
require 'variable.php';

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
// menghitung nilai probabilitas jenis penyakit dan gejala.
    // Hepatitis A
    $pembandingA = array_count_values($resultA);
    $critA = array_count_values($A);
    $total = count($A);
    $perA = $pembandingA[1] / $critA[1];
    if ($perA != 0) {
        $kemungkinan += 1;
    }

// Hepatitis B
    $pembandingB = array_count_values($resultB);
    $critB = array_count_values($B);
    $perB = $pembandingB[1] / $critB[1];
    if ($perB != 0) {
        $kemungkinan += 1;
    }

// Hepatitis C
    $pembandingC = array_count_values($resultC);
    $critC = array_count_values($C);
    $perC = $pembandingC[1] / $critC[1];
    if ($perC != 0) {
        $kemungkinan += 1;
    }

// Hepatitis D
    $pembandingD = array_count_values($resultD);
    $critD = array_count_values($D);
    $perD = $pembandingD[1] / $critD[1];
    if ($perD != 0) {
        $kemungkinan += 1;
    }

// Hepatitis E
    $pembandingE = array_count_values($resultE);
    $critE = array_count_values($E);
    $perE = $pembandingE[1] / $critE[1];
    if ($perE != 0) {
        $kemungkinan += 1;
    }

// Hepatitis Alcoholic
    $pembandingAL = array_count_values($resultAL);
    $critAL = array_count_values($AL);
    $perAL = $pembandingAL[1] / $critAL[1];
    if ($perAL != 0) {
        $kemungkinan += 1;
    }

// Hepatitis Otoimun
    $pembandingAI = array_count_values($resultAI);
    $critAI = array_count_values($AI);
    $perAI = $pembandingAI[1] / $critAI[1];
    if ($perAI != 0) {
        $kemungkinan += 1;
    }

// perhitungan probabilitas Rumus menghitung probabilitas gejala yang muncul
    foreach ($resultA as $index => $code) {
        $probA[$index] = $code / $kemungkinan;
    }
    foreach ($resultB as $index => $code) {
        $probB[$index] = $code / $kemungkinan;
    }
    foreach ($resultC as $index => $code) {
        $probC[$index] = $code / $kemungkinan;
    }
    foreach ($resultD as $index => $code) {
        $probD[$index] = $code / $kemungkinan;
    }
    foreach ($resultE as $index => $code) {
        $probE[$index] = $code / $kemungkinan;
    }
    foreach ($resultAL as $index => $code) {
        $probAL[$index] = $code / $kemungkinan;
    }
    foreach ($resultAI as $index => $code) {
        $probAI[$index] = $code / $kemungkinan;
    }

// Menghitung Nilai Bayes, untuk bilangan yang atas
    foreach ($probA as $index1 => $code) {
        $atasA[$index1] = $code * $prob;
    }
    foreach ($probB as $index2 => $code) {
        $atasB[$index2] = $code * $prob;
    }
    foreach ($probC as $index3 => $code) {
        $atasC[$index3] = $code * $prob;
    }
    foreach ($probD as $index4 => $code) {
        $atasD[$index4] = $code * $prob;
    }
    foreach ($probE as $index5 => $code) {
        $atasE[$index5] = $code * $prob;
    }
    foreach ($probAL as $index6 => $code) {
        $atasAL[$index6] = $code * $prob;
    }
    foreach ($probAI as $index7 => $code) {
        $atasAI[$index7] = $code * $prob;
    }

// Menghitung Nilai Bayes, untuk bilangan yang bawah
    for ($i = 0; $i < 29; $i++) {
        array_push($bawah, $probA[$i] * $prob + $probB[$i] * $prob + $probC[$i] * $prob + $probD[$i] * $prob + $probE[$i] * $prob + $probAL[$i] * $prob + $probAI[$i] * $prob);
    }

// Menghitung Nilai Bayes, nilai atas dibagi nilai bawah

    for ($i = 0; $i < 29; $i++) {
        // jika terdapat pembagian bilangan 0:0 maka, nilai akan diisi nilai 0
        // untuk menghindari bug divided by zero
        if ($atasA[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s1, 0);
        } else {
            array_push($pra_fin_s1, $atasA[$i] / $bawah[$i]);
        }
        if ($atasB[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s2, 0);
        } else {
            array_push($pra_fin_s2, $atasB[$i] / $bawah[$i]);
        }
        if ($atasC[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s3, 0);
        } else {
            array_push($pra_fin_s3, $atasC[$i] / $bawah[$i]);
        }
        if ($atasD[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s4, 0);
        } else {
            array_push($pra_fin_s4, $atasD[$i] / $bawah[$i]);
        }
        if ($atasE[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s5, 0);
        } else {
            array_push($pra_fin_s5, $atasE[$i] / $bawah[$i]);
        }
        if ($atasAL[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s6, 0);
        } else {
            array_push($pra_fin_s6, $atasAL[$i] / $bawah[$i]);
        }
        if ($atasAI[$i] == 0 && $bawah[$i] == 0) {
            array_push($pra_fin_s7, 0);
        } else {
            array_push($pra_fin_s7, $atasAI[$i] / $bawah[$i]);
        }
    }

//  rumus Total nilai bayes
    for ($i = 0; $i < 29; $i++) {
        $s1 = $s1 + $pra_fin_s1[$i];
    }
    for ($b = 0; $b < 29; $b++) {
        $s2 = $s2 + $pra_fin_s2[$b];
    }
    for ($i = 0; $i < 29; $i++) {
        $s3 = $s3 + $pra_fin_s3[$i];
    }
    for ($i = 0; $i < 29; $i++) {
        $s4 = $s4 + $pra_fin_s4[$i];
    }
    for ($i = 0; $i < 29; $i++) {
        $s5 = $s5 + $pra_fin_s5[$i];
    }
    for ($i = 0; $i < 29; $i++) {
        $s6 = $s6 + $pra_fin_s6[$i];
    }
    for ($i = 0; $i < 29; $i++) {
        $s7 = $s7 + $pra_fin_s7[$i];
    }

//  rumus Total hasil nilai bayes dari setiap jenis hepatitis

    $tot_s = $s1 + $s2 + $s3 + $s4 + $s5 + $s6 + $s7;


// Menghitung presentase nilai prediksi jenis penyakit hepatitis

    $finn_s1 = number_format($s1 / $tot_s, 4, '.', '');
    $finn_s2 = number_format($s2 / $tot_s, 4, '.', '');
    $finn_s3 = number_format($s3 / $tot_s, 4, '.', '');
    $finn_s4 = number_format($s4 / $tot_s, 4, '.', '');
    $finn_s5 = number_format($s5 / $tot_s, 4, '.', '');
    $finn_s6 = number_format($s6 / $tot_s, 4, '.', '');
    $finn_s7 = number_format($s7 / $tot_s, 4, '.', '');
    $finn_s1 = $finn_s1 * 100;
    $finn_s2 = $finn_s2 * 100;
    $finn_s3 = $finn_s3 * 100;
    $finn_s4 = $finn_s4 * 100;
    $finn_s5 = $finn_s5 * 100;
    $finn_s6 = $finn_s6 * 100;
    $finn_s7 = $finn_s7 * 100;

?>