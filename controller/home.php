<?php

class homeController{
	public function awal(){
		$error='';
		require_once('view/tampilanawal.php');
	}
	public function adminHome(){
		$error='';
		$data=adminModel::dataAdmin($_SESSION['username']);
		$_SESSION['nama']=$data['nama'];
		$_SESSION['level']=$data['level'];
	
		require_once('view/homeAdmin.php');
	}
	public function petaniHome(){
		$error='';
		$data=adminModel::dataAdmin($_SESSION['username']);
		$_SESSION['nama']=$data['nama'];
		$_SESSION['id']=$data['id'];
		$_SESSION['level']=$data['level'];

	
		$kotoran=perhitunganModel::levelkotoran();
				$bekatul=perhitunganModel::levelbekatul();
				$sekam=perhitunganModel::levelsekam();
				$probiotik=perhitunganModel::levelprobiotik();
		
		require_once('view/petaniHome.php');
	}
	public function dataPetani(){
		$error='';
		$posts=adminModel::dataPetani();


		require_once('view/daftarPetani.php');
	}
	public function tambahPetani(){
		if ($_GET['nama']=='' || $_GET['username']=='' || $_GET['password']=='' || $_GET['nohp']=='') {
		header("Location:index.php?controller=home&action=dataPetani");
		}
		else{
		
		$posts=adminModel::tambahPetani($_GET['nama'],$_GET['username'],$_GET['password'],$_GET['nohp']);
		header("Location:index.php?controller=home&action=dataPetani");

	}}
}
?>