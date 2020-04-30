<?php
session_start();
require '../include/header.php';
?>
<link rel="stylesheet" type="text/css" href="../css/pass.css">
    
<?php
$_SESSION['nom']='Sonia';


var_dump($_SESSION['nom']);
?>

<?php
$pass = $DB->query('SELECT * FROM pass24h ');

foreach($pass as $value){
    //var_dump($value);

    

    $_SESSION['plein']=$_POST['plein'];
    $_SESSION['reduit']=$_POST['reduit'];
    $_SESSION['famille']=$_POST['famille'];

    
?>


<div class="row">
    <div class="col-md-10 mb-3" >
        <form method="post" action="passVue.php" id="formulaire" > 
            <div class="col-md-4 mb-3">
                <span class=typeTarif>Plein tarif unitaire : <?= $value->pleinTarif ?>   €</span>
                <span class=typeTarif>Tarif réduit unitaire : <?= $value->tarifReduit  ?>  €</span>
                <span class=typeTarif>Tarif famille unitaire : <?= $value->tarifFamille  ?>  €</span>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name='plein' value ='<?= $_SESSION['plein']; ?>'>
                <input type="text" name='reduit' value ='<?= $_SESSION['reduit']; ?>'>
                <input type="text" name='famille' value ='<?= $_SESSION['famille']; ?>'>

            </div>
            <button > <a href=""> Pass 24 h </a> </button>
            <button > <a href="">  Pass 48h </a></button>
            <button type='submit'> valider </button>

        </form>
       
    </div>  
</div>
<div class="row">
    <div class="col-md-10 mb-3" >
            <div class="col-md-4 mb-3">
                <span class=typeTarif>Total : </span>
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" name='sousTotal' value ='<?= (($_SESSION['plein']*$value->pleinTarif) +($_SESSION['reduit']*$value->tarifReduit)+($_SESSION['famille']*$value->tarifFamille)) ; ?> €'>
            </div>



     <?php   }
?>