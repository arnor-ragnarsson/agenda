<?php
include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

function loginUserCheck($username, $password, $users) {
	foreach($users as $key => $value) {
		if($username == $value['Username'] && $password == $value['Password']) {
			$_SESSION['isLoggedin'] = true;
			header('Location: ../dashboard.php');
			break;
		} else {
			$_SESSION['isLoggedin'] = false;
			header('Location: ../login.php?login=denied');
		}
	}
}

//Ef username og password er tómt
if($username != '' and $password != '') {
	loginUserCheck($username, $password, $users);
} else {
	$_SESSION['isLoggedin'] = false;
	header('Location: ../login.php?login=empty');
}
?>
