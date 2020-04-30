<?php

require '../bdd/bdd.php';
?>

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
<link rel="stylesheet" type="text/css" href="../css/index.css">
<script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.js"></script> 
<script type="text/javascript" src="/phpProjet/js/index.js"></script>	


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


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
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>


<main role="main">
<div class='row'>
  <div class='col-md-3' id=''></div>
    <div class='col-md-6' id='connexion'>
  <!-- -----------  PERMET D'AFFICHER LA BARRE DE NAVIGATION ADMINISTRATEUR ------------------ -->
  <?php
            if(isset($_COOKIE['connexionETAT'])){
                if($_COOKIE['connexionETAT'] === 'connect'){
                ?>
                  <p> <a href="../function/deconnexion.php" class="btn btn-primary my-2">Deconnexion</a>
                      <a href="suprimerVue.php" class="btn btn-secondary my-2">Supprimer ou modifier les éléments</a>
                      <a href="ajouterVue.php" class="btn btn-secondary my-2">Ajouter des éléments</a>
                  </p>
                <?php
                }
            } else {?>
              <div class="connexion">
                <a class="btn btn-sm btn-outline-secondary" href="connexionVue.php">Connexion administrateur</a>
              </div>
            <?php
            }
            ?>

    </div>
  </div>  
<div class='col-md-3' id=''></div>   
 <!-- - -----------                -->

  <div class='row'>
    <div class='col-md-2' id=''>
  
  
  </div>
    <div class='col-md-8'>
      <nav class="nav d-flex justify-content-between" id='nav'>

        <div class="btn-group">
            <button type="button" class="p-2 text-muted" id='ToogleNantes' data-toggle="dropdown" >
            Nantes
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="museeVue.php"> Musées </a>
            <a class="dropdown-item" href="siteVue.php" >Villes et Sites</a>
            <a class="dropdown-item" href="chateauVue.php">Chateaux</a>
            <a class="dropdown-item" href="vanVue.php">Voyage à Nantes</a>
          </div>
        </div>  
      
          <a class="p-2 text-muted" href="transportVue.php"> Transports </a>
          <a class="p-2 text-muted" href="vignobleVue.php"> Autour du Vignoble </a>
          <a class="p-2 text-muted" href="estuaireVue.php"> Estuaire </a>
          <a class="p-2 text-muted" href="barVue.php"> Pose gourmande </a>
          <a class="p-2 text-muted" href="/phpProjet//vue/index.php">Accueil</a>
          <a href="panier.php"><img class='panier' src="../image/panier1.png"></a>
          
      </nav>
    </div>  
  <div class='col-md-2'></div>
</div>  


                                                   
        </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <img src="../image/pass24h.png" alt="">
              </div>
              <div class="col-md-4">
                <img src="../image/pass48h.png" alt="">
              </div>
              <div class="col-md-4">
                <img src="../image/pass72h.png" alt="">
              </div>
            </div>
        </div> 

</main>

<footer class="text-muted">
 

<footer class="blog-footer">
</footer>
</body>
</html>
