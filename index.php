<?php
require 'conexao.php';

$lista=[];
$sql = $pdo->query("SELECT * FROM clientes");

if($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>CRUD - Cadastro</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>  
   <table>
       <tr>
           <th>ID</th>
           <th>NOME COMPLETO</th>
          
           <th>CPF</th>
           <th>Ações</th>

       </tr>
       <?php foreach($lista as $usuario):?>
            <tr>
                <td><?php echo $usuario['id'];?></td>
                <td><?php echo $usuario['nome'];?></td>
              
                <td><?php echo $usuario['cpf'];?></td>
                <td>
                    <button><a href="editar.php?id=<?php echo $usuario['id'];?>">editar</a><br></button>
                    <button><a href="delete.php?id=<?php echo $usuario['id'];?>"onclick="return confirm('Tem certeza que deseja fazer esta operação')"> deletar </a></button>
                </td>
            </tr>

       <?php endforeach;?>
       
   </table>
   <form method="POST" action="adicionar.php">
       <button>Cadastrar</button>
   </form>
   <a href="paginaInc.php">Voltar</a>
</body>
</html>