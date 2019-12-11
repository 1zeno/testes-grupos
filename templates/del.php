<?php
	include 'db.php';



	$sql = "SELECT * FROM cliente";

?>
<?php

	$id = $_GET['id'];
	$sql = mysqli_query($conexao, "DELETE FROM cliente WHERE id=".$id);
	header("Location: http://localhost/prova/templates/lista.php");

?>
