<?php


$nome = $_GET['nome'];
$sobreNome = $_GET['sobreNome'];
$dataReg = $_GET['dataReg'];
$email = $_GET['email'];
if (isset($_GET['submeter'])) {
	

$connection = mysqli_connect('localhost', 'root', '', 'controle');


if ($connection -> connect_error) {
 		die('connection failed'. $connection -> connect_error);
 	} else{
 		$db = $connection -> prepare("insert into clientes (nome, sobreNome, dataReg, email) values (?,?,?,?)");
 		$db -> bind_param('ssss', $nome, $sobreNome, $dataReg, $email);
 		$db -> execute();
 	}


$db -> close();
$connection -> close();
}

?>