<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("cadastrousuarioturma33","localhost","root", "");

    if (isset($_GET)) {

        $email = $_GET['email'];

        $enzo = $usuario->getUsuario($email);

    }

    if (!empty($_POST['nome']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $id = $_POST['id'];

        $usuario->editarUsuario($nome, $email, $telefone, $id);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar e Deletar</title>
</head>
<body>
    <h2>Edição DE USUÁRIO</h2><br>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $enzo['id_usuario'];?>" ><br>        
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?php echo $enzo['nome'];?>" ><br>        
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $enzo['email'];?>"><br>       
        <label>Telefone:</label><br>
        <input type="text" name="telefone" value="<?php echo $enzo['telefone'];?>"><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" value="<?php echo $enzo['senha'];?>"><br>
    <input type="submit" value="Salvar">
    </form>



</body>
</html>