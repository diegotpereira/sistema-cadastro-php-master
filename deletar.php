<?php
    
    if (!empty($_GET['id'])) {
        # code...
        include_once('config.php');

        $id = $_GET['id'];

        $SQLSELECIONAR = "SELECT * FROM usuarios WHERE id=$id";
        
        $result = $conexao->query($SQLSELECIONAR);

        if ($result->num_rows > 0) {
            # code...
            $SQLDELETAR = "DELETE FROM usuarios WHERE id=$id";
            $resultDeletar = $conexao->query($SQLDELETAR);
        }
    }

    header('Location: sistema.php');
?>