<?php
	include('inc/config.php');
	loginCheck();
	include('inc/header.php');
?>

<h1>Dashboard</h1>

<p>Í dag er</p>
<?php echo date("d.m.Y"); ?>
