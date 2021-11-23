<?php
   
   $dbHost = 'localhost';
   $dbNomeUsuario = 'root';
   $dbSenha = 'root';
   $dbNome = 'db_sistema_cadastro_php';

   $conexao = new mysqli($dbHost, $dbNomeUsuario, $dbSenha, $dbNome);

//    if ($conexao->connect_errno) {
//        # code...
//        echo "Erro";

//    } else {
//        echo "Conexão realizada com sucesso";
//    }
?>