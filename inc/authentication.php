<?php



function loginUserCheck($user_username, $user_password) {
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $stmt = $mysqli->prepare('SELECT user_id, username, password FROM users');
  $stmt->execute();
  $stmt->bind_result($_userId, $_username, $_password);

  while ($stmt->fetch()) {
    if($user_username == $_username && $user_password == $_password) {
      $_SESSION['isLoggedin'] = true;

      $_SESSION['userInfo'] = $_userId;
      header('Location: profile.php');
      break;
    } else {
      $_SESSION['isLoggedin'] = false;
      header('Location: login.php?login=denied');
    }
  }
  $stmt->close();
  $mysqli->close();
}

if(isset($_POST['user_username']) && !empty($_POST['user_username']) && isset($_POST['user_password']) && !empty($_POST['user_password'])) {
  $user_username = $_POST['user_username'];
  $user_password = $_POST['user_password'];

  loginUserCheck($user_username, $user_password);
}


 ?>
