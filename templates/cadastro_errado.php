<?php
	include 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CADASTRO</title>
  </head>
  <body>
  <h1>Cadastro de Clientes</h1>
		<hr>
			<form method="post" action="">
				<table>
					<tr>
						<td>Nome:</td>
						<td><input type="text" name="nome"></td>
					</tr>
					<tr>
						<td>Rua:</td>
						<td><input type="text" name="rua"></td>
					</tr>
					<tr>
						<td>Número:</td>
						<td><input type="text" name="numero"></td>
					</tr>
					<tr>
						<td>Bairro:</td>
						<td><input type="text" name="bairro"></td>
					</tr>
					<tr>
						<td>Cidade:</td>
						<td><input type="text" name="cidade"></td>
					</tr>
					<tr>
						<td>UF:</td>
						<td><input type="text" name="estado"></td>
					</tr>
					<tr>
						<td>Complemento:</td>
						<td><input type="text" name="complemento"></td>
					</tr>
					<tr>
						<td>Telefone:</td>
						<td><input type="text" name="fone"></td>
					</tr>
					<tr>
						<td>CPF:</td>
						<td><input type="text" name="cpf"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email"></td>
					</tr>
				</table>
				<input type="submit" value="Salvar">
			</form>

			<?php //inserindo as informações do cliente no banco de dados.
				if (!empty($_POST['nome'])and($_POST['rua'])and($_POST['numero'])and($_POST['bairro'])and($_POST['cidade'])and($_POST['estado'])and($_POST['fone'])and($_POST['cpf'])and($_POST['email'])){
					$nome 	= $_POST['nome'];
					$rua 	= $_POST['rua'];
					$numero = $_POST['numero'];
					$bairro = $_POST['bairro'];
					$cidade = $_POST['cidade'];
					$estado 	= $_POST['estado'];
					$complemento = $_POST['complemento'];
					$fone 	= $_POST['fone'];
					$cpf 	= $_POST['cpf'];
					$email 	= $_POST['email'];

					$erro = 0;


					$sql = mysqli_query($conexao,"INSERT INTO cliente(nome, rua, numero, bairro, cidade, estado, complemento, fone, cpf, email)
					VALUES('$nome','$rua', '$numero', '$bairro', '$cidade', '$estado', '$complemento', '$fone', '$cpf', '$email')");
					//header("Location: http://localhost/crud/templates/lista.php");
					echo '<h1>CADASTRADO COM SUCESSO!</h1>';
				}
				// $sql = mysql_query("DELETE FROM cliente WHERE id > 2");
			?>

		<a href="../index.php"><input type="submit" value="voltar"></a>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>