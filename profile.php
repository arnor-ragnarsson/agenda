<?php
  include('inc/config.php');
  loginCheck();
  include('inc/header.php');
  // User profile page, from this page you can create new project that has tasks and teams. also here you can edit your account information.
?>

<?php userNav($userNavItems); ?>
<h1>PROFILE</h1>
<?php echo '<h2>Welcome '.$userinfo['firstname'].' '.$userinfo['lastname'].'</h2>';?>





<?php   include('inc/footer.php'); ?>
