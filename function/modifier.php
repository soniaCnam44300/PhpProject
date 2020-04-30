<?php
require_once '../bdd/bddConnexion.php';
require '../include/header.php';

$nom=$_POST['nom'];
$adresse=$_POST['adresse'];
$pleinTarif=$_POST['pleinTarif'];
$tarifReduit=$_POST['tarifReduit'];
$image=$_POST['image'];

$titre=$_POST['titre'];
var_dump($_POST['titre']);


$req = $pdo->prepare("UPDATE "  . $titre .  " SET nom='$nom', adresse='$adresse', pleinTarif='$pleinTarif', tarifReduit='$tarifReduit', image='$image' WHERE nom='$nom' ");
$req->execute();
$data = $req->fetchAll();

header('Location: ../vue/index.php');
exit();




?>


