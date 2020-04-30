<?php
require_once '../bdd/bddConnexion.php';
$nom =' chateaux ' ;




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Modifier</title>

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
<link rel="stylesheet" type="text/css" href="/phpProjet/css/ajouter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

<!-- JS SCRIPTS -->
<script	src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.js"></script> 
<script type="text/javascript" src="/phpProjet/js/modifier.js"></script>	


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
 <?php
 if(!empty($_GET)){
    $titre = $_GET['titre'];

$req = $pdo->prepare('SELECT * from '. $titre .' WHERE id = :id');
$req->execute(['id' => $_GET['id']]);
$data = $req->fetchAll();

var_dump($_GET['titre']);
 ?>
<div class=md-3 mb-3></div>
<h2>Modifier les éléments</h2>

<?php foreach($data as $value){ ?>
    <div class="card-body" id="modifier">
        <form action="../function/modifier.php" method="POST" >
        <p>
        <input type="hidden" name="titre" id="id_page" value="<?= $_GET['titre'] ?>" />
        </p>

        <label for="name">Nom</label>
        <input name="nom" value="<?=$value['nom']?>" type="text" id="name" size="45" />
        </p>
        <p>
        <label for="adresse">Adresse</label>
        <input name="adresse" value="<?=$value['adresse']?>" type="text" id="adresse" size="45" />
        </p>
        <p>
        <label for="terifPlein">Plein tarif</label>
        <input name="pleinTarif" value = "<?= number_format ($value['pleinTarif'],2,',',' ');?>" type="text" id="adresse" size="45" />
        </p>
        <p>
        <label for="tarifReduit">Tarif réduit</label>
        <input name="tarifReduit" value=" <?= number_format ($value['tarifReduit'],2,',',' ');?>" type="text" id="tarifReduit" size="45" />
        </p>
        <p>
        <label for="image">Image</label>
        <input name="image" value=" <?= $value['image']?>" type="text" id="image" size="45" />
        </p>


            <button type="submit" name='update' class='submit'>Valider</button> 
            <button type="button" name='update' class='submit'><a href="/phpProjet/vue/suprimerVue.php" id='annuler'>Annuler</a></button>
                 
    </div>
        </form>
    <div class="d-flex justify-content-between align-items-center">
    </div>
  </div>
</div>
<?php }} ?>


       