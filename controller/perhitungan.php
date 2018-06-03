<?php 
class perhitunganController{
var$optProbiotik;
	public static function hitungSN(){
		$posts=perhitunganModel::hitungSN();
		
		$jumlaha1=0; $jumlaha2=0; $jumlaha3=0;
$jumlah=[];
		$jumlahb1=0; $jumlahb2=0; $jumlahb3=0;
		$jumlahc1=0; $jumlahc2=0; $jumlahc3=0;
		$jumlahd1=0; $jumlahd2=0; $jumlahd3=0;
		
		foreach ($posts as $key => $post) {
			
			if ($key<=2) {
				$jumlaha1+=$post['SN']; 
				}
			else if ($key>2 && $key<6) {
				$jumlaha2 +=$post['SN'];
			}
			else{
				$jumlaha3+=$post['SN'];
			}
			if ($key==0 || $key==3 || $key==6) {
			$jumlahb1+=$post['SN'];
			}
			elseif ($key==1 || $key==4 || $key==7) {
				$jumlahb2+=$post['SN'];
			}
			else{
				$jumlahb3+=$post['SN'];
			}
			if ($key==0 || $key==5 || $key==7) {
				$jumlahc1+=$post['SN'];
			

			}
			elseif ($key==1 || $key==3 || $key==8) {
				$jumlahc2+=$post['SN'];
			}
			else{
				$jumlahc3+=$post['SN'];
			}
			if ($key==0 || $key==4 || $key==8) {
				$jumlahd1+=$post['SN'];
			}
			elseif ($key==1 || $key==5 || $key==6) {
				$jumlahd2+=$post['SN'];
			}
			else{
				$jumlahd3+=$post['SN'];
			}}
			$jumlaha1/=3; $jumlaha2/=3; $jumlaha3/=3; 
			$jumlahb1/=3; $jumlahb2/=3; $jumlahb3/=3;
			$jumlahc1/=3; $jumlahc2/=3; $jumlahc3/=3;
			$jumlahd1/=3; $jumlahd2/=3; $jumlahd3/=3;
			//-------------------------------------------------------------
			$maxA;
			$minA;
			if ($jumlaha1>$jumlaha2) {
				if ($jumlaha1>$jumlaha3) {
					$maxA=$jumlaha1;
				}
				else{
					$maxA=$jumlaha3;
				}
				if ($jumlaha2>$jumlaha3) {
					$minA=$jumlaha3;
				}
				else{
					$minA=$jumlaha2;
				}
			}
			elseif ($jumlaha2>$jumlaha3) {
				$maxA=$jumlaha2;
				$minA=$jumlaha1;
			}
			else{
				$maxA=$jumlaha3;
				$minA=$jumlaha1;
			}
			$deltaA=$maxA-$minA;
			//--------------------------------------------
			$maxB; $minB;
			if ($jumlahb1>$jumlahb2) {
				if ($jumlahb1>$jumlahb3) {
					$maxB=$jumlahb1;
				}
				else{
					$maxB=$jumlahb3;
				}
				if ($jumlahb2>$jumlahb3) {
					$minB=$jumlahb3;
				}
				else{
					$minB=$jumlahb2;
				}
			}
			elseif ($jumlahb2>$jumlahb3) {
				$maxB=$jumlahb2;
				$minB=$jumlahb1;
			}
			else{
				$maxB=$jumlahb3;
				$minB=$jumlahb1;
			}
			$deltaB=$maxB-$minB;
			//-----------------------------------------------------------
			$maxC; $minC;
			if ($jumlahc1>$jumlahc2) {
				if ($jumlahc1>$jumlahc3) {
					$maxC=$jumlahc1;
				}
				else{
					$maxC=$jumlahc3;
				}
				if ($jumlahc2>$jumlahc3) {
					$minC=$jumlahc3;
				}
				else{
					$minC=$jumlahc2;
				}
			}
			elseif ($jumlahc2>$jumlahc3) {
				$maxC=$jumlahc2;
				$minC=$jumlahc1;
			}
			else{
				$maxC=$jumlahc3;
				$minC=$jumlahc1;
			}
			$deltaC=$maxC-$minC;
			//-----------------------------------------------------------
			$maxD; $minD;
			if ($jumlahd1>$jumlahd2) {
				if ($jumlahd1>$jumlahd3) {
					$maxD=$jumlahd1;
				}
				else{
					$maxD=$jumlahd3;
				}
				if ($jumlahd2>$jumlahd3) {
					$minD=$jumlahd3;
				}
				else{
					$minD=$jumlahd2;
				}
			}
			elseif ($jumlahd2>$jumlahd3) {
				$maxD=$jumlahd2;
				$minD=$jumlahd1;
			}
			else{
				$maxD=$jumlahd3;
				$minD=$jumlahd1;
			}
			$deltaD=$maxD-$minD;
			//--------------------------------------------------------------------
			if ($deltaA>$deltaB) {
				if ($deltaA>$deltaC) {
					if ($deltaA>$deltaD) {
						$prior1="Kotoran Kelinci";
					}
					else{
						$prior1="Probiotik EM4";
					}
					
				}
			}
			$kotoran=perhitunganModel::levelkotoran();
			$minKotor=0;

			foreach($kotoran as $kotor){
				
				if ($jumlaha1<$jumlaha2) {//SN tiap faktor trhp level
					if ($jumlaha1<$jumlaha3) {
						$optKotor=$kotor['level_1'];
					}
					else{
						$optKotor=$kotor['level_3'];

					}
				}
				elseif ($jumlaha2<$jumlaha3) {
				$optKotor=$kotor['level_2'];
				}
				else{
					$optKotor=$kotor['level_3'];

				}
				}
//-----------------------------------------------------------------
				$bekatul = perhitunganModel::levelbekatul();
				foreach($bekatul as $b){
				
				if ($jumlahb1<$jumlahb2) {
					if ($jumlahb1<$jumlahb3) {
						$optBekatul=$b['level_1'];
					}
					else{
						$optBekatul=$b['level_3'];

					}
				}
				elseif ($jumlahb2<$jumlahb3) {
				$optBekatul=$b['level_2'];
				}
				else{
					$optBekatul=$b['level_3'];

				}
				}
			
//-------------------------------------------------------------------------

				$sekam = perhitunganModel::levelsekam();
				foreach($sekam as $s){
				
				if ($jumlahc1<$jumlahc2) {
					if ($jumlahc1<$jumlahc3) {
						$optSekam=$s['level_1'];
					}
					else{
						$optSekam=$s['level_3'];

					}
				}
				elseif ($jumlahc2<$jumlahc3) {
				$optSekam=$s['level_2'];
				}
				else{
					$optSekam=$s['level_3'];

				}
				}
//-------------------------------------------------------------------------


				$probiotik = perhitunganModel::levelprobiotik();
				foreach($probiotik as $p){
				
				if ($jumlahd1<$jumlahd2) {
					if ($jumlahd1<$jumlahd3) {
						$optProbiotik=$p['level_1'];
					}
					else{
						$optProbiotik=$p['level_3'];

					}
				}
				elseif ($jumlahd2<$jumlahd3) {
				$optProbiotik=$p['level_2'];
				}
				else{
					$optProbiotik=$p['level_3'];

				}
				}

		if ($_SESSION['level']=='Admin') {
			require_once('view/perhitungan.php');
		}
		else{
			if($_GET['kotoran']==$optKotor && $_GET['bekatul']==$optBekatul && $_GET['sekam']==$optSekam && $_GET['probiotik']==$optProbiotik){
				$hasilkotoran="OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif($_GET['bekatul']==$optBekatul && $_GET['sekam']==$optSekam && $_GET['probiotik']==$optProbiotik){
				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif($_GET['sekam']==$optSekam && $_GET['probiotik']==$optProbiotik){
$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif($_GET['probiotik']==$optProbiotik){
				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif($_GET['kotoran']==$optKotor && $_GET['bekatul']==$optBekatul && $_GET['sekam']==$optSekam){
					$hasilkotoran="OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";
			}
			elseif ($_GET['kotoran']==$optKotor && $_GET['bekatul']==$optBekatul) {
				$hasilkotoran="OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";
			}
			elseif($_GET['kotoran']==$optKotor){
				$hasilkotoran="OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";
			}
			elseif($_GET['sekam']==$optSekam){

				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";

			}
			elseif($_GET['kotoran']==$optKotor && $_GET['sekam']==$optSekam ){
				$hasilkotoran="OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";

			}
			elseif ($_GET['bekatul']==$optBekatul && $_GET['probiotik']==$optProbiotik) {
				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif($_GET['kotoran']==$optKotor && $_GET['probiotik']==$optProbiotik ){
	$hasilkotoran="OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif ($_GET['sekam']==$optSekam && $_GET['bekatul']==$optBekatul) {
				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			
			elseif ($_GET['kotoran']==$optKotor || $_GET['bekatul']==$optBekatul || $_GET['probiotik']==$optProbiotik) {
			
				$hasilkotoran="OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}

			elseif ($_GET['kotoran']==$optKotor || $_GET['sekam']==$optSekam || $_GET['probiotik']==$optProbiotik  ) {
				$hasilkotoran="OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="OPTIMAL";
							$hasilprobiotik="OPTIMAL";
			}
			elseif ($_GET['bekatul']==$optBekatul) {
				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";
			}
			else{
				$hasilkotoran="KURANG OPTIMAL";
							$hasilbekatul="KURANG OPTIMAL";
							$hasilsekam="KURANG OPTIMAL";
							$hasilprobiotik="KURANG OPTIMAL";
			}
			
			$tambah=perhitunganModel::tambahPrediksi($_GET['kotoran'],$_GET['bekatul'],$_GET['sekam'],$_GET['probiotik'], $hasilkotoran, $hasilbekatul, $hasilsekam, $hasilprobiotik);
			header("Location:index.php?controller=perhitungan&action=tampilPetani");




			}

			
		}
		public static function hasil($kotoran,$bekatul, $sekam, $probiotik){
			$posts=perhitunganModel::hasil($kotoran,$bekatul, $sekam, $probiotik);
			require_once('view/hasil.php');
		}
		public static function tampilPetani(){
			$posts=perhitunganModel::tampilPetani();
			require_once('view/prediksipetani.php');
			}
		
		public static function tampilAdmin(){
			$posts=perhitunganModel::tampilAdmin();
			require_once('view/prediksiadmin.php');
		}
	}
		



?>