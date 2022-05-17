<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$datanasc = date($_POST['datanasc']);

echo $nome;
echo $cpf;
echo $email;
echo $sexo;
echo $datanasc;


$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setEmail($email);
$clienteDTO->setSexo($sexo);
$clienteDTO->setDatanasc($datanasc);

$clienteDAO = new clienteDAO();
$ok = $clienteDAO->cadastrarCliente($clienteDTO);

if($ok){
    echo "<script> alert('Cadastrado com sucesso') 
                   window.location = '../view/listarAllCliente.php'
        </script>";
}


?>