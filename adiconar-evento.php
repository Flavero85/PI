<?php 
include "cabecalho.php"; 
$id = $_GET['id'];
$titulo = "";
$descricao = "";

include "conexao.php";
$sql = "select * from tarefas where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($umaTarefa = mysqli_fetch_assoc($resultado)){
    $titulo = $umaTarefa['titulo'];
    $descricao = $umaTarefa['descricao'];
}

?>
<h2>Cadastrar nova tarefa</h2>
<form method="post" action="editar-salvar-formulario.php?id=<?=$id;?>">
    <label for="titulo">Título</label>
    <input value="<?=$titulo;?>" type="text" name="titulo" id="titulo" required maxlength="100">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"><?=$descricao;?></textarea>
    <button type="submit" class="btn btn-success">Salvar alteração</button>
</form>
<?php include "rodape.php"; ?>