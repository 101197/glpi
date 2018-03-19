<?php
session_start();

//connexion à la bdd
try {
  $bdd = new PDO('mysql:host=ppe2.ddns.net;dbname=glpi', 'glpoulpi', 'glpoulpi');
} catch (Exception $e) {
  echo 'Erreur de connexion à la bdd : '.$e;
}
?>
