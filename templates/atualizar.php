<?php
	include 'db.php';
	
	$sql = "SELECT * FROM cliente WHERE id=$_GET[id]";
	
  	$con = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Atualizar Cliente</title>
	</head>
	<body>
		<h1>Atualizar Cliente</h1>
		<hr>
			<form method="post" action="">
				<?php if($dados = mysqli_fetch_array($con)) { ?>
				<table>
					<tr>
						<td>Nome:</td>
						<td><input type="text" name="nome" value=<?php echo $dados['nome']; ?>></td>
					</tr>
					<tr>
						<td>Rua:</td>
						<td><input type="text" name="rua" value=<?php echo $dados['rua']; ?>></td>
					</tr>
					<tr>
						<td>Número:</td>
						<td><input type="text" name="numero" value=<?php echo $dados['numero']; ?>></td>
					</tr>
					<tr>
						<td>Bairro:</td>
						<td><input type="text" name="bairro" value=<?php echo $dados['bairro']; ?>></td>
					</tr>
					<tr>
						<td>Cidade:</td>
						<td><input type="text" name="cidade" value=<?php echo $dados['cidade']; ?>></td>
					</tr>
					<tr>
						<td>UF:</td>
						<td><input type="text" name="estado" value=<?php echo $dados['estado']; ?>></td>
					</tr>
					<tr>
						<td>Complemento:</td>
						<td><input type="text" name="complemento" value=<?php echo $dados['complemento']; ?>></td>
					</tr>
					<tr>
						<td>Telefone:</td>
						<td><input type="text" name="fone" value=<?php echo $dados['fone']; ?>></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" value=<?php echo $dados['email']; ?>></td>
					</tr>
				</table>

				<?php
					if(!empty($_POST['nome'])){
						$nome 	= $_POST['nome'];
						$rua 	= $_POST['rua'];
						$numero = $_POST['numero'];
						$bairro = $_POST['bairro'];
						$cidade = $_POST['cidade'];
						$estado 	= $_POST['estado'];
						$complemento = $_POST['complemento'];
						$fone 	= $_POST['fone'];
						$email 	= $_POST['email'];

						$id = $_GET['id'];
						$sql = mysqli_query($conexao,"UPDATE cliente SET nome='$nome', rua='$rua', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$estado', complemento='$complemento', fone='$fone', email='$email' WHERE id=".$id);
						header("Location: http://localhost/crud/templates/lista.php");
				}
				?>
				
				
				<input type="submit" value="Atualizar">
				<?php } ?>
			</form>
		<a href="lista.php"><input type="submit" value="voltar"></a>
	</body>
</html>