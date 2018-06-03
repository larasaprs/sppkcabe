<?php
class loginController{
	public function autentikasi(){
		$error='';
		$error='';
		if (!isset($_GET['username']) || !isset($_GET['password'])) {
			$error='username atau';
			require_once('view/tampilanawal.php');
		}
		if (loginModel::login($_GET['username'],$_GET['password']) == 'no-user') {
			require_once('view/tampilanawal.php');
		}
		elseif (loginModel::login($_GET['username'],$_GET['password']) == 'Admin') {
			$_SESSION['username']=$_GET['username'];
			$_SESSION['password']=$_GET['password'];
			header("location:index.php?controller=home&action=adminHome");
		}
		elseif (loginModel::login($_GET['username'],$_GET['password']) == 'Petani') {
		$_SESSION['username']=$_GET['username'];
		$_SESSION['password']=$_GET['password'];
		header("location:index.php?controller=home&action=petaniHome");	# code...
		}
	}
}
?>