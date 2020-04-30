<?php
// require '../include/header.php';
require_once '../bdd/bddConnexion.php';
require '../classes/passClasse.php';
require '../bdd/bdd.php';
require '../classes/panierClass.php';
//require '../vue/addpanier.php';
$DB = new DB();
$panier = new panier();
 

?>
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
  <link rel="stylesheet" type="text/css" href="/phpprojet/css/panier.css">

  <!-- <link rel="stylesheet" type="text/css" href="../css/header.css"> -->

  <script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="jquery-3.4.1.js"></script> 
  <script type="text/javascript" src="/phpProjet/js/panier.js"></script>	

    <title>Panier</title>
  <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">

<div class='row' id='barNavHeader'>
  <div class='col-md-2'></div>
    <div class='col-md-8'>
      <nav class="nav d-flex justify-content-between" id='nav'>

        <div class="btn-group" >
            <button type="button" class="p-2 text-muted" id='ToogleNantes' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <a class="p-2 text-muted" href="/phpProjet/vue/index.php">Accueil</a>
          <a href="panier.php"><img class='panier' src="/phpProjet/image/panier1.png"></a>
          
      </nav>
    </div>  
  <div class='col-md-2'></div>
</div>  


<?php
if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}

?>
    <link rel="stylesheet" type="text/css" href="../css/chateaux.css">

<body>
  <div class="col-md-6 mb-3" id='container'>
      
          <?php

            if(isset($_GET['id'])){
          $value=$_GET['nom'];
          
       
        $products = $DB->query('SELECT id FROM ' . $value . ' WHERE id=:id', array('id'=> $_GET['id']  ));
        if(empty($value)){
        die ("Ce produit n'existe pas");
        }else{
            $panier->add($products[0]->id, $value);
           
            'Le produit a bien été ajouté <a href="javascript:history.back()">retourner aux catalogue</a>';
            var_dump(($products[0]->id));
            var_dump($value);
        }
   
}
          // Si le panier est vide renvoyer un tableau Array vide sinon execute la requete
            
          //var_dump($_SESSION);
          $ids = array_keys($_SESSION['panierPlein']);
              //$ids = array_keys($_SESSION['panierPlein']);
             // echo '--- ids -----';
             // var_dump($ids);

          
              var_dump($_SESSION['panierPlein']);
  
             if(empty($ids)){
                $chateaux = array();
              }else{
                $chateaux = $DB->query('SELECT * FROM chateaux WHERE id IN (' . implode(",",$ids) . ')');
              
              }
              $total = array();
          ?>
          <?php foreach($chateaux as $chateau): ?>
      
            <form method="post" action="panier.php" >  
                <div class="col-md-12 mb-3" id="nom">
                  <span class="nom"><h4><?= $chateau->nom?></h4></span>
                </div>

                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed" id='formulaire'>
                    <div class="col-md-4 mb-3">
                    <br>
                      <span class=typeTarif>Plein tarif unitaire :  <?= $chateau->pleinTarif ?> €</span><br><br>
                      <span class=typeTarif>Tarif réduit unitaire : <?= $chateau->tarifReduit ?> €</span>
                    </div>
                    <div class="col-md-1 mb-3" id="quantite1"><br>
                      <input type="text" class='number' name='panierPlein[quantite][<?= $chateau->id; ?>]' value='<?= $_SESSION['panierPlein'][$chateau->id]; ?>'>
                  
                            <?php
                            if(!empty($_SESSION['panierReduit'][$chateau->id])){  
                              ?>
                              <input type="text" class='number' name='panierPlein[quantite1][<?= $chateau->id; ?>]' value='<?= $_SESSION['panierReduit'][$chateau->id]; ?>'>
                              <?php  } else{ 
                                $_SESSION['panierReduit'][$chateau->id]=0?>
                                <input type="text" class='number' name='panierPlein[quantite1][<?= $chateau->id; ?>]' value='<?= $_SESSION['panierReduit'][$chateau->id]; ?>'>
                              <?php
                              }
                              ?>

                    </div> 
                            <?php
                              $pleinTarif = ($_SESSION['panierPlein'][$chateau->id])*($chateau->pleinTarif);
                              $tarifReduit = ($_SESSION['panierReduit'][$chateau->id])*($chateau->tarifReduit);
                              $sousTotal =($pleinTarif + $tarifReduit);
                              array_push($total,$sousTotal);
                            ?>

                    <div class="col-md-1 mb-3"></div>
                    <div class="col-md-2 mb-3" id='sousTotal'>  <br>
                      <span> <?= $sousTotal ?> € </span> 
                    </div> 
                    <div class="col-md-1 mb-3"></div>
                    <div class="col-md-1 mb-3">  <br>             
                      <span class="action"> <a href="panier.php?del=<?=$chateau->id;?>" class="dell"><img src="../image/dell.png"></a></span>
                    </div>
                  </li>
                </ul>

                            <?php
                              $totalFinal=0;
                              foreach($total as $key => $value){
                              $totalFinal += $value;
                              }
                            ?>
  
          <?php endforeach ?>

              <div class='col-md-12 mb-3'>  
                  <button type='submit' class='submit' value ='calculer'>Calculer</button> 
              </div>   
            </form> 
  </div>

  <div class="col-md-3 mb-6" id='panierTotal'><span> <h3> Total  </h3></span> <br>

              <?php
                    foreach($chateaux as $chateau){?>
                        <span class="nom"><h6><?= $chateau->nom?></h6></span>
                    <?php } ?>
                    <br>
                    <?php
                    if(!empty($totalFinal)){  ?>

    <span> Total avant PASS :   <?= $totalFinal ?> € </span> 
   <?php } ?> <br>

  <?php $pass = $DB->query('SELECT id FROM pass24h ');

  foreach($pass as $value){
    var_dump($value);
  }
 
  ?>
    <div class="pass">
        <button type="button" class="btn btn-outline-success" id="pass24h"><a href="../vue/passVue.php?nom=pass24h&id=<?= $value->id ?>">PASS 24H</a></button>
        <button type="button" class="btn btn-outline-success"  id="pass48h">PASS 48H</button>
        <button type="button" class="btn btn-outline-success"  id="pass72h">PASS 72H</button>
      </div>
  </div>
<a href="../vue/passVue.php"></a>




</body>