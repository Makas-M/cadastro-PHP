<?php
require_once ('index.php');
$consulta = "SELECT * FROM clientes ORDER by id DESC";
$con = $connection -> query($consulta) or die($connection -> connect_error);

$result = $connection -> query($con);

print_r($result);

?>