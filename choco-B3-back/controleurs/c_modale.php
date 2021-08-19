<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once("$racine/modele/bd.choco.inc.php");
include_once("$racine/modele/bd.utilisateur.inc.php");

// recuperation des donnees GET, POST, et SESSION

$nomVue = $_GET['nomVue'];
$id = $_GET['id'];

// traitement si necessaire des donnees recuperees
switch ($nomVue) {
    case "ajoutProduit" :
        $gammes = getGammes();
        $fichierVue = "crudProduits/v_ajoutProduit.php";
        break;
    case "modifProduit" :
        $gammes = getGammes();
        $fichierVue = "crudProduits/v_modifProduit.php";
        $data = getUnProduit($id);
        break;
    case "suprProduit" :
        $fichierVue = "crudProduits/v_suprProduit.php";
        $data = getUnProduit($id);
        break;
    case "ajoutGamme" :
        $fichierVue = "crudGammes/v_ajoutGamme.php";
        break;
    case "modifGamme" :
        $fichierVue = "crudGammes/v_modifGamme.php";
        $data = getUneGamme($id);
        break;
    case "suprGamme" :
        $fichierVue = "crudGammes/v_suprGamme.php";
        $data = getUneGamme($id);
        break;
    case "ajoutUtilisateur" :
        $fichierVue = "crudUtilisateurs/v_ajoutUtilisateur.php";
        $roles = getRoles();
        break;
    case "modifUtilisateur" :
        $fichierVue = "crudUtilisateurs/v_modifUtilisateur.php";
        $roles = getRoles();
        $data = getUtilisateurByMailU($id);
        break;
    case "suprUtilisateur" :
        $fichierVue = "crudUtilisateurs/v_suprUtilisateur.php";
        $data = getUtilisateurByMailU($id);
        break;
}


// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vues/".$fichierVue;

?>