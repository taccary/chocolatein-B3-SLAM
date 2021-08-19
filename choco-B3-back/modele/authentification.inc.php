<?php

include_once "bd.utilisateur.inc.php";


function login() {
    if(isset($_POST['formconnexion'])){
        $pseudoconnect = $_POST['formmail'];
        $passconnect = hash('sha256', $_POST['formmdp']);
        $util = getUtilisateurByMailU($pseudoconnect);
        $mdpBD =  $util["motdepasse"]; 
        if($mdpBD == $passconnect){
            if (!isset($_SESSION)) {
                session_start();
            }
            // le mot de passe est celui de l'utilisateur dans la base de donnees
            $_SESSION["mail"] = $pseudoconnect;
            $_SESSION["motdepasse"] = $mdpBD;
            header("Location: index.php");
        }
    }
}

function logout() {
    if (isLoggedOn()){
        session_destroy();
        header("refresh:4;url=index.php");
    }else{
        header('Location: index.php');
    }
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mail"];
    }
    else {
        $ret = "";
    }
    return $ret; 
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;
    if(isset($_SESSION["mail"])) {
        $util = getUtilisateurByMailU($_SESSION["mail"]);
        if ($util["mail"] == $_SESSION["mail"] && $util["motdepasse"] == $_SESSION["motdepasse"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

function isAdminOn(){
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;
    if(isset($_SESSION["mail"])){
        $util = getUtilisateurByMailU($_SESSION["mail"]);
        if($util['role'] == 1) {
            $ret = true;
        }
    }else{
        echo "ERROR";
    }
    return $ret;
}

?>