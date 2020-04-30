<?php
require '../include/header.php';
require_once '../bdd/bddConnexion.php';

       


$req = $pdo->prepare('SELECT * FROM  pass24h ');
$req->execute();
$data = $req->fetchAll();

foreach ($data as $value){
    var_dump($data);


if(empty($totalFinal)){  
?>

  <span> Total PASS 24 h : <?= $value['pleinTarif']  ?> € </span> 
  <form action="pass24.php" method='POST'>
    <input type="text" class='number' name='pass24plein' value='<?=$_SESSION['pass24Plein']?>'>
    <input type="text" class='number' name='pass24Reduit' value='<?=$_SESSION['pass24Reduit']?>'>
  <button type= 'submit'>Valider</button>
</form>
  <span> Total PASS 24 h :<?=  $_POST['pass24plein']  ?> € </span> 
 <?php }} ?> <br>




