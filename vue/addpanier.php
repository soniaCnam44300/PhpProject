 <?php
require '../include/_header.php';

$array = array("chateaux", "tan");

// var_dump($_GET['nom']);

// <---------   PERMET DE RECUP TOUS LES ELEMENTS DE LA BDD DE L ELEMENT SELECTIONNE       -------->
// <---------   L ID ET LE NOM DE L ELEMENT SONT RECUPERER GRACE A LA METHODE GET POUR QU IL N4Y EST QU UN SEUL CODE POUR TOUTES LES TABLEs      -------->


    if(isset($_GET['id'])){
        $value=$_GET['nom'];
        var_dump($value);
       
       
        $value = $DB->query('SELECT id FROM ' . $value . ' WHERE id=:id', array('id'=> $_GET['id']));
     
        if(empty($value)){
        die ("Ce produit n'existe pas");
        }else{
            $panier->add($value[0]->id);
            'Le produit a bien été ajouté <a href="javascript:history.back()">retourner aux catalogue</a>';
        }
   
}
header('Location: ../vue/chateauVue.php');
exit();
?>
<?php





// if(isset($_GET['id'])){
//     $chateau = $DB->query('SELECT id FROM $array[$i] WHERE id=:id', array('id'=> $_GET['id']));
   
//     if(empty($chateau)){
//     die ("Ce produit n'existe pas");
// }
//  $panier->add($chateau[0]->id);
//  'Le produit a bien été ajouté <a href="javascript:history.back()">retourner aux catalogue</a>';
// }

// if(isset($_GET['id'])){
//     $chateau = $DB->query('SELECT id FROM chateaux WHERE id=:id', array('id'=> $_GET['id']));
   
//     if(empty($chateau)){
//     die ("Ce produit n'existe pas");
// }
//  $panier->add($chateau[0]->id);
//  'Le produit a bien été ajouté <a href="javascript:history.back()">retourner aux catalogue</a>';
// }
// $prixReduit =0;


    
// ?>

<a href="chateauVue.php">retourner aux catalogue</a>



