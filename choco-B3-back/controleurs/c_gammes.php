<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once("$racine/modele/bd.choco.inc.php");

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees
$gammes = getGammes();

// appel du script de vue qui permet de gerer l'affichage des donnees
$title = "Gammes";
include "$racine/vues/entete.html.php";
include "$racine/vues/v_afficheGammes.php";
include "$racine/vues/pied.html.php";
?>