<?php

$servidor = "aws-sa-east-1.connect.psdb.cloud";
$usuario = "hdybqc8evprjhf5k7pou"; 			                               //Necessário inserir nome de usuario do Mysql entre aspas
$senha = "pscale_pw_KPtKppMAuY2FMSFcSGmx68auXqViSE1NCqPVqYuAfj4";			//Necessário inserir senha de usuario utilizado do Mysql entre aspas
$dbname = "formulario";	//Informar o nome do banco de dados

//Criar a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>
