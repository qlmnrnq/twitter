<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
	mysqli_query($con, "UPDATE tweet SET text = '" . $_POST['text'] . "' WHERE id='". $_POST['id'] ."'");
	header('Location: http://tupoaihal/twitter/');
	?>
