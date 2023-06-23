<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$nome = "";
$sql = "select * from t_usuario where id = $id";
$todos_os_usuarios = mysqli_query($conexao,$sql);
while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):
$nome = $um_usuario["nome"];
endwhile;
?>
<h1>Editar Usuario <?php echo $id ; ?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    Nome: <input name="nome" value="<?php echo $nome;?>"><br>
    <button type="submit">atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>