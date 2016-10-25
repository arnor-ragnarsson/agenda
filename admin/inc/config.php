<?php
session_start();

	include('functions.php');

//Tékkar hvort notandi sé skráður inn
function loginCheck() {
	if($_SESSION['isLoggedin'] == false) {
		header('Location: ../admin/login.php');
	}
}

if($_GET['logout'] == 'true') {
	$_SESSION['isLoggedin'] = false;

	//Remove all session variables
	session_unset();

	//Destroy the session
	session_destroy();
}
$users = array(
	array(
		'Name' => 'Hugrún',
		'Email' => 'hugrun@agenda.is',
		'Username' => 'hugrun',
		'Password' => '123',
	), array(
		'Name' => 'Arnór',
		'Email' => 'arnor@agenda.is',
		'Username' => 'arnor',
		'Password' => '456',
	), array(
		'Name' => 'Hermann',
		'Email' => 'hermann@agenda.is',
		'Username' => 'hermann',
		'Password' => '789'
	));

define('LOGINERROR', 'Username or Password is wrong', false);
define('LOGINEMPTY', 'Username or Password is empty', false);

?>
