<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>

    <!-- estilização  -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <a href="home.php">Home</a>
    <h1>Entrar</h1>
    <div>
        <form action="testarLogin.php" method="POST">
            <input type="text" name="email" id="" placeholder="Email">
            <br><br>
            <input type="password" name="senha" id="" placeholder="Senha">
            <br><br>
            <input type="submit" value="Enviar" name="submit" class="inputSubmit">
        </form>
    </div>
</body>

</html>