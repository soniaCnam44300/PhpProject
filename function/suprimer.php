<?php
require_once '../bdd/bddConnexion.php';

$titre = $_GET['titre'];

$req = $pdo->prepare('DELETE FROM ' . $titre . ' WHERE id = :id');
$req->execute(['id' => $_GET['id']]);

header('Location: ../vue/suprimerVue.php');
exit();

?>