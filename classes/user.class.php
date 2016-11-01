<?php
include('./inc/authentication.php');
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
    if ($stmt->num_rows > 0) {
      while($row = $stmt->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>". $row["email"]."</td><td>". $row["username"];
        
        echo '</tr>';
      }
    } else {
      echo "0 results";
    }
    $stmt->close();
  }

}
 ?>
