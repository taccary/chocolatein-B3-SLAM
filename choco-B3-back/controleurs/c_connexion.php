<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

// recuperation des donnees GET, POST, et SESSION
login();

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees


// appel du script de vue qui permet de gerer l'affichage des donnees
$title = "Connexion";
include "$racine/vues/entete.html.php";
include "$racine/vues/v_connexion.php";
include "$racine/vues/pied.html.php";
?>