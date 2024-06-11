<?php 
include "cabecalho.php"; 

$titulo = "";
$data = "";
$descricao = "";
$foto = "";


?>
<h2>CADASTRAR UM NOVO ITEM</h2>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome" class="form-control">
    <br>
    <input type="text" name="descricao" placeholder="descricao" class="form-control">
    <br>
    <input type="number" name="data" placeholder="data" class="form-control">
    <br>
    <input type="text" name="foto" placeholder="foto" class="form-control">
    <br>
    <br>
    <button class="btn btn-dark" type="submit">SALVAR ITEM</button>
 
</form>
 
<?php include "rodape.php"?>