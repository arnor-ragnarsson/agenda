<?php
 session_start();

	include('functions.php');

//Tékkar hvort notandi sé skráður inn
// function loginCheck() {
// 	if($_SESSION['isLoggedin'] == false) {
// 		header('Location: ../admin/login.php');
// 	}
// }

// if($_GET['logout'] == 'true') {
// 	$_SESSION['isLoggedin'] = false;

	//Remove all session variables
	// session_unset();

	//Destroy the session
	// session_destroy();

$users = array(
	array(
		'Name' => 'Hugrún Björnsdóttir',
		'Email' => 'hugrun@agenda.is',
		'Username' => 'hugrun',
		'Password' => '123',
	), array(
		'Name' => 'Arnór Aðalsteinn Ragnarsson',
		'Email' => 'arnor@agenda.is',
		'Username' => 'arnor',
		'Password' => '456',
	), array(
		'Name' => 'Hermann Hafsteinsson',
		'Email' => 'hermann@agenda.is',
		'Username' => 'hermann',
		'Password' => '789',
	), array(
			'Name' => 'Admin',
			'Email' => 'admin@agenda.is',
			'Username' => 'admin',
			'Password' => '12345',
	));

define('LOGINERROR', 'Username or Password is Wrong', false);
define('LOGINEMPTY', 'Username or Password is Empty', false);

$navItems = array(
				array('Dashboard', 'dashboard.php'),
				array('Users', 'users.php'),
				array('Pages', 'pages.php'),
				array('Files', 'files.php')
				);

$userNavItems = array(
					array('Logout', 'login.php?logout=true')
				);

//Create navigation
function createNavigation($nav) {


	if($nav == 'mainNav') {

		$navArr = $GLOBALS['navItems'];
		$className = 'main';

	} elseif($nav == 'userNav') {
		$navArr = $GLOBALS['userNavItems'];
		$className = 'user';
	}

		echo '<ul class="'.$className.'-nav">';
		foreach ($navArr as $value) {
		echo '<li><a href="'.$value[1].'">'. $value[0] .'</a></li>';
	}

	echo '</ul>';

	}


?>
