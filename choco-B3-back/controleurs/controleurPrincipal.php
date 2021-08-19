<?php
function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "c_accueil.php";
    $lesActions["afficheGammes"] = "c_gammes.php";
    //$lesActions["afficheProduits"] = "";
    //$lesActions["afficheInfoLettres"] = "";
    //$lesActions["afficheMessages"] = "";

    
    $lesActions["CRUDGammes"] = "c_crudGammes.php";
    $lesActions["CRUDProduits"] = "c_crudProduits.php";
    $lesActions["CRUDMessages"] = "c_crudMessages.php";
    $lesActions["CRDUActus"] = "c_crudActus.php";

    $lesActions["compte"] = "c_compte.php";
    $lesActions["CRUDUtilisateurs"] = "c_crudUtilisateurs.php";
    
    $lesActions["modale"] = "c_modale.php";

    $lesActions["connexion"] = "c_connexion.php";
    $lesActions["deconnexion"] = "c_deconnexion.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}
?>