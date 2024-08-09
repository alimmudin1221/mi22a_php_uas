<?php
     /**
     * NIM : 2257401087
     * NAMA : ALIM MUDIN
     * KELAS : MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>