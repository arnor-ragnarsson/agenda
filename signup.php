<?php
include('inc/config.php');
include('inc/header.php');
?>

<!-- signup form for users -->
<form class="agenda__signup__form" method="post">
  <label for="create_username">Username:</label>
  <input type="username" name="create_username">
  <label for="create_password">Password:</label>
  <input type="password" name="create_password">
  <label for="create_firstname">First name:</label>
  <input type="firstname" name="create_firstname">
  <label for="create_lastname">Last name:</label>
  <input type="lastname" name="create_lastname">
  <label for="create_email">Email:</label>
  <input type="email" name="create_email">
  <button type="submit">Let's go!</button>
</form>

<p>
  already a member? you can <a href="./login.php">login here</a>
</p>



<?php include('inc/footer.php'); ?>
