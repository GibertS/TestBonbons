<?php
session_start() ;

require_once "modeles/monPdo.php" ;
require_once "modeles/Produit.class.php" ;
require_once "modeles/Admin.class.php" ;

include("vues/header.php");

if(empty($_GET["uc"])){
    $uc="accueil" ;
} else {
	
$uc=$_GET["uc"] ;    
}

switch($uc){
    case "accueil":
	
        include("vues/accueil.php");
        break ;
             
    case "bonbons":
		
        include("controleurs/controleurBonbons.php") ;
		 break ;
				
	case "admin":
		
        include("controleurs/controleurAdmin.php") ;
		break ;
		
	case "panier":
		include("vues/panier.php") ;
		break ;
}

include("vues/footer.php");