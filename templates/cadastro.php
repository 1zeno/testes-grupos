<?php
// include
	include 'db.php';
	include 'colecionador_mock.php';

	var_dump($_POST);
	//criando grupo no banco de dados.
	if (isset($_POST['nome'])){
		echo "socorro";
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$administrador = $_POST['administrador'];
		$data_de_criacao = date("Y-m-d"); 

		
		$sql = mysqli_prepare($conexao, "INSERT INTO grupo(nome, descricao, data_de_criacao, colecionador_administrador) VALUES (?, ?, ?, ?)");
		mysqli_stmt_bind_param($sql, 'ssss', $nome, $descricao, $data_de_criacao, $administrador);

		mysqli_stmt_execute($sql);

		
		
		
		//header("Location: http://localhost/crud/templates/lista.php");
		echo '<h1>CADASTRADO COM SUCESSO!</h1>';
	}
	

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
						<td>Descrição:</td>
						<td><input type="text" name="descricao"></td>
					</tr>
					<tr>
						<td>Administrador:</td>
						<td>
							<select name="administrador">
							<?php
								for($i = 0; $i < count($colecionadores); $i++){

									$c = strval($colecionadores[$i]);
									echo "<option value=$c>$colecionadores[$i]</option>";
									}
									
							?>
							</select>
						</td>
					</tr>
				</table>
				<input type="submit" value="Salvar">
			</form>


		<a href="../index.php"><input type="submit" value="voltar"></a>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>