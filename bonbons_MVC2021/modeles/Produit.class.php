<?php

class Produit{
    private $id;
    private $nom;
    private $prix;
    private $photo ;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrix() {
        return $this->prix;
    }

    function getPhoto() {
        return $this->photo;
    }

	 function setId($id) {
        $this->id = $id;
    }
	
    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }


    public static function affichertous(){
    $req=MonPdo::getInstance()->prepare("select * from produit order by nom") ;
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'produit') ;
    $req->execute();
    $lesResulats=$req->fetchAll();
    return $lesResulats ;
    
}

    public static function rechercher($nom)
    {
    $req=MonPdo::getInstance()->prepare("select * from produit where upper(nom) like :nom") ;
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'produit') ;
    $req->execute(array(':nom'=>$nom.'%'));
    $lesResulats=$req->fetchAll();
    return $lesResulats ;

}

	public static function securiser($donnees)
	{
		$donnees=trim($donnees) ;
		$donnees=stripslashes($donnees);
		$donnees=htmlspecialchars($donnees) ;
		return $donnees ;
	}	
	
	public static function ajouter(produit $produit)
    {
        
        $req=MonPdo::getInstance()->prepare("insert into produit(nom, prix, photo) values(:nom, :prix, :photo)") ;
        $nom=$produit->getNom() ;
        $req->bindParam('nom', $nom);
        $prix=$produit->getPrix() ;
        $req->bindParam('prix', $prix);
        $photo=$produit->getPhoto() ;
        $req->bindParam('photo', $photo);
       
        $nb=$req->execute();
        $_SESSION['alert']="le produit a été ajouté !" ;
        return $_SESSION['alert'] ;
    }

	 public static function trouverUnBonbon($id)
    {
    $req=MonPdo::getInstance()->prepare("select * from produit where id=:id") ;
    $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'produit') ;
    $req->execute(array(':id'=>$id));
    $leResultat=$req->fetch();
    return $leResultat ;

	}

	
	public static function modifier(produit $produit)
    {
        
        $req=MonPdo::getInstance()->prepare("update produit set nom=:nom, prix=:prix, photo=:photo where id=:id") ;
        $id=$produit->getId() ;
		$req->bindParam('id',$id) ;
		$nom=$produit->getNom() ;
        $req->bindParam('nom', $nom);
        $prix=$produit->getPrix() ;
        $req->bindParam('prix', $prix);
        $photo=$produit->getPhoto() ;
        $req->bindParam('photo', $photo);
        $nb=$req->execute();
		
		$_SESSION['alert']="le produit a été modifié !" ;
        return $_SESSION['alert'] ;
    }

	public static function supprimer(produit $produit)
    {
        
        $req=MonPdo::getInstance()->prepare("delete from produit  where id=:id") ;
        $id=$produit->getId() ;
		$req->bindParam('id',$id) ;
		$nb=$req->execute();
		$_SESSION['alert']="le produit a été supprimé !" ;
        return $_SESSION['alert'] ;
    }
	
	public static function ajoutPanier($id){
	
		if(!isset($_SESSION['panier']))
		{
		$_SESSION['panier'] =array(); // création de la variable de session panier s'il est vide
		}
		if(isset($_SESSION['panier'][$id]))
		{
		$_SESSION['panier'][$id]++ ; //si le produit est déjà dans le panier, j'ajoute 1 à la qté

		}
		else
		{
		$_SESSION['panier'][$id]=1 ; // je mets le produit dans le panier avec une qté 1
		}
		$_SESSION['alert']="le produit a été ajouté au panier !" ;
		return $_SESSION['alert'] ;
		
		}
		public static function ajoutSuppPanier($id){
			$_SESSION['panier'][$id]++ ;
		}
		
		public static function retraitPanier($id){   
			$nb=$_SESSION['panier'][$id] ;

			if($nb==1)
			{
			unset($_SESSION['panier'][$id]) ;
			}
			else
			{
			$_SESSION['panier'][$id]-=1 ;
			}
		}
		public static function viderPanier(){
			unset($_SESSION['panier']);
		}
		
		public static function nbPanier()
		{
			
			$nb= count($_SESSION["panier"]) ;
			return $nb ;
		}

}


