<div class="container">

	<div class="row">
		 <h1 class="text-center text-danger"> Achetez nos délicieux bonbons </h1>
	</div>
    <div class="row">
	 
  <?php 
  if(isset($_SESSION["alert"])){
	  ?>
	 <div id="alert" class='alert alert-success' role='alert' >
	  <?php echo $_SESSION["alert"] ?>
	</div>
	 
	<?php 
	unset($_SESSION["alert"]) ;
	}
	?>
	</div>
	<div class="row">
	

	  <span class="text-center m-4">
		
			<a class="btn btn-danger btn-lg me-5" aria-current="page" href="index.php?uc=panier">Voir le panier <span class="badge bg-primary"><?= $nb ?> </span></a>
		</span>
	
		
</div>
</div>
<div class="row">
         <div class="text-center">
			<?php

			foreach($lesProduits as $produit)
				{
				 
				  echo "<div class='card text-center m-3' style='width: 15rem;'>
                                            <img class='card-img-top' src='images/".$produit->getPhoto() ."' >
                                            <div class='card-body'>
								<h5 class='card-title text-danger'>".$produit->getNom() ."</h5>
								<p class='card-text'> " .$produit->getPrix() ." €</p>
								<a id='mywish' href='index.php?uc=bonbons&action=ajoutPanier&id=".$produit->getId() ."' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
                                            </div>
					</div>" ;
	
		
				}

			?>
		</div>
    </div>
    
</div>



