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
                    <form method="get">
                        <td>
                            <input type="text" name="nome" value="
                            <?php
                            echo $pessoa['nome'];
                            ?>
                            " disabled>
                        </td>
                        <td>
                            <input type="email" name="email" value="
                            <?php
                            echo $pessoa['email'];
                            ?>
                            " >
                        </td>
                        <td>
                            <input type="text" name="telefone" value="
                            <?php
                            echo $pessoa['telefone'];
                            ?>
                            " disabled>
                        </td>
                        <td>
                            <input type="text" name="senha" value="
                            <?php
                            echo $pessoa['senha'];
                            ?>
                            " disabled>
                        </td>
                        <td>
                            <a href="editar.php?email=<?=$pessoa['email']?>"> EDITAR </a>
                        </td>
                        <td>
                            <a href="deletar.php?id=<?=$pessoa['id_usuario']?>"> DELETAR </a>
                        </td>
                    </form>
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