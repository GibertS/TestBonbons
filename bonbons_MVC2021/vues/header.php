<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Les bonbons</title>
	 <!-- Including jQuery -->
    <script src= 
		"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"> 
    </script> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/candy.png" />
	<link rel="stylesheet" href="vues/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="index.php"><i class="fas fa-candy-cane fa-4x" style="color:#FF5733;"></i></a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="index.php?uc=bonbons&action=liste">Voir tous les bonbons</a>
        </li>
		
		 <form class="d-flex" method="POST" action="index.php?uc=bonbons&action=rechercher">
			<input class="form-control me-2" type="search" placeholder="chercher UN bonbon ?" aria-label="Search" name="recherche">
			<button class="btn btn-outline-success" type="submit">Trouver</button>
		</form>
	
      </ul>
	
	  <div class="text-end">
           <a class="nav-link active" aria-current="page" href="index.php?uc=admin&choix=formulaire">Espace admin</a>
        </div>
	 
        
   </div>


</nav>
