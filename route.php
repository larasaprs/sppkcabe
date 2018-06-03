<?php
function call($controller,$action){
require_once('controller/'.$controller.'.php');

switch ($controller) {
	case 'home':
		$controller = new homeController();
		require_once('model/admin.php');
		require_once('model/faktor.php');
		require_once('model/perhitungan.php');
		break;
		case 'login':
		require_once('model/login.php');
		$controller= new loginController();
		break;
		case 'faktor':
			require_once('model/faktor.php');
			$controller=new faktorController();
			break;
			case 'hasilpupuk':
				require_once('model/hasilpupuk.php');
				$controller=new pupukController();
				break;
				case 'perhitungan':
				require_once('model/perhitungan.php');
				$controller= new perhitunganController();
				break;

	}
$controller->{$action}();
}
$controllers=array(
	'perhitungan' => ['hitungSN','hitungPrioritas','tampilPetani','tampilAdmin','hasil'],
	'home'=>['awal','adminHome','petaniHome','dataPetani','tambahPetani'],
	'login'=>['autentikasi'],
	'hasilpupuk' => ['tampilPupukPetani', 'tampilPupukAdmin','tambahPupuk'],
	'faktor'=>['tampilFaktor','tampilFaktorPetani','tambahFaktor','hapusFaktor','banyakFaktor','hasilPercobaan','levelKotoran','formtambahhasilpercobaan','ubahHasilPercobaan']);
	 if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller,$action);
        } else {
            call($controller,'error');
        }

    } else {
        call($controller,'error');
    }

?>