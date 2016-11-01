<?php
  include('inc/config.php');
  if($_SESSION['isLoggedin'] == true && isset($_SESSION['userInfo'])) {
    header('Location: profile.php');
  } else {
    header('Location: about.php');
  }
