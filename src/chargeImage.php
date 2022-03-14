<?php
  // on vérifie si on a un paramètre dans le get qui s'appelle page et on vérifie s'il n'est pas vide
  if(isset($_GET['page']) && !empty($_GET['page'])){ 
    $currentPage = (int) strip_tags($_GET['page']);
  } else { // si c'est vide, on dit qu'on est à la page 1
    $currentPage = 1;
  }
  require_once('connect.php'); 
  if(isset($_POST["valider"])){
    require_once('saveNewImage.php'); 
  }
  require_once('catalogueImage.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 - Catalogue d'Image</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <center>
      <h1>Images enregistrées</h1> 
      <table>
        <thead>
          <th>Nom</th>
          <th>Image</th>
        </thead>
        <tbody> <!-- Affichage de toutes les images de la base de données -->
          <?php
            foreach($images as $image){
          ?>
            <tr>
              <td><?= $image['name'].'.'.$image['extension']; ?></td>
              <td><?= ('<img style="width: 150px;" src="/utils/images/'.$image['name'].'.'.$image['extension'].'"/><br/>'); ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </center>
    <div class="pages">
      <?php if ($currentPage != 1){ ?> <!-- on affiche "précédente" si on est pas sur la première page -->
        <a href="/src/chargeImage.php/?page=<?= $currentPage - 1 ?>">Précédente</a>
      <?php } ?>
      <?php for($page = 1; $page <= $pages; $page++){ ?> <!-- on affiche tous les numéros de pages, lorsqu'il est celui en cours, on le notifie en "active" -->
          <a href="/src/chargeImage.php/?page=<?= $page ?>" class="page-link <?= ($currentPage == $page) ? "active" : "" ?>"><?= $page ?></a>
      <?php } ?>
      <?php if ($currentPage != $pages){ ?> <!-- on affiche "suivante" si on est pas sur la dernière page -->
        <a href="/src/chargeImage.php/?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
      <?php } ?>
    </div>
  </body>
</html>