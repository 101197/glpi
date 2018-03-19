<?php
session_start();

//connexion à la bdd
try {
  $bdd = new PDO('mysql:host=ppe2.ddns.net;dbname=glpoulpi', 'glpoulpi', 'glpoulpi');
} catch (Exception $e) {
  echo 'Erreur de connexion à la bdd : '.$e;
}
?>
