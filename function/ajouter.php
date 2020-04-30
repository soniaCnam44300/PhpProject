<?php

if(!empty($_POST)){
    require_once '../bdd/bddConnexion.php';
$titre=$_POST['titre'];

// --------------------- PERMET D AJOUTER ET D INSERER A LA BDD UN NOUVEAU SITE -----------------------------
// --------------------J UTILISE UNE VARIABLE RECUPERE GRACE A LA VARIABLE GLOBALE $_POST DANS LA REQUETE POUR QUE LE NOUVELLE ELEMENT S JOUTE 
// --------------------------------------DANS LA TABLE SELECTIONNEE-----
// ------------------- 1 SEUL CODE POUR TOUTES LES TABLES --------------------------------

    $req = $pdo->prepare('INSERT INTO ' . $titre . ' (nom, adresse, pleinTarif, tarifReduit) VALUES (:nom, :adresse, :pleinTarif, :tarifReduit)');
    $req->execute([
        'nom' => $_POST['nom'],
        'adresse' => $_POST['adresse'],
        'pleinTarif' => $_POST['pleinTarif'],
        'tarifReduit' => $_POST['tarifReduit']
    ]);
    header('Location:../vue/index.php');
    exit();
}

?>