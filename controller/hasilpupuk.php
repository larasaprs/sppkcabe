<?php 
class pupukController{
	
		public static function tampilPupukPetani(){
		$posts=pupukModel::tampilPupukPetani($_SESSION['id']);
		require_once('view/pupukPetani.php');
	}
	public static function tambahPupuk(){
		$posts=pupukModel::tambahPupuk($_SESSION['id'],$_GET['kotoran'],$_GET['bekatul'],$_GET['sekam'],$_GET['probiotik'],$_GET['hasil']);
		header("Location:index.php?controller=hasilpupuk&action=tampilPupukPetani");
	}
	public static function tampilPupukAdmin(){
		$posts=pupukModel::tampilPupukAdmin();
		require_once('view/pupukAdmin.php');
	}
}?>