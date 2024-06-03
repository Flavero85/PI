<?php

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

include "conexao.php";
$sql = "insert into bd_eventos(titulo, descricao) values('$titulo', '$descricao')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:index.php");
?>