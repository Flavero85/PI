<?php

$titulo = $_POST["titulo"];
$data = $_POST["data"];
$descricao = $_POST["descricao"];
$foto = $_POST["foto"];

include "conexao.php";
$sql = "insert into bd_eventos(titulo, data, descricao, foto) values('$titulo', '$descricao', '$data', '$foto')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:index.php");
?>