<?php
if(isset($_POST["acao"])){
    if($_POST["acao"]=="inserir"){
        inserirCliente();
    }else if($_POST["acao"]=="alterar"){
        alterarCliente();
    }else if($_POST["acao"]=="excluir"){
        excluirCliente();
    }
}

function abrirBanco(){
    $conexao  = new mysqli("localhost", "root", "", "crudteste");

    return $conexao;
}

function inserirCliente(){
    $banco = abrirBanco();
    $sql = "INSERT INTO clientes(nomecliente, cpf, email) 
                VALUES ('{$_POST["nomecliente"]}', '{$_POST["cpf"]}', '{$_POST["email"]}')";

    $banco->query($sql);

    $banco->close();
    voltarIndex();
}

function alterarCliente(){
    $banco = abrirBanco();
    $sql = "UPDATE clientes SET nomecliente='{$_POST["nomecliente"]}',cpf='{$_POST["cpf"]}',
                            email='{$_POST["email"]}' WHERE idcliente='{$_POST["idcliente"]}'";

    $banco->query($sql);

    $banco->close();

    header("Location: tabelaClientes.php");
}

function excluirCliente(){
    $banco = abrirBanco();
    $sql = "DELETE FROM clientes WHERE idcliente='{$_POST["idcliente"]}'";

    $banco->query($sql);

    $banco->close();
    header("Location: tabelaClientes.php");
}

function selectAllCliente(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM clientes ORDER BY nomecliente";

    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)){
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($idcliente){
    $banco = abrirBanco();
    $sql = "SELECT * FROM clientes WHERE idcliente =".$idcliente;

    $resultado = $banco->query($sql);
    $clientes = mysqli_fetch_assoc($resultado);
        
    return $clientes;

}

function voltarIndex(){
    header("Location: index.php");
}

?>
