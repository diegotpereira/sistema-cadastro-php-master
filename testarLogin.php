<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        # Acessar
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);

        // $SQL = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        // $result = $conexao->query($SQL);

        // if (mysqli_num_rows($result)) {
        //     # code...
        //     unset($_SESSION['email']);
        //     unset($_SESSION['senha']);

        //     header('Location: login.php');

        // } else {
        //     $_SESSION['email'] = $email;
        //     $_SESSION['senha'] = $senha;

        //     header('Location: sistema.php');
        // }
    } else {
        header('Location: login.php');
    }
?>