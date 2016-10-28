<?php

include('inc/config.php');
include('inc/header.php')

?>

<h2>Pages síða</h2>

<!-- <table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
    </thead>
     <tbody>
        <?php
            foreach($pages as $key => $value) {
                echo '<tr>';
                echo '<td>'. $value['Title'] .'</td>';
                echo '<td>'. $value['Content'] .'</td>';
                echo '</tr>';
                }
        ?>
    </tbody>
</table> -->


<?php createNavigation('mainNav'); ?>

<?php createNavigation('userNav'); ?>
