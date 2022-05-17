<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .container{
            background-color: rgba(0, 0,0, 0.6);
            position: absolute;
            padding: 50px;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            border-radius: 20px;
        }
        h1,h4{
            text-align: center;
            color: white;
        }

        #submit{
            background-color: dodgerblue;
            border: none;
            width: 100%;
            padding: 10px;
        }
        body{
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1> Login </h1>
    <div class="container">
        <form action="../controller/loginController.php" method="post">
            <h4>Bem vindo! </h4>
            <input type="text" name="usuario" id="usuario" placeholder=" Nome de Usuario">
            <br> <br>
            <input type="password" name="senha" id="senha" placeholder=" Insira sua senha">
    
            <br><br>
            <input type="submit" value="Login" id="submit">
    
        </form>
    </div>
    
</body>
</html>