<?php 

class Conexao{

    function getConexao(){
        $banco = new mysqli("localhost","root", "", "projetoPhp");
        return $banco;
        if($banco->connect_errno){
            echo "Erro " + $banco->error;
        }
    }
}