<?php

include('inc/config.php');

if($_SESSION['isLoggedin'] == true) {

	header('Location: dashboard.php');

} else {

	header('Location: login.php');

}


?>
