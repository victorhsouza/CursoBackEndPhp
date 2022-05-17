<?php 
require_once '../dao/clienteDAO.php';
$cpf = $_GET['cpf'];
$clienteDAO = new clienteDAO();
$cliente = $clienteDAO->getClienteByCpf($cpf);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body>
    
    <header>
        Cadastro de cliente
    </header>

    <main>
        <div class="container">
            <h1>Cadastro</h1>
            <form action="../controller/alterarClienteController.php" method="POST">

                <input type="text" name="cpf" id="cpf" placeholder="CPF" class="inpuut" value="<?php echo $cliente['cpf'] ?>">
                <br>
                
                <input type="text" name="nome" id="nome" placeholder="Nome completo" class="inpuut" value="<?php echo $cliente['nome']  ?>">
                <br>
                
                <input type="email" name="email" id="email" placeholder="Seu melhor email" class="inpuut" value="<?php echo $cliente['email']  ?>">

                <p>Sexo</p>

                <label>Masculino</label>
                <input type="radio" name="sexo" id="masculino" value="M" <?php echo $cliente['sexo'] == 'M'? 'checked': '' ?>>

                <label>Feminino</label>
                <input type="radio" name="sexo" id="feminino" value="F" <?php echo $cliente['sexo'] == 'F' ? "checked": '' ?>>
                <br>
                <br>

                <div>
                Data de nascimento
                <input type="date" name="datanasc" id="data" class="inpuut" value="<?php  echo $cliente['datanasc'] ?>">
                </div>

                <input type="submit" value="Cadastrar" id="submit" class="inpuut">
                
            </form>
        </div>
        
    </main>


    <footer>

    </footer>
</body>
</html>