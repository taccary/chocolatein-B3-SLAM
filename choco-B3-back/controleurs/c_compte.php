<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

// recuperation des donnees GET, POST, et SESSION


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 



// traitement si necessaire des donnees recuperees
if (!isset($_SESSION)) {
    session_start();
}
$user = getUtilisateurByMailU($_SESSION['mail']);

// appel du script de vue qui permet de gerer l'affichage des donnees
$title = "Compte";
include "$racine/vues/entete.html.php";
include "$racine/vues/vueCompte.php";
include "$racine/vues/pied.html.php";
?>