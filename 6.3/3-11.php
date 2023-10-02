<?php

$mang_so = array();
$mang_duy_nhat = array();
$so_lan = array();
$mang_so = $mang_so = explode(",", $_POST['nhap_mang']);

if (isset($_POST['nhap_mang'])) {
    $mang_so = explode(",", $_POST['nhap_mang']);
    $mang_duy_nhat = array_unique($mang_so);
    sort($mang_duy_nhat);
    $so_lan = array_count_values($mang_so);
}

$chuoi = "";
foreach ($so_lan as $key => $value) {
    $chuoi = $chuoi . $key . ":" . $value . " ";
}
$kt = ' ';
$chuoi1 = implode($kt, $mang_duy_nhat);
include('index.php');
?>