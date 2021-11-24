<?php
    include_once('config.php');

    if (isset($_POST['atualizar'])) {
        # code...
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado= $_POST['estado'];
        $endereco = $_POST['endereco'];

        $SQLINSERIR = "UPDATE usuarios SET nome='$nome', senha='$senha', email='$email', telefone='$teleone', sexo='$sexo', data_nasc='$data_nasc', cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id=$id";
        $result = $conexao->query($SQLINSERIR);
        print_r($result);
    }

    header('Location: sistema.php');
?>