<?php

session_start();

require_once('koneksi.php');
 if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'home';
    $action = 'awal';
}
require_once('route.php');

?>