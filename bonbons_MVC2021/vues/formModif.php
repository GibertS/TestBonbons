<?php
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>
<div class="container">
<div class="row center mt-5">
<div class="col">
	<form method="POST" action="index.php?uc=bonbons&action=valideModif" enctype="multipart/form-data">
	 <div class="form-group">
    <label for="formGroupExampleInput">Nom du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="nom" value="<?php echo $produit->getNom() ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2"  name="prix" value="<?= $produit->getPrix() ?>">
	<br>
	<label for="formGroupExampleInput3">Image du produit</label>
	<input type="text" name="photo1" class="form-control" id="formGroupExampleInput3"  value="<?= $produit->getPhoto() ?>">
    <br>ou pour modifier l'image <input type="file" name="photo2" accept="image/png, image/jpg" >
	
	<br> <br>
	<input type="hidden" name="id" value="<?= $produit->getId() ?>">
	<input type="submit" class="btn btn-primary" value="Enregistrer les modifications">
  </div>
</form>
</div>
</div>
</div>
<?php
}
?>
