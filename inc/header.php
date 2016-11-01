<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php
    if($_SESSION['isLoggedin'] == true) {
      $userNavItems = array(
                      array('Logout', 'about.php?logout=true'),
<<<<<<< HEAD
                      array($userinfo['firstname'], 'profile.php'),
=======
                      array($GLOBALS['userinfo']['firstname'], 'profile.php'),
>>>>>>> master
                    );
       userNav($userNavItems);
     }?>
