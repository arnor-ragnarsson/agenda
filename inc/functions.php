<?php
// function to register new users into database
if(isset($_POST['create_username']) && !empty($_POST['create_username']) && isset($_POST['create_password']) && !empty($_POST['create_password'])) {
  $username = $_POST['create_username'];
  $password = $_POST['create_password'];
  $firstname = $_POST['create_firstname'];
  $lastname = $_POST['create_lastname'];
  $email = $_POST['create_email'];

  $user = new User();
  $user->createUsers($username, $password, $firstname, $lastname, $email);
}
 ?>
