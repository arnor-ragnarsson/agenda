<?php
class User {
  private $_db;
  private $_mysqli;

  public function __construct() {
  }

  public function createUsers($username, $password, $firstname, $lastname, $email) {
    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

    $stmt = $mysqli->prepare('INSERT INTO users(username, password, first_name, last_name, email) VALUES(?, ?, ?, ?, ?)');
    $stmt->bind_param("sssss", $username, $password, $firstname, $lastname, $email);

    $stmt->execute();

    $stmt->close();
    $_SESSION['isLoggedin'] = true;
    header('Location: ./thankyou.php');
  }
}
 ?>
