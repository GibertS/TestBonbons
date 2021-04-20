<?php
if(isset($_GET["choix"])){
$choix=$_GET["choix"] ;
switch($choix)
{
    case "formulaire":
		include("vues/formAdmin.php") ;
		break;
	
	case "verif" :

    	$rep=Admin::verifier($_POST["login"], md5($_POST["mdp"])) ;
    
		if($rep==true){
			$_SESSION["autorisation"]="OK" ;
		  	$lesProduits=produit::afficherTous();
			include ("vues/listeProduitsAdmin.php") ;
			}
			else
			{	
		    include("vues/echecRecherche.php") ;
			}
		break ;
	
	case "deconnexion":
		Admin::deconnecter() ;
		include "vues/accueil.php" ;
		break;
}
}