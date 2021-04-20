   <?php
if($_SESSION["autorisation"]=="OK"){
	?>
<div class="container">
   
          <div class="row">
             <div class="col"> 
				<h1 class="text-center text-danger mt-3"> Bienvenue sur la page d'administration du site </h1>
			 </div>
         </div>
		 <div class="row">
			
			<span class="m-2 text-center"><a href="index.php?uc=admin&choix=deconnexion" class="btn btn-danger">Se deconnecter</a> </span>
			
			
		 </div>
		 <div class="row">
			
			<span class="m-2 text-center"><a href="index.php?uc=bonbons&action=ajouter" class="btn btn-danger">Ajouter</a> </span>
					
		 </div>
       
		
		</div>

   <div class="row">
         <div class="text-center">
<?php		
  if(isset($_SESSION["alert"])){
	?>
 <div id="alert" class='alert alert-success' role='alert'>
  <?php echo $_SESSION["alert"]  ;
  unset($_SESSION["alert"] );
  ?>
</div>
<?php
  }
			foreach($lesProduits as $produit)
				{
				 ?>
				  <div class='card text-center m-3' style='width: 15rem;'>
                          <img class='card-img-top' src='images/<?= $produit->getPhoto() ?>' >
                            <div class='card-body'>
								<h5 class='card-title text-danger'><?=$produit->getNom() ?> </h5>
								<p class='card-text'> <?= $produit->getPrix() ?> €</p>
								<a id='mywish' href='index.php?uc=bonbons&action=modifier&modif=<?=$produit->getId() ?>' class='btn btn-danger'>Modifier</a>
                                <a id='mywish' href='index.php?uc=bonbons&action=supprimer&supp=<?=$produit->getId() ?>' class='btn btn-danger' onclick="return confirm('Voulez vous supprimer ce bonbon ?')">Supprimer</a>        
						</div>
					</div>
	
		<?php
				}

?>
  </div>
         </div>
 <?php
}
