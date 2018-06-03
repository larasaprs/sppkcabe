<?php
class faktorController{
	public static function tampilFaktor(){
		$posts=faktorModel::tabelFaktor();
		require_once('view/faktorAdmin.php');
	}
	
		public static function tampilFaktorPetani(){
		$posts=faktorModel::tabelFaktor();
		require_once('view/faktorPetani.php');
	}
	public static function tambahFaktor(){
		$posts=faktorModel::tambahFaktor($_GET['faktor'],$_GET['level_1'],$_GET['level_2'],$_GET['level_3']);
		header("Location:index.php?controller=faktor&action=tampilFaktor");
	}
	public static function hapusFaktor(){
		$posts=faktorModel::hapusFaktor($_GET['id']);
		header("Location:index.php?controller=faktor&action=tampilFaktor");
	}
	public static function banyakFaktor(){
		$banyak=faktorModel::banyakFaktor();
		
		$posts=($banyak*2)+1;
	echo $posts;
		require_once('view/orthogonalarray.php');
	}
	public static function hasilpercobaan(){
		$posts=faktorModel::hasilpercobaan();
		
		require_once('view/hasilPercobaan.php');
	}
	public static function tambahHasilPercobaan(){
	
	}
	public static function formtambahhasilpercobaan(){
		
		$posts=faktorModel::tampilUbahHasil($_GET['id']);
		require_once('view/inputhasilpercobaan.php');
	}
	public static function ubahHasilPercobaan(){
		$posts=faktorModel::ubahHasilPercobaan($_GET['id'],$_GET['kotoran'],$_GET['bekatul'],$_GET['sekam'],$_GET['probiotik'],$_GET['hasil_1'],$_GET['hasil_2'],$_GET['hasil_3']);
		if ($_GET['hasil_1']<0 || $_GET['hasil_2']<0 || $_GET['hasil_3'] <0) {
			
			
			echo "
			<script>
			window.alert('gagal');
		
			</script>";

		}
		else{
			header('Location:index.php?controller=faktor&action=hasilPercobaan');
		
	}}



}
?>