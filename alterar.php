<?php 
include("conexao.php");
    $clientes = selectIdPessoa($_POST["idcliente"]);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lista de CRUDS!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">TesteUniasselvi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="escolhaCadastro.php">Cadastrar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Listas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tabelaClientes.php">Lista de Clientes</a>
          <a class="dropdown-item" href="tabelaProdutos.php">Lista de Produtos</a>
          <a class="dropdown-item" href="tabelaPedidos.php">Lista de Pedidos</a>
          
        </div>
      </li>
    </ul>
    <span class="navbar-text">
      Sinta-se a vontade para buscar um registro
    </span>
    <ul></ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Busca</button>
    </form>
  </div>
</nav>

<form name="dadosClientes" action="conexao.php" method="POST">
<table border="0" align="center">
    <tbody>
        <tr>
            <th width="80px"><center>Nome:</th>
            <th><input type="text" name="nomecliente" value="<?=$clientes["nomecliente"]?>"></th>
        </tr>
        <tr>
            <th width="80px"><center>CPF:</th>
            <th><input type="text" name="cpf" value="<?=$clientes["cpf"]?>"></th>
        </tr>
        <tr>
            <th width="80px"><center>Email:</th>
            <th><input type="email" name="email" value="<?=$clientes['email']?>" size="20"></th>
        </tr>
        <tr>
            <td><input type="hidden" name="acao" value="alterar">
                <input type="hidden" name="idcliente" value="<?=$clientes["idcliente"]?>">
            </td>
            <td><input type="submit" name="Concluido" value="Concluído"></td>
        </tr>
    </tbody>
</table>

</form>
</body>
</html>