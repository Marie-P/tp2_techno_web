<?php
  $file = $_FILES["monfichier"]["name"];
  $fileInfos = new SplFileInfo($file);
  $extension = $fileInfos->getExtension();
  $name = $fileInfos->getBasename('.'.$extension);
  $size = $_FILES["monfichier"]["size"];
  if($size < 8000000 && (!strcmp(strtolower($extension), "png") || !strcmp(strtolower($extension), "jpeg") || !strcmp(strtolower($extension), "jpg"))) {
    $sql = $database->query('SELECT COUNT(*) AS nbImages FROM `imageData`')->fetch();
    $id = (int) $sql['nbImages'];
    // Ajout de cette nouvelle image dans la base de donnée
    $database->query("INSERT INTO `imageData`(`id`, `name`, `extension`, `size`) VALUES ('$id', '$name', '$extension', '$size')");
    // On enregistre l'image dans le repertoire
    $uploads_dir = dirname(getcwd());
    $uploads_dir .= "/utils/images";
    $name = basename($_FILES["monfichier"]["name"]);
    $test = "$uploads_dir/$name";
    rename($_FILES["monfichier"]["tmp_name"], "$uploads_dir/$name");
  }
?>