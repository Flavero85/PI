<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Serenatto - Admin</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/logo.png" class="logo-admin" alt="logo-serenatto">
    <h1>Admistração Serenatto</h1>
    <img src="img/logo.jpg" alt="Fluxofest">
  </section>
  <h2>Lista de Eventos</h2>

  <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Descricão</th>
          <th>data</th>
          <th>foto</th>
          <th colspan="3">Ação</th>
        </tr>
      </thead>
      <tbody>
      <tr>

        <?php
        include "conexao.php";
        $sql = "select * from tb_eventos order by data asc";
        $resultado = mysqli_query($conexao, $sql);

        while($umEvento = mysqli_fetch_assoc($resultado)){ 
        ?>

        <td><?=$umEvento['titulo'];?></td>
        <td><?=$umEvento['descricao'];?></td>
        <td><?=$umEvento['data'];?></td>
        <td><?=$umEvento['foto'];?></td>
        
        <td>
          <a class="botao-editar" href="editar-evento.php?id=<?=$umEvento['id']?>">Editar</a>
        </td>

        <td>
          <form>
            <a href="excluir.php?id=<?=$umEvento['id']?>" onclick="return confirm('Tem certeza que deseja excluir este produto?')" type="button" class="botao-excluir" value="Excluir">Excluir</a>
          </form>
        </td>
      
      </tr>
      </tbody>
      <?php } ?>
    </table>

  <a class="botao-cadastrar" href="form-adicionar-evento.php">Cadastrar produto</a>
  
    </form>
  </section>
</main>
</body>
</html>