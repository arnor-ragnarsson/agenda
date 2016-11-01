<?php
  include('inc/config.php');
  loginCheck();
  include('inc/header.php');

  // this is a page you enter when you have completed signup. a button will lead you to your profile page.
?>
<h1>thank you for signing up to our awesome task management system.</h1>
<a href="./profile.php"><button>Go to my profile</button></a>
<?php   include('inc/footer.php'); ?>
