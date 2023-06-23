<?php
include "../includes/conexao.php";

$id = $_GET["id"];

$nome = $_POST["nome"];
$sql = "update t_usuario set nome = '$nome' where id =$id";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>
