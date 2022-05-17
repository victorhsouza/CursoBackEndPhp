<?php 
require_once '../dao/clienteDAO.php';
$cpf = $_GET['cpf'];

$clienteDAO = new clienteDAO();
$clienteDAO->excluirCliente($cpf);

header("Location: ../view/listarAllCliente.php");

?>