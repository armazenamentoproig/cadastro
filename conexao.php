<?php

$servidor = "localhost";
$usuario = ""; 			//Necessário inserir nome de usuario do Mysql entre aspas
$senha = "";			//Necessário inserir senha de usuario utilizado do Mysql entre aspas
$dbname = "DBcadUsuario";	//Informar o nome do banco de dados

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>
