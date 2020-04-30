<?php
session_start();
require_once('../bdd/bddConnexion.php');

if(!empty($_POST)){
    $req = $pdo->prepare('SELECT * FROM administrateur WHERE motDePasse = :motDePasse');
    $req->execute(['motDePasse' => $_POST['motDePasse']]);
    $data = $req->fetch();

    if($_POST['motDePasse'] === $data['motDePasse'] && $_POST['identifiant'] === $data['identifiant']){
    
        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['motDePasse'] = $_POST['motDePasse'];
        $_SESSION['connexionETAT'] = 'Connecté';
        
        setcookie('identifiant', $_POST['identifiant'], time() + 3600 * 24 * 365, '/');
        setcookie('motDePasse', $_POST['motDePasse'], time() + 3600 * 24 * 365, '/');
        setcookie('connexionETAT', 'connect', time() + 3600 * 24 * 365, '/');
    }
    header('Location: ../vue/index.php');
    exit();
}
?>