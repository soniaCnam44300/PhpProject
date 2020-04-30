<?php
require_once '../include/header.php';


?>
    <link rel="stylesheet" type="text/css" href="../css/chateaux.css">
    <title>bars</title>

<main role="main">
  <div class="titre">
      <h1>Les bars et Restaurants</h1>
   </div>


  <section class="jumbotron text-center">
   


  <?php $bars = $DB->query('SELECT * FROM bar ') ?>

  <?php foreach ($bars as $bar):  ?>
    


    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="<?=$bar->image  ?>" alt="" /></svg>            
              <div class="card-body">
                <p class="card-text"><?=$bar->nom;?> </p>
                <div class="d-flex justify-content-between align-items-center">
           
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text"><?=$bar->nom;?></p>
              <p class="card-text"><?=$bar->adresse;?></p>

              

              <p class="card-text"  >Plein tarif : <?= number_format ($bar->pleinTarif,2,',',' ');?>  Euros</p>
              <p class="card-text" >Tarif réduit : <?= number_format($bar->tarifReduit, 2, ',', ' ');?> Euros</p>
               
              <a href='addpanier.php?id=<?= $bar->id ?>'>Ajouter</a>
             

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
