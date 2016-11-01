<?php

include('inc/config.php');
include('inc/header.php')

?>

<h2>Users síða</h2>

<?php

// $allUsers = getAllUsers($link);
// var_dump($allUsers);

?>



<table class="table table-striped table-condensed">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
        </tr>
    </thead>
     <tbody>
        <?php
            foreach($users as $key => $value) {
                echo '<tr>';
                echo '<td>'. $value['Name'] .'</td>';
                echo '<td>'. $value['Email'] .'</td>';
                echo '<td>'. $value['Username'] .'</td>';
                echo '</tr>';
                }
        ?>
    </tbody>
</table>

<?php createNavigation('mainNav'); ?>

<?php createNavigation('userNav'); ?>
<h2>users</h2>
<?php
  echo '<table>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        </tr>';
  echo getUsers();
  echo '</table>';?>
