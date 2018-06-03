<?php

class loginModel{
	public function login($username,$password){
		$db = koneksi::getInstance();
		$req=$db->prepare('SELECT * FROM user where username=:username and password = :password');
		$req->execute(array('username'=>$username,'password'=>$password));
		$auth=$req->fetch();
		   if (count($auth) > 1) {
            return $auth['level'];//return dari DB
        } else {
            return "no-user";
        }
        foreach ($req->fetchAll() as $hasilnya) {
        	$hasil= array(
        		'username' => $hasilnya['username'],
        		'password' => $hasilnya['password']);
        }
        return $hasil;
	}
}
?>