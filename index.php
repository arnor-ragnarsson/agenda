<?php
  include('inc/config.php');
  if($isLoggedIn) {
    header('Location: profile.php');
  } else {
    header('Location: about.php');
  }
