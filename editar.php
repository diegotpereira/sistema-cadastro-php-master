<?php
    include_once('config.php');

    if (!empty($_GET['id'])) {
        # code...
        $id = $_GET['id'];
        $SQLSELECIONAR = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($SQLSELECIONAR);

        if ($result->num_rows > 0) {
            # code...
            while ($usuario_dado = mysqli_fetch_assoc($result)) {
                # code...
                $nome = $usuario_dado['nome'];
                $senha = $usuario_dado['senha'];
                $email = $usuario_dado['email'];
                $telefone = $usuario_dado['telefone'];
                $sexo = $usuario_dado['sexo'];
                $data_nasc = $usuario_dado['data_nasc'];
                $cidade = $usuario_dado['cidade'];
                $estado = $usuario_dado['estado'];
                $endereco = $usuario_dado['endereco'];
            }
        } else {
            header('Location: sistema.php');
        }
    } else {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

    <!-- estilização  -->
    <link rel="stylesheet" href="css/editar.css">
</head>

<body>
    <a href="sistema.php">Home</a>
    <div class="box">
        <form action="salvarEditar.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo=='feminino' ) ? 'checked' : '';?> required>
                    <label for="feminino">Feminino</label>
                <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo=='masculino' ) ? 'checked' : '';?> required>
                    <label for="masculino">Masculino</label>
                <br>
                    <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo=='outro' ) ? 'checked' : '';?> required>
                    <label for="outro">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                    <input type="hidden" name="id" value=<?php echo $id;?>>
                    <input type="submit" name="atualizar" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>