<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";

$conexao   = new MySQLi($host, $user, $pass, $banco );
if($conexao  ->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}  

?>


