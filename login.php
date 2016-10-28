<?php
include('inc/config.php');
include('inc/header.php'); ?>

<!-- Login form for users -->
<form class="agenda__login__form" method="post">
  <label for="user_username">Username:</label>
  <input type="username" name="user_username" value="aar">
  <label for="user_password">Password:</label>
  <input type="password" name="user_password" value="aar123">
  <button type="submit">Let's go!</button>
</form>

<?php if(isset($_GET['login']) and $_GET['login'] == 'denied' || $_GET['login'] == 'empty') : ?>
  <?php if($_GET['login'] == 'denied') : ?>
    <?php echo LOGINERROR; ?>
  <?php elseif($_GET['login'] == 'empty') : ?>
    <?php echo LOGINEMPTY; ?>
  <?php endif; ?>
<?php endif; ?>

<p>
  not a member? you can <a href="./signup.php">signup here</a>
</p>


<?php include('inc/footer.php'); ?>
