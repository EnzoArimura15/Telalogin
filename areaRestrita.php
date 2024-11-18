<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("cadastrousuarioturma33","localhost","root", "");
    $dados = $usuario->listarUsuarios();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="areaRestrita.css"></link>
</head>
<body>
    <h1>LISTAR USUÁRIO</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações </th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($dados))
                {
                    foreach ($dados as $pessoa):
            ?>
                <tr>
                    <td><?php echo $pessoa['nome'];?></td>
                    <td><?php echo $pessoa['email'];?></td>
                    <td><?php echo $pessoa['telefone'];?></td>
                    <td>
                    <a href="editar.php"><button class = "btn-edit-enzo">  
                    <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                </a>
                <a href="deletar.php">
                <button class = "btn-delete-enzo">
                <i class="fa-solid fa-trash"></i>
                </button>
                </a>
                    </td>
                </tr>
                <?php 
                endforeach;
            }
            else
            {
                echo "Nenhum Usuário Cadastrado.";
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>