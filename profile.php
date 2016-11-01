<?php
  include('inc/config.php');
  loginCheck();
  include('inc/header.php');
  // User profile page, from this page you can create new project that has tasks and teams. also here you can edit your account information.
?>

<?php echo '<h2>Welcome '.$GLOBALS['userinfo']['firstname'].' '.$GLOBALS['userinfo']['lastname'].'</h2>';?>


<?php   include('inc/footer.php'); ?>
