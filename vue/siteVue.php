<?php
require_once '../include/header.php';


?>
    <link rel="stylesheet" type="text/css" href="../css/chateaux.css">
    <title>Villes et Sites</title>

<main role="main">
  <div class="titre">
      <h1>Les villes et Sites</h1>
   </div>


  <section class="jumbotron text-center">
   

<?php

//var_dump($_GET['nom']);
?>
  <?php $sites = $DB->query('SELECT * FROM sites ') ?>

  <?php foreach ($sites as $site):  ?>
    


    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="<?=$site->image ?>" alt="" /></svg>            
              <div class="card-body">
                <p class="card-text"><?=$site->nom;?> </p>
                <div class="d-flex justify-content-between align-items-center">
           
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"><?=$site->nom;?></p>
              <p class="card-text"><?=$site->adresse;?></p>

              

              <p class="card-text"  >Plein tarif : <?= number_format ($site->pleinTarif,2,',',' ');?>  Euros</p>
              <p class="card-text" >Tarif réduit : <?= number_format($site->tarifReduit, 2, ',', ' ');?> Euros</p>
               
              <a href='addpanier.php?id=<?= $site->id ?>'>Ajouter</a>
             

              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
         
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
    </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>


      </html>