<?php
session_start();

$navItems = array(
  array('Signup', 'signup.php'),
  array('Login', 'login.php')
);

function navigation($navItems) {
  foreach ($navItems as $key => $value) {
    echo '<a href="'.$value[1].'"><li>'.$value[0].'</li></a>';
  }
}
 ?>
