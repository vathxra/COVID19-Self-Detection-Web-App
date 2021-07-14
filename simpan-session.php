<?php
include ("koneksi.php");
$user = $_POST['nama'];
$umur = $_POST['umur'];
    session_start(); 
    $_SESSION['nama'] = $user; //menyimpan session nama
    $_SESSION['umur'] = $umur;  //menyimpan session umur
    header('location:question.php');

?>