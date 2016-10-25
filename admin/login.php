<?php

include('inc/config.php');
include('inc/header.php');

?>

<?php if(isset($_GET['login']) and $_GET['login'] == 'denied' || $_GET['login'] == 'empty' ) : ?>

	<div class="alert alert-danger" role="alert">
		<?php if($_GET['login'] == 'denied') : ?>

			<?php echo LOGINERROR; ?>

		<?php elseif($_GET['login'] == 'empty') : ?>

			<?php echo LOGINEMPTY; ?>

		<?php endif; ?>
	</div>

<?php endif; ?>

<h1>Login</h1>

<form action="dashboard.php" method="post">
	<label for="username">Username</label>
	<input type="text" name="username">

	<label for="password">Password</label>
	<input type="text" name="password">

	<input type="submit" value="Login">
</form>


<?php include('inc/footer.php'); ?>
