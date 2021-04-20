<?php
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>
<div class="container">
<div class="row center mt-5">
<div class="col-md-6">
<form method="POST" action="index.php?uc=bonbons&action=valideAjout" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="formGroupExampleInput">Nom du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="nom">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Prix du produit</label>
    <input type="text" class="form-control" id="formGroupExampleInput2"  name="prix">
	<br>
	<label for="formGroupExampleInput2">Image du produit</label>
    <input type="file" name="photo" accept="image/png, image/jpg">
	<br> <br>
	<button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
</div>
</div>
</div>

<?php
}
?>