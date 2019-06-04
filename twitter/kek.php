<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
$query = mysqli_query($con, "INSERT INTO tweet (logo, title, text, img) VALUES ('avatar.jpg', 'привет', '" . $_POST['text'] . "', 'background.jpg')");


header('Location: http://tupoaihal/twitter/');

 ?>