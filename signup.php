<?php
include('inc/config.php');
include('inc/header.php'); 
?>

<!-- signup form for users -->
<form class="" action="inc/authentication.php" method="post">
  <label for="firstName">First name:</label>
  <input type="firstName" name="firstName" value="Arnór">
  <label for="lastName">Last name:</label>
  <input type="lastName" name="lastName" value="Ragnarsson">
  <label for="email">Email:</label>
  <input type="email" name="email" value="arnorar@tmsoftware.is">
  <label for="username">Username:</label>
  <input type="username" name="username" value="admin">
  <label for="password">Password:</label>
  <input type="password" name="password" value="agenda">
  <button type="submit">Let's go!</button>
</form>



<?php include('inc/footer.php'); ?>
