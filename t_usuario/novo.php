<?php
include "../includes/cabecalho.php"
?>
<h1>Novo Usuario</h1>
<p>Vamos Cadastrar Um Produto Novo No Sistema.</p>

<br>
<form method="post" action="inserir.php"> 
Nome: <input name="nome" required maxlength="100">
<br>
Cidade: <input name="cidade" required maxlength="100">
<br>
Estado: <input name="estado" required maxlength="2">
<br>
Data De Nascimento: <input name="data">
<br>
Tipo: <input name="tipo" required maxlength="50">

<button type="submit">Salvar</button>
</form>

<?php
include "../includes/rodape.php"
?>
