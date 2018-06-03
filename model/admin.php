<?php
class adminModel{
	public static function dataAdmin($username){
$db=koneksi::getInstance();
$req=$db->query("SELECT id_user, nama, level FROM user where username='$username'");
foreach($req->fetchAll() as $hasilnya){
	$dataadmin= array(
		'id' => $hasilnya['id_user'],
		'nama' => $hasilnya['nama'],
		'level' => $hasilnya['level']
		);
	
}
return $dataadmin;	
}
public function dataPetani(){
	$db=koneksi::getInstance();
	$list=[];
	$req=$db->query("SELECT * from user where level='Petani'");
	foreach($req->fetchAll() as $hasilnya){
	$list[]= array(
		'id' => $hasilnya['id_user'],
		'nama' => $hasilnya['nama'],
		'username' => $hasilnya['username'],
		'password' => $hasilnya['password'],
		'level' => $hasilnya['level'],
		'nohp' => $hasilnya['nohp']
		);
}
return $list;
}
public function tambahPetani($nama, $username, $password, $nohp){
	$db=koneksi::getInstance();
	$list=[];
	$req=$db->query("INSERT INTO user (id_user,nama,username,password, level, nohp) values (NULL,'".$nama."','".$username."','".$password."','Petani','".$nohp."');");
}
}
?>