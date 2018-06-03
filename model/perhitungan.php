<?php
class perhitunganModel{
	public static function hitungSN(){
		$list=[];
		$total=[];
		$db=koneksi::getInstance();
	$req=$db->query("SELECT* FROM hasilpercobaan");
	foreach($req->fetchAll() as $posts){
$list[]=array(
			'id_percobaan' => $posts['id_percobaan'],
			'kotoran' => $posts['kotoran'],
			'bekatul' => $posts['bekatul'],
			'sekam' => $posts['sekam'],
			'probiotik'=> $posts['probiotik'],
			'hasil_1' => $posts['hasil_1'],
			'hasil_2' => $posts['hasil_2'],
			'hasil_3' => $posts['hasil_3'],
			'hasil' => ($posts['hasil_1']+$posts['hasil_2']+$posts['hasil_3'])/3,
			'SN' => -10*log10(pow(($posts['hasil_1']+$posts['hasil_2']+$posts['hasil_3']),2)/3));

	}


	return $list;
	}
	public static function tambahPrediksi($kotoran,$bekatul, $sekam, $probiotik, $hasilkotoran,$hasilbekatul,$hasilsekam, $hasilprobiotik){
		if ($kotoran==3000) {
				$kotor="3000-3999";
			}
			elseif ($kotoran==4000) {
				$kotor="4000-4999";
			}
			else{
				$kotor="5000-5999";
			}

			if ($bekatul==150) {
				$katul="150-199";
			}
			elseif($bekatul==200){
				$katul="200-249";

			}
			else{
				$katul="250-299";
			}
			if ($sekam==300) {
				$sk="300-399";
			}
			elseif ($sekam==400) {
				$sk="400-499";
			}
			else{
				$sk="500-599";
			}
			if ($probiotik==10) {
				$prb="10-19";
			}
			elseif ($probiotik==20) {
				$prb="20-29";
			}
			else{
				$prb="30-39";
			}

	$db=koneksi::getInstance();

	$req=$db->query("INSERT INTO hasilprediksi (id_hasilPrediksi, id_user,kotoran,bekatul,sekam, probiotik, hasil_kotoran, hasil_bekatul, hasil_sekam, hasil_probiotik) values (NULL, '".$_SESSION['id']."','".$kotor."','".$katul."','".$sk."','".$prb."','".$hasilkotoran."','".$hasilbekatul."','".$hasilsekam."','".$hasilprobiotik."');");
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
public static function tampilPetani(){
	$db=koneksi::getInstance();
	$id=$_SESSION['id'];
	$list=[];
	$req=$db->query("SELECT * from hasilprediksi  join user on hasilprediksi.id_user=user.id_user where hasilprediksi.id_user=$id order by hasilprediksi.id_hasilPrediksi desc");
	foreach ($req->fetchAll() as $posts) {
	$list[]=array(
		'id_hasilPrediksi' => $posts['id_hasilPrediksi'],
		'kotoran' => $posts['kotoran'],
		'hasil_kotoran' => $posts['hasil_kotoran'],
		'bekatul' => $posts['bekatul'],
		'hasil_bekatul' => $posts['hasil_bekatul'],
		'sekam' => $posts['sekam'],
		'hasil_sekam' => $posts['hasil_sekam'],
		'probiotik' => $posts['probiotik'],
		'hasil_probiotik' => $posts['hasil_probiotik']);
	}
	return $list;
}
public static function tampilAdmin(){
	$db=koneksi::getInstance();

	$list=[];
	$req=$db->query("SELECT * from hasilprediksi  join user on hasilprediksi.id_user=user.id_user");
	foreach ($req->fetchAll() as $posts) {
	$list[]=array(
		'id_hasilPrediksi' => $posts['id_hasilPrediksi'],
		'nama' => $posts['nama'],
		'kotoran' => $posts['kotoran'],
		'hasil_kotoran' => $posts['hasil_kotoran'],
		'bekatul' => $posts['bekatul'],
		'hasil_bekatul' => $posts['hasil_bekatul'],
		'sekam' => $posts['sekam'],
		'hasil_sekam' => $posts['hasil_sekam'],
		'probiotik' => $posts['probiotik'],
		'hasil_probiotik' => $posts['hasil_probiotik']);
	}
	return $list;
}}
?>