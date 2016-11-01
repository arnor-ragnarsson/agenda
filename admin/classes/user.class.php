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

  public function getAllUsers() {
    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();
    //prepare and bind
    $stmt = $mysqli->prepare("SELECT user_id, username, first_name, last_name, email FROM users");
    $stmt->execute();
    //$stmt ->bind_param('issssi', $user_id, $username, $firstname, $lastname, $email, $status );
    $stmt->bind_result($user_id, $username, $firstname, $lastname, $email);
    while($stmt->fetch()) {
      $user = array();
      $user['userId'] = $user_id;
      $user['username'] = $username;
      $user['firstname'] = $firstname;
      $user['lastname'] = $lastname;
      $user['email'] = $email;

        echo "<tr><td>" . $user['userId']. "</td><td>" . $user['firstname']. " " . $user['lastname']. "</td><td>". $user['email']."</td><td>". $user['username'].'</tr>';
    }
    
    $stmt->close();
  }

}
 ?>
