<?php

    $var_nama = $_POST['nama'];
    $var_umur = $_POST['umur'];
    $var_pekerjaan = $_POST['pekerjaan'];
    $var_jk = $_POST['jk'];
    $var_check1 = $_POST['check1'];
    $var_x = array();
    for ($i=1; $i < 30; $i++) { 
        array_push($var_x, $_POST['check'. $i]);
    }
    require 'fungsi.php';

    $largeval = max($finn_s1, $finn_s2, $finn_s3, $finn_s4, $finn_s5, $finn_s6, $finn_s7);
    
    if ($largeval == $finn_s1) {
        $status = "Hepatitis A";
    }elseif ($largeval == $finn_s2) {
        $status = "Hepatitis B";
    }elseif ($largeval == $finn_s3) {
        $status = "Hepatitis C";
    }elseif ($largeval == $finn_s4) {
        $status = "Hepatitis D";
    }elseif ($largeval == $finn_s5) {
        $status = "Hepatitis E";
    }elseif ($largeval == $finn_s6) {
        $status = "Hepatitis Alcoholic";
    }elseif ($largeval == $finn_s7) {
        $status = "Hepatitis Autoimun";
    }

    require 'output.php';




