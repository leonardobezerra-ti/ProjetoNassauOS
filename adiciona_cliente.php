<?php
    require_once 'conexao.php';

    

        $nome = $_POST['nome'];
        $dtnasc = $_POST['dtnasc'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cep = $_POST ['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

    $sql = "INSERT INTO clientes (nome,cpf, dtnasc , endereco, numero, cep , bairro , cidade , estado, fone, email) VALUES ('$nome','$cpf','$dtnasc' ,'$endereco','$numero','$cep','$bairro','$cidade','$estado','$telefone','$email')";
    $qur = mysqli_query ($mysql,$sql) or die (mysqli_error($mysql));

    header ("Location: index.php");


    die();
    

    
?>