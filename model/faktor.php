	<?php
class faktorModel{
public static function tabelFaktor(){
	$list=[];
	$db=koneksi::getInstance();
	$req=$db->query("SELECT * FROM faktor");
	foreach($req->fetchAll() as $posts){
		$list[]=array(
			'id_faktor' => $posts['id_faktor'],
			'faktor' => $posts['faktor'],
			'level_1' => $posts['level_1'],
			'level_2' => $posts['level_2'],
			'level_3'=> $posts['level_3']);
	}
	return $list;
}
public static function tampilUbahHasil($id){
	$list=[];
	$db=koneksi::getInstance();
	$req=$db->query("SELECT* FROM hasilpercobaan where id_percobaan = '$id'");
	foreach($req->fetchAll() as $posts){
$list[]=array(
			'id_percobaan' => $posts['id_percobaan'],
			'kotoran' => $posts['kotoran'],
			'bekatul' => $posts['bekatul'],
			'sekam' => $posts['sekam'],
			'probiotik'=> $posts['probiotik'],
			'hasil_1' => $posts['hasil_1'],
			'hasil_2' => $posts['hasil_2'],
			'hasil_3' => $posts['hasil_3']);

	}
	return $list;
}
public static function ubahHasilPercobaan($id,$kotoran,$bekatul,$sekam,$probiotik,$hasil_1,$hasil_2,$hasil_3){
	$db =koneksi::getInstance();

			$req = $db->query("UPDATE hasilpercobaan set kotoran='$kotoran', bekatul='$bekatul', sekam='$sekam',probiotik='$probiotik',hasil_1='$hasil_1',hasil_2='$hasil_2',hasil_3='$hasil_3'
				where id_percobaan='$id'
				");

			return $req;
}
public static function hasilpercobaan(){
	$list=[];
	$db=koneksi::getInstance();
	$req=$db->query("SELECT * from hasilpercobaan");
	foreach($req->fetchAll() as $posts){
		$list[]=array(
			'id_percobaan' => $posts['id_percobaan'],
			'kotoran' => $posts['kotoran'],
			'bekatul' => $posts['bekatul'],
			'sekam' => $posts['sekam'],
			'probiotik'=> $posts['probiotik'],
			'hasil_1' => $posts['hasil_1'],
			'hasil_2' => $posts['hasil_2'],
			'hasil_3' => $posts['hasil_3']);
	}
	return $list;
}
public static function levelkotoran(){
	$db=koneksi::getInstance();

	$req=$db->query("SELECT level_1, level_2,level_3 from faktor where faktor='Kotoran Kelinci'");
	foreach ($req->fetchAll() as $posts) {
		$list[]=array(
			'level_1' => $posts['level_1'],
				'level_2' => $posts['level_2'],
					'level_3' => $posts['level_3']);

	}
	return $list;

}
public static function levelbekatul(){
	$db=koneksi::getInstance();

	$req=$db->query("SELECT level_1,level_2,level_3 from faktor where faktor='Bekatul'");
	foreach ($req->fetchAll() as $posts) {
		$list[]=array(
			'level_1' => $posts['level_1'],
				'level_2' => $posts['level_2'],
					'level_3' => $posts['level_3']);

	}
	return $list;

}
public static function levelsekam(){
	$db=koneksi::getInstance();

	$req=$db->query("SELECT level_1, level_2,level_3 from faktor where faktor='Sekam'");
	foreach ($req->fetchAll() as $posts) {
		$list[]=array(
			'level_1' => $posts['level_1'],
				'level_2' => $posts['level_2'],
					'level_3' => $posts['level_3']);

	}
	return $list;

}
public static function levelprobiotik(){
	$db=koneksi::getInstance();

	$req=$db->query("SELECT level_1, level_2,level_3 from faktor where faktor='Probiotik EM4'");
	foreach ($req->fetchAll() as $posts) {
		$list[]=array(
			'level_1' => $posts['level_1'],
				'level_2' => $posts['level_2'],
					'level_3' => $posts['level_3']);

	}
	return $list;

}
public static function tambahFaktor($faktor,$level_1,$level_2,$level_3){
	$db=koneksi::getInstance();
	$req=$db->query("INSERT INTO faktor (id_faktor,faktor,level_1,level_2,level_3) values (NULL,'".$faktor."','".$level_1."','".$level_2."','".$level_3."');");
}
public static function hapusFaktor($id){
	$db=koneksi::getInstance();
	$req=$db->query("DELETE from faktor where id_faktor='$id'");
}
public static  function banyakFaktor(){
	$db=koneksi::getInstance();
	$query=$db->query("select count(*) as banyak from faktor");
foreach ($query->fetchAll() as $posts) {
	$list[]=array(
		'banyak' =>$posts['banyak']);
	
}
return $list;

}
public static function tambahhasilpercobaan($kotoran,$bekatul,$sekam,$probiotik){

}

}
?>