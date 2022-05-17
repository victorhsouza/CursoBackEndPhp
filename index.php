<?php 
include 'login/validaLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <?php 
        echo "Usuario: " , $_SESSION['usuario'];
        echo "Perfil: " , $_SESSION['perfil'];

    ?>
    <a href="view/formCadastrarCliente.php">Cadastrar cliente</a>
    <a href="view/listarAllCliente.php">Listar cliente</a>
    <a href="controller/logoffController.php">Logout</a>
</body>
</html>