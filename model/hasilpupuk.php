<?php 

class pupukModel{
		public static function tampilPupukPetani($id){
			$list=[];
			$db=koneksi::getInstance();
			$query=$db->query("SELECT hasilpupuk.id_pupuk, hasilpupuk.kotoran, hasilpupuk.bekatul,hasilpupuk.sekam, hasilpupuk.probiotik, hasilpupuk.hasil, user.nama from hasilpupuk  join user on hasilpupuk.id_user=user.id_user where hasilpupuk.id_user='$id'");
			foreach($query->fetchAll() as $posts){
				$list[]=array(
					'id_pupuk'=>$posts['id_pupuk'],
					'nama' =>$posts['nama'],
					'kotoran' => $posts['kotoran'],
			'bekatul' => $posts['bekatul'],
			'sekam' => $posts['sekam'],
			'probiotik'=> $posts['probiotik'],
			'hasil'=>$posts['hasil']);
			}
			return $list;
		
	}
		public static function tampilPupukAdmin(){
			$list=[];
			$db=koneksi::getInstance();
			$query=$db->query("SELECT hasilpupuk.id_pupuk, hasilpupuk.kotoran, hasilpupuk.bekatul,hasilpupuk.sekam, hasilpupuk.probiotik, hasilpupuk.hasil, user.nama from hasilpupuk  join user on hasilpupuk.id_user=user.id_user");
			foreach($query->fetchAll() as $posts){
				$list[]=array(
					'id_pupuk'=>$posts['id_pupuk'],
					'nama' =>$posts['nama'],
					'kotoran' => $posts['kotoran'],
			'bekatul' => $posts['bekatul'],
			'sekam' => $posts['sekam'],
			'probiotik'=> $posts['probiotik'],
			'hasil'=>$posts['hasil']);
			}
			return $list;
		
	}
	public static function tambahPupuk($id,$kotoran,$bekatul,$sekam,$probiotik,$hasil){
		$db =koneksi::getInstance();
			
			$req = $db->query("INSERT INTO hasilpupuk (id_pupuk,id_user, kotoran, bekatul,sekam,probiotik,hasil) 
				VALUES (NULL, '".$_SESSION['id']."', '".$kotoran."','".$bekatul."','".$sekam."','".$probiotik."','".$hasil."');");

			

			return $req;
	}
}
?>