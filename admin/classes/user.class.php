<?php
class User {

  public function __construct() {
  }

  public function createUsers($username, $password, $firstname, $lastname, $email) {
    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

    $stmt = $mysqli->prepare('INSERT INTO users(username, password, first_name, last_name, email) VALUES(?, ?, ?, ?, ?)');
    $stmt->bind_param("sssss", $username, $password, $firstname, $lastname, $email);
    $stmt->execute();

    $stmt->close();

    loginUserCheck($username, $password);
    header('Location: ./thankyou.php');
  }
}
 ?>
