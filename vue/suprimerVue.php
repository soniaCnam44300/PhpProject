<?php
require_once '../bdd/bddConnexion.php';
require '../include/header.php';
?>
<div id="titre">
<?php
$titre =' chateaux ' ;?>
</div>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Accueil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<link rel="stylesheet" type="text/css" href="/phpProjet/css/suprimer.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

<!-- JS SCRIPTS -->
<script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.js"></script> 
<script type="text/javascript" src="/phpProjet/js/suprimer.js"></script>	


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      </style>
    <div class="barnav">
        <a href="/phpProjet/vue/suprimerVue.php/?titre=chateaux" class="btn btn-secondary" id='chateaux'>Chateaux</a>
        <a href="/phpProjet/vue/suprimerVue.php/?titre=musée" class="btn btn-secondary" id='Musées'>Musées</a>
        <a href="/phpProjet/vue/suprimerVue.php/?titre=tan" class="btn btn-secondary" id='tan'>Transports</a>
        <a href="/phpProjet/vue/suprimerVue.php/?titre=sites" class="btn btn-secondary" id='Musées'>Villes et Sites</a>
        <a href="/phpProjet/vue/suprimerVue.php/?titre=voyageanantes" class="btn btn-secondary" id='voyageanantes'>Voyage à Nantes</a>
        <a href="/phpProjet/vue/suprimerVue.php/?titre=bar" class="btn btn-secondary" id='bar'>Bars et Restaurants</a>
    </div> 

        <?php
        if(!empty($_GET)){
        $titre=$_GET['titre'];
    $req = $pdo->prepare('SELECT * from '. $titre .'' );
    $req->execute();
    $data = $req->fetchAll();
    
?>
<div id="tableauDeChateaux">
    
<?php foreach ($data as $value):  ?>

    <div class="container">
      <div class="row" id='row1'>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="<?=$value['image']  ?>" alt="" /></svg>            
              <div class="card-body">
                <p class="card-text"><?=$value['nom']?> </p>
                <div class="d-flex justify-content-between align-items-center"> </div>
                </div>
               </div>
            </div>

        <div class="col-md-5">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"><?=$value['nom']?></p>
              <p class="card-text"><?=$value['adresse']?></p>

              

              <p class="card-text"  >Plein tarif : <?= number_format ($value['pleinTarif'],2,',',' ');?>  Euros</p>
              <p class="card-text" >Tarif réduit : <?= number_format($value['tarifReduit'], 2, ',', ' ');?> Euros</p>
              <div class="modif">
                <p class="btn btn-secondary" id ='sup'><a href="/phpProjet/function/suprimer.php?id=<?= $value['id'] ?>& titre=<?=$_GET['titre']  ?>"> Supprimer </a></p>
                <p class="btn btn-secondary" id='modif'><a href="/phpProjet/vue/modifierVue.php?id=<?= $value['id'] ?> & titre=<?=$_GET['titre']  ?>"> Modifier </a></p>
              </div>

              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>

          
        </div>
      <?php endforeach ?>

    <?php
    }
    ?>
</div>

<?php
  
?>