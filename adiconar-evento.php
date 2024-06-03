<?php 
include "cabecalho.php"; 
$id = $_GET['id'];
$titulo = "";
$data = "";
$descricao = "";
$foto = "";

include "conexao.php";
$sql = "select * from bd_eventos where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($novoEvento = mysqli_fetch_assoc($resultado)){
    $titulo = $novoEvento['titulo'];
    $descricao = $novoEvento['descricao'];
}

?>
<h2>Cadastrar novo Evento</h2>
<form method="post" action="atualizar-evento.php?id=<?=$id;?>">
    <label for="titulo">Título</label>
    <input value="<?=$titulo;?>" type="text" name="titulo" id="titulo" required maxlength="50">
    <label for="data">Data</label>
    <input value="<?=$data;?>" type="text" name="data" id="data" required maxlength="50">
    <label for="descricao">Descrição</label>
    <input value="<?=$descricao;?>" type="text" name="descricao" id="descricao" required maxlength="100">
    <label for="foto">Foto</label>
    <input value="<?=$foto;?>" type="text" name="foto" id="foto" required maxlength="1000">
    <button type="submit" class="btn btn-success">Salvar alteração</button>
</form>
<?php include "rodape.php"; ?>