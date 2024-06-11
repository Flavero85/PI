<?php  
$titulo = $_POST['titulo'];
$descricao= $_POST['descricao'];
$data = $_POST['data'];
$foto = $_POST['foto'];
 
 
include "conexao.php";
$sql = "insert into tb_eventos(titulo,descricao, data, foto) Value ('$titulo','$descricao','$data','$foto')";
mysqli_query($conexao, $sql);
 
mysqli_close($conexao);
 
header("location:admin.php");
