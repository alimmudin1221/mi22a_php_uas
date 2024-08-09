<?php
 /**
     * NIM : 2257401087
     * NAMA : ALIM MUDIN
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>