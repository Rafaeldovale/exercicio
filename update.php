<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_EMAIL);

$id = mysqli_escape_string($confirma, $_POST['id']);
/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

$sql = "UPDATE clientes SET nome = '$nome, cpf = '$cpf' WHRE id = '$id'";

if(mysqli_insert_id($confirma)){
    //$_SESSION['msg'] = "ATUALIZADO CADASTRADO COM SUCESSO!!!<br>";
    header("Location: index.php");
    
}else{
    header("Location: index.php");
    //echo  "<script>alert('Erro');</script>";
    echo "ERRO: " .$confirma->error;
}