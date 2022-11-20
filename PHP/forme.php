<?php
echo"
<!doctype html>
	<html lang="fr">

<head>
	<meta charset="utf-8">
	<title >Club Cyclisme 63</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style_indexe.css">
    <meta name="description" content="Création site club de sport"/>
    <meta name="author" content="Laurine Brette"/>
    <meta name="keywords" content="html, TP Découverte Programmation Web "/>
  <style>
	body {
		background-image: linear-gradient(to top, #fddb92 0%, #d1fdff 100%);
	}
</style>
</head>

<body>
	<h1 id="titre"> Club Cyclisme 63 </h1>
	<a href="https://fr-fr.facebook.com/"><img id="Facebook" src="../Images/logoFacebook.png"></a>
	<a href="https://twitter.com/?lang=fr"><img id="Twitter" src="../Images/logoTwitter.png"></a>

	<header >
	<nav id="menu">
		<ul >
		<li><a href="index.html">Accueil</a></li> 
		<li><a href="horaire.html">Horaire</a></li>
		<li><a href="#">Média 
			<span>&#x25BC;</span>
		</a>
		<ul class="sous-menu">
			<li><a href="galeriephotos.html">Photos</a></li>
			<li><a href="videos.html">Vidéos</a></li>
		</ul>
	 	<li><a href="planningTarif.html">Tarif</a></li>
	    <li><a href="preinscription.html">Inscription</a></li> 
	   </ul>
    </nav>
    </header>

    <h2> Formulaire</h2>
";

$condition = 0;

if (empty($_GET['Nom']))
{
	echo "<p>Le nom doit être renseigné!<\p>";
	$condition = 1;

}

if (empty($_GET['Prenom']))
{
	echo "<p>Le prenom doit être renseigné!<\p>";
	$condition = 1;
}

if (empty($_GET['Email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
{
	echo "<p>Adresse mail invalide!<\p>";
	$condition = 1;
}

if (empty($_GET['des']))
{
	echo "<p>La description doit être renseignée!<\p>";
	$condition = 1;
}


	echo "<p>L'Adresse mail est valide<\p>";

if ($condition == 0)
{
	echo "Nom: ".$_GET [Nom] "Prenom: " .$_GET [Prenom] . "email: " . $_GET [Email] . "Téléphone: " . $_GET [Téléphone] . "Activité: " . $_GET [Activité] . "Catégorie: " . $_GET [Catégorie] . "Horaire: " . $_GET [Horaire] . "choix: " . $_GET [choix] . "Description: " . $_GET [desc];
}
echo "
<a class="RetourGauche" href="index.html" >
	    --> Retour page acceuil </a> 

	<footer id="pied_page">
		Site crée par Laurine BRETTE (Groupe 3)
	</footer>
":

?>