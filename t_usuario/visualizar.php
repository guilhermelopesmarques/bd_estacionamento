<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$cidade = "";
$estado = "";
$data_nascimento = "";
$tipo = "";
$sql = "select * from t_usuario where id = $id";
$todos_os_usuarios = mysqli_query($conexao, $sql);
while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):
    $nome = $um_usuario["nome"];
    $cidade = $um_usuario["cidade"];
    $estado = $um_usuario["estado"];
    $data_nascimento = $um_usuario["data_nascimento"];
    $tipo = $um_usuario["tipo"];
endwhile;
?>
<h1>Ficha Do Usuario</h1>
Nome: <?php echo $nome ; ?><br>
Cidade: <?php echo $cidade ; ?><br>
Estado: <?php echo $estado ; ?><br>
Data De Nascimento: <?php echo $data_nascimento ; ?><br>
Tipo: <?php echo $tipo ; ?><br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>