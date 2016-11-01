<?php
  include('inc/config.php');
<<<<<<< HEAD
  if($_SESSION['isLoggedin'] == true && isset($_SESSION['userInfo'])) {
=======
  if($_SESSION['isLoggedin'] == true) {
>>>>>>> master
    header('Location: profile.php');
  } else {
    header('Location: about.php');
  }
