<?php 
  require_once('src/connect.php');
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>TP2 - Catalogue d'Images</title>
  </head>
  <body>
    <center>
    <form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="monfichier"/>

      <input formaction="src/chargeImage.php" name="valider" type="submit" value="Upload"/>
      <p> Seuls les formats .jpeg, .png sont acceptés et la taille maximuale est de 8Mo ! </p>
    </form>
  </center>
  </body>
</html>