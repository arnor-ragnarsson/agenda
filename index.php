<?php
  include('inc/config.php');
  if($_SESSION['isLoggedin'] == true) {
    header('Location: profile.php');
  } else {
    header('Location: about.php');
  }
