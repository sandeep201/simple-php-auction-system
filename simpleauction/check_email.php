<?php

/* CP2013 - Software Engineering
 * SimpleAuction Project
 * Written PHP & MySQL
 */
require('conf.php');

$email = $_REQUEST['email'];

$sql = "SELECT * FROM users WHERE user_Email='$email'";

$result = mysqli_query($connect, $sql);

$valid = mysqli_num_rows($result) == 0;

$count = mysqli_num_rows($result);

if ($count == 0) 
    echo "true";
else
    echo 'false';

?>
