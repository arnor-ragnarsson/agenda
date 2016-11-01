<?php
session_start();

include('./classes/classes.php');
include('functions.php');
include('authentication.php');

// prevent user access when logged out
function loginCheck() {
    if($_SESSION['isLoggedin'] == false) {
      header('Location: about.php');
    }
  }


// log out user
  if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $_SESSION['isLoggedin'] = false;
  }

//define login errors
  define('LOGINERROR', 'Username or password is wrong.', false);
  define('LOGINEMPTY', 'Username or password is empty.', false);

  //store user information
  function getUserInfo() {
    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();
    $stmt = $mysqli->prepare('SELECT username, first_name, last_name, email FROM users WHERE user_id = '.$_SESSION['userInfo']);
    $stmt->execute();
    $stmt->bind_result($_username, $_firstname, $_lastname, $_email);
    while ($stmt->fetch()) {
      $getInfo = array();
      $getInfo['username'] = $_username;
      $getInfo['firstname'] = $_firstname;
      $getInfo['lastname'] = $_lastname;
      $getInfo['email'] = $_email;
    }

    $stmt->close();

    return $getInfo;
  }


    $userinfo = getUserInfo();



// signup login buttons
$navItems = array(array('Signup', 'signup.php'),
                  array('Login', 'login.php')
);

// header navigation when you are logged out
function loginNav($navItems) {
  echo '<div class="agenda__about__header"><ul>';
  foreach ($navItems as $key => $value) {
    echo '<a href="'.$value[1].'"><li>'.$value[0].'</li></a>';
  }
  echo '</ul></div>';
}

// header navigation for when you are logged in
function userNav($userNavItems) {
  echo '<div class="agenda__profile__header"><ul>';
  foreach ($userNavItems as $key => $value) {
    echo '<a href="'.$value[1].'"><li>'.$value[0].'</li></a>';
  }
  echo '</ul></div>';
}


 ?>
