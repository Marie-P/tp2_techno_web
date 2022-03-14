<?php
  // On récupère le nombre de personnes total
  $sql = $database->query('SELECT COUNT(*) AS nbImages FROM `imageData`')->fetch();
  // On sécurise en castant en un entier 
  $nbImages = (int) $sql['nbImages'];
  // On détermine le nombre total de personnes par page
  $imagesDisplayed = 3;
  // On arrondi à l'entier supérieur, pour garder ceux qui sont en plus des pages (exemple pour 12 personnes il nous faut 3 pages et non 2)
  $pages = ceil($nbImages/$imagesDisplayed);
  // On calcul qui est la première personne de la page
  $first = ($currentPage * $imagesDisplayed) - $imagesDisplayed; // La personne qui se trouve en haut de la page
  // On récupère les informations de la première personne de la page et les personnes suivante en fonction de la limite fixé
  $query = $database->prepare('SELECT * FROM `imageData` LIMIT :first, :imagesDisplayed;'); // on commence à :first jusqu'au numéro :personnesDisplayed
  $query->bindValue(':first', $first, PDO::PARAM_INT);
  $query->bindValue(':imagesDisplayed', $imagesDisplayed, PDO::PARAM_INT);
  $query->execute();
  $images = $query->fetchAll(PDO::FETCH_ASSOC);
?>