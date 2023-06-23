<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$data_nascimento = $_POST["data"];
$tipo = $_POST["tipo"];
$sql = "insert into t_usuario(nome,cidade,estado,data_nascimento,tipo) values('$nome','$cidade','$estado','$data_nascimento','$tipo')";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>