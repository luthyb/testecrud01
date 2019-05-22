<?php 
include("conexao.php");
    $grupo = selectAllCliente();
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
<table border="0" align="center">
        <thead>
            <tr>
                <th><center>Nome</th>
                <th><center>CPF</th>
                <th><center>Email</th>
                <th><center>Editar</th>
                <th><center>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($grupo as $clientes) { ?>
                <tr>
                <td  width="100px"><center><?=$clientes["nomecliente"]?></td>
                <td  width="200px"><center><?=$clientes["cpf"]?></td>
                <td  width="300px"><center><?=$clientes["email"]?></td>
                <td  width="80px" align="center">
                <form name="alterar" action="alterar.php" method="POST">
                    <input type="hidden" name="idcliente" value=<?=$clientes["idcliente"]?>>
                    <input type="submit" value="Editar" name="Editar" class="btn btn-secondary">
                </form>
                </td>
                <td width="80px" align="center">
                <form name="excluir" action="conexao.php" method="POST">
                    <input type="hidden" name="idcliente" value=<?=$clientes["idcliente"]?>>
                    <input type="hidden" name="acao" value="excluir">
                    <input type="submit" value="Excluir" name="Excluir" class="btn btn-secondary">
                </form>
                </td>
            </tr>

            <?php    }
            ?>
        </tbody>
    </table>
    <?php 
    function formatoData($data){
        $array = explode("-", $data);

        $novaData = $array["2"]."/".$array["1"]."/".$array["0"];
        return $novaData;

    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>