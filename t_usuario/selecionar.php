<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php"
?>
<h1>Módulo de Usuario</h1>
<p>
<a href="novo.php">Adicionar Usuarios</a>
</p>
<h2>Listagem de Usuarios</h2>
<table class="table table-dark table-striped">
    <tr class="text-center">
        <td>ID</td>
        <td>Nome</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>Data_Nascimento</td>
        <td>Tipo</td>
        <td>Config</td>
    </tr>


<?php
$sql = "select * from t_usuario";
$todos_os_usuarios = mysqli_query($conexao, $sql);
while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):
?>
    <tr>
        <td><?php echo $um_usuario['id'] ?></td>
        <td><?php echo $um_usuario['nome'] ?></td>
        <td><?php echo $um_usuario['cidade'] ?></td>
        <td><?php echo $um_usuario['estado'] ?></td>
        <td><?php echo $um_usuario['data_nascimento'] ?></td>
        <td><?php echo $um_usuario['tipo'] ?></td>
    

    <td>
        <a href="visualizar.php?id=<?php echo $um_usuario['id']; ?>" title="Ver Completo">visualizar</a>
        <a href="editar.php?id=<?php echo $um_usuario['id'];?>" title="Editar">Editar</a>
        <a href="../t_usuario/excluir.php?id=<?php echo $um_usuario['id'];?>" title="Excluir Aluno">Excluir</a>
    </td>
    </tr>
    <?php
    endwhile;    
    ?>
</table>

<?php
include "../includes/rodape.php"
?>