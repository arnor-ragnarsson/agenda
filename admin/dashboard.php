<?php
	include('inc/config.php');
	include('inc/header.php');
	include('calendar.php');
?>

<h1>Dashboard</h1>

<?php createNavigation('mainNav'); ?>

<?php createNavigation('userNav'); ?>

<?php

$calendar = new Calendar();

echo $calendar->show();
?>

<?php include('inc/footer.php'); ?>
