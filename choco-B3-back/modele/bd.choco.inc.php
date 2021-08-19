<?php

include_once "bd.inc.php";

function getGammes() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from gamme");
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUneGamme($id) {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from gamme where id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function ajoutGamme($id, $libelle, $picto){
    $resultat = false;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare('INSERT INTO gamme (id, libelle, picto) VALUES (:id, :libelle, :picto)');
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->bindParam(':libelle', $libelle, PDO::PARAM_STR);
        $req->bindParam(':picto', $picto, PDO::PARAM_STR);
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function editGamme($id, $libelle, $picto){
    $resultat = false;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare('UPDATE gamme SET libelle = :libelle, picto = :picto  WHERE id = :id');
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->bindParam(':libelle', $libelle, PDO::PARAM_STR);
        $req->bindParam(':picto', $picto, PDO::PARAM_STR);
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function supprGamme($id){
    $resultat = false;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare('DELETE FROM gamme WHERE id = :id ');
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
   
function getProduits() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from produit");
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUnProduit($id) {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from produit where id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function ajoutProduit($id, $nom, $description, $packaging, $urlimg, $idgamme){
    $resultat = false;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare('INSERT INTO produit (id, nom, description, packaging, urlimg, idgamme) VALUES (:id, :nom, :description, :packaging, :urlimg, :idgamme)');
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':description', $description, PDO::PARAM_STR);
        $req->bindParam(':packaging', $packaging, PDO::PARAM_STR);
        $req->bindParam(':urlimg', $urlimg, PDO::PARAM_STR);
        $req->bindParam(':idgamme', $idgamme, PDO::PARAM_STR);
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function editProduit($id, $nom, $description, $packaging, $urlimg, $idgamme){
    $resultat = false;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare('UPDATE produit SET nom = :nom, description = :description, packaging = :packaging, urlimg = :urlimg, idgamme = :idgamme  WHERE id = :id');
        $req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':description', $description, PDO::PARAM_STR);
        $req->bindParam(':packaging', $packaging, PDO::PARAM_STR);
        $req->bindParam(':urlimg', $urlimg, PDO::PARAM_STR);
        $req->bindParam(':idgamme', $idgamme, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function supprProduit($id){
    $resultat = false;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare('DELETE FROM produit WHERE id = :id ');
        $req->bindParam(':id', $id, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>