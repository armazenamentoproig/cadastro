<?php

$servidor = "aws-sa-east-1.connect.psdb.cloud";
$usuario = "smwtjehkm3ky0z8zzbvj"; 			                               //Necessário inserir nome de usuario do Mysql entre aspas
$senha = "pscale_pw_b9NXLvxy1gtj3EJA7JrPitgv48QPwqeXjm03FzDKjH8";			//Necessário inserir senha de usuario utilizado do Mysql entre aspas
$dbname = "formulario";	//Informar o nome do banco de dados

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>
