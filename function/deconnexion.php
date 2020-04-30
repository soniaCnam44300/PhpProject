<?php
    session_start();

    // print_r($_COOKIE);
    // echo '<br><br>';
    // print_r($_SESSION);

    setcookie('identifiant', '', time() - 100, '/');
    setcookie('motDePasse', '', time() - 100, '/');
    setcookie('connexionETAT', '', time() - 100, '/');

    session_unset();
    session_destroy();

    header('Location: ../vue/index.php');
    exit();

?>