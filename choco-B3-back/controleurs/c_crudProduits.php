<?php
    if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
        $racine = "..";
    }
    include_once("$racine/modele/bd.choco.inc.php");

    // recuperation des donnees GET, POST, et SESSION
    if(isLoggedOn()){
        if(isset($_POST['add'])){
            $id = htmlentities($_POST['id']);
            $nom = htmlentities($_POST['nom']);
            $description = htmlentities($_POST['description']);	
            $packaging = htmlentities($_POST['packaging']);	
            $idgamme = htmlentities($_POST['idgamme']);	
            // traitement du fichier
            $fichier = $_FILES['fileToUpload']['tmp_name'];
            $nomFichier = $_FILES['fileToUpload']['name'];
            $taille = $_FILES['fileToUpload']['size'];
            $erreur = $_FILES['fileToUpload']['error'];
            $cheminImages = "/vues/images/produits/";
            $repertoireCible = $urlFront.$cheminImages.$idgamme;
            if (!file_exists($repertoireCible))
            {
                mkdir ($repertoireCible,0700);
            }
            move_uploaded_file($fichier, $repertoireCible."/".$nomFichier);
            // enleve l'extension
            $nomFichierSansExt = substr($nomFichier, 0, strpos($nomFichier, "."));

            function creerImagesJpeg($repertoireCible, $nomFichierSansExt, $largeur){
                // Calcul des nouvelles dimensions
                list($width, $height) = getimagesize($repertoireCible."/".$nomFichierSansExt.".jpg");
                $diff = $width / $largeur;
                $hauteur = $height / $diff;
                
                // Redimensionnement
                $image = imagecreatefromjpeg($repertoireCible."/".$nomFichierSansExt.".jpg");
                $nouvelleImage = imagecreatetruecolor($largeur, $hauteur);
                imagecopyresampled($nouvelleImage, $image, 0, 0, 0, 0, $largeur, $hauteur, $width, $height);
                

                imagejpeg($nouvelleImage, $repertoireCible."/".$nomFichierSansExt."_".$largeur."w.jpg") ;
            }
            creerImagesJpeg($repertoireCible,$nomFichierSansExt,300);
            creerImagesJpeg($repertoireCible,$nomFichierSansExt,750);
           
            $urlimgBDD = ".".$cheminImages.$idgamme."/".$nomFichierSansExt;
            $resultat = ajoutProduit($id, $nom, $description, $packaging, $urlimgBDD, $idgamme);
            
            if($resultat){
                $_SESSION["success"] = 'Produit ajouté';
            }
            else{
                $_SESSION["error"] = 'Problème lors de l\'ajout du produit';
            }
        }

        if(isset($_POST['edit'])){
            $id = htmlentities($_POST['id']);
            $nom = htmlentities($_POST['nom']);
            $description = htmlentities($_POST['description']);	
            $packaging = htmlentities($_POST['packaging']);	
            $urlimg = htmlentities($_POST['urlimg']);	
            $idgamme = htmlentities($_POST['idgamme']);		

            $resultat = editProduit($id, $nom, $description, $packaging, $urlimg, $idgamme);

            if($resultat){
                $_SESSION['success'] = 'Produit modifié';
            }		
            else{
                $_SESSION['error'] = 'Problème lors de la modification du produit';
            }
        }

        if(isset($_POST['supr'])){
            $id = htmlentities($_POST['id']);
            $img = htmlentities($_POST['urlimg']);
            $resultat = supprProduit($id);
            unlink($urlFront.$img);

            if($resultat){
                $_SESSION['success'] = 'Produit supprimé';
            }		
            else{
                $_SESSION['error'] = 'Problème lors de la suppression du produit';
            }
        }

        // appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
        $produits = getProduits();
        $gammes = getGammes();
        // traitement si necessaire des donnees recuperees

        // appel du script de vue qui permet de gerer l'affichage des donnees
        $title = "Gestion des produits";
        include "$racine/vues/entete.html.php";
        include "$racine/vues/v_crudProduits.php";
        include "$racine/vues/pied.html.php";
    }else{
        header("Location: index.php");
    }

?>