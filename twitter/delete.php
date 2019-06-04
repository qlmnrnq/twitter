<?php
header('Location: http://tupoaihal/twitter/index.php');
 $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');

$query = mysqli_query($con, "DELETE FROM tweet WHERE id = '" . $_GET['id'] . "'");
echo "hello" . $_GET['id'] . "how are you";?>