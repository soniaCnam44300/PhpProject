<?php
//require '../include/header.php';
require_once '../bdd/bddConnexion.php';
?>
<!DOCTYPE html>
<html>

	<head>
        <meta charset="utf-8">

        <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/header.css">

        <script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="jquery-3.4.1.js"></script> 
        <script type="text/javascript" src="/phpProjet/js/ajouter.js"></script>
        <link rel="stylesheet" type="text/css" href="/phpProjet/css/ajouter.css">
        <title>Ajouter</title>

       
<div class="row">
<div class='col-md-2'></div>
    <div class='col-md-8' id='navAjout'>
    <nav class="nav d-flex justify-content-between" id='nav'>

        <div class="btn-group">
            <button type="button" class="btn btn-secondary" id='ToogleNantes' data-toggle="dropdown" >
            Musées / Sites / Croisière / Nantes
            </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="/phpProjet/vue/ajouterVue.php/?titre=musée" class="" id='musees'>Musées</a><br>
            <a href="/phpProjet/vue/ajouterVue.php/?titre=sites" class="" id='villes'>Villes et Sites</a><br>
            <a href="/phpProjet/vue/ajouterVue.php/?titre=chateaux" class="" id='chateaux'>Chateaux</a><br>
            <a href="/phpProjet/vue/ajouterVue.php/?titre=voyageanantes" class="" id='van'>Voyage à Nantes</a>
          </div>
        </div>  
      
        <a href="/phpProjet/vue/ajouterVue.php/?titre=tan" class="btn btn-secondary" id='chateaux'>Transports</a>
          <a href="/phpProjet/vue/ajouterVue.php/?titre=vignoble" class="btn btn-secondary" id='vignoble'> Autour du Vignoble </a>
          <a href="/phpProjet/vue/ajouterVue.php/?titre=estuaire" class="btn btn-secondary" id='estuaire'> Estuaire </a>
          <a href="/phpProjet/vue/ajouterVue.php/?titre=bar" class="btn btn-secondary" id='PoseGourmande'> Pose gourmande </a>
          <a href="/phpProjet/vue/index.php" class="btn btn-secondary" id='PoseGourmande'> Accueil </a>

          
      </nav>
    </div>  
  <div class='col-md-2'></div>
  </div>
</div>  
<?php  if(!isset($_GET['titre'])){
    $_GET['titre'] = 'tan';
} ?>
<h1 class ='titre'>Ajouter dans <?= $_GET['titre'] ?></h1>


<?php
     if(!empty($_GET)){
        $titre =$_GET['titre'];


    $req = $pdo->prepare('SELECT * FROM ' . $titre . ' ');
    $req->execute();
    $data = $req->fetchAll();

    $h="Les chateaux";
    if($titre = 'chateaux'){
        $h = 'Les chateaux';
       
   
 ?>
<section class="jumbotron text-center">
 <div class='row' id='formulaire'>
     <div class='col-md-3'></div>
     <div class='col-md-6'>
        <div class="formulaire">
            <form action="/phpProjet/function/ajouter.php" method="post" style="margin-left:2rem;">
                <p><input type="hidden" name="titre" id="id_page" value="<?= $_GET['titre'] ?>" /> </p>

                <p>
                <label for="name">Nom</label>
                <input name="nom" type="text" id="name" size="45" />
                </p>
        
                <p>
                <label for="adresse">Adresse</label>
                <input name="adresse" type="text" id="adresse" size="45" />
                </p>

                <p>
                <label for="terifPlein">Plein tarif</label>
                <input name="pleinTarif" type="text" id="adresse" size="45" />
                </p>

                <p>
                <label for="tarifReduit">Tarif réduit</label>
                <input name="tarifReduit" type="text" id="tarifReduit" size="45" />
                </p>

                <p>
                <label for="tarifReduit">Image</label>
                <input name="image" type="text" id="image" size="45" />
                </p>

                <button type="submit" class='submit'>Valider</button>

            </form>
    </div>
</div>
</div>
<div class='col-md-3'></div>
</div>
    </section>
<?php }} ?>

