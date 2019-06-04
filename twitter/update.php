<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<form action="upd.php" method="POST">
<?php 
	echo '<input name="id" value="' . $_POST['id'] . '">';
	echo '<input name="text" value="' . $_POST['text'] . '">';
	echo '<button>Сохранить</button>'

 ?>
 </form>
