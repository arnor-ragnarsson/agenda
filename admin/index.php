<?php

include('inc/config.php');

if($isLoggedin) {

	header('Location: dashboard.php');

} else {

	header('Location: login.php');

}


?>


<?php include ("inc/footer.php"); ?>
