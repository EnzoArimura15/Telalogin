<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="areaRestrita.php">
    <?php
    require_once 'areaRestrita.php';
    
    $id_usuario = 'id';
    
    if($id_usuario)
    {
        $sql = $pdo->prepare("DELETE FROM usuario WHERE id_usuario = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    
    header("Location: areaRestrita.php");
    ?>

    </a>

</body>
</html>

