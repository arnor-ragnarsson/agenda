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
                      array($GLOBALS['userinfo']['firstname'], 'profile.php'),
                    );
       userNav($userNavItems);
     }?>
