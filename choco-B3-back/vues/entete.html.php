<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="vues/css/images/favicon.ico">
		<meta name="author" content="Tiphaine Accary Barbier">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="robots" content="index,follow,all" />
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="vues/css/style.css">
		<link rel="stylesheet" type="text/css" href="vues/css/menuVertical.css">
		<link rel="stylesheet" type="text/css" href="bibliotheques/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bibliotheques/datatable/dataTable.bootstrap.min.css">
		<link href="vues/css/fontawesome/css/all.min.css" rel="stylesheet">

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<script src="bibliotheques/perso/fonctions.js"></script>

		<!-- bibliotheque ckeditor éditeur riche intégré -->
		<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

	</head>

	<nav id="mySidebar" class="sidebar couleur">
		<?php
		// partie pour tout le monde ?>
			<a class="menu" href="?action=catalogue"><i class="material-icons">import_contacts</i><span class="icon-text">Catalogue</span></a><br>

		<?php
		// partie connectée
			if(isLoggedOn()){?>
				<a class="menu" href="?action=compte"><i class="material-icons">account_circle</i><span class="icon-text">Mes infos personnelles</span></a><br>

				<a class="menu" href="?action=CRUDGammes"><i class="material-icons">inventory_2</i><span class="icon-text">Gestion des gammes</span></a><br>

				<a class="menu" href="?action=CRUDProduits"><i class="material-icons">category</i><span class="icon-text">Gestion des produits</span></a><br>

				<a class="menu" href="?action=CRUDMessages"><i class="material-icons">chat</i><span class="icon-text">Gestion des messages</span></a><br>

				<a class="menu" href="?action=CRUDActualites"><i class="material-icons">feed</i><span class="icon-text">Gestion des actualités</span></a><br>

				<?php 
					if(isAdminOn()){ ?>
						<a class="menu" href="?action=CRUDUtilisateurs"><i class="material-icons">group</i><span class="icon-text">Gestion des utilisateurs</span></a><br>
				<?php } ?>
		
				<a class="menu" href="?action=deconnexion"><i class="material-icons">logout</i><span class="icon-text">Déconnexion</a></span></a><br>

			<?php
			} else { ?>
				<a class="menu" href="?action=connexion"><i class="material-icons">login</i><span class="icon-text">Connexion</a></span></a><br>
			<?php 
			}
			?>
	</nav>

	<!-- Page content holder -->
		
	

		<header>
			<span class="flex"><a href="./?action=accueil"><img src="vues/css/images/logo_transparent_300w.png" alt="Chocolate'in"/></a> <?= $title ?></span>
		</header>

		<div class="container content">