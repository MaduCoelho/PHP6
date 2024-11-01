<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>

<body>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {

        //Código aqui
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($user === 'admin' && $pass === 'admin123') {
            echo "Olá ", $user;
        } else {
            echo '<div class="container"><p class="error">Usuário ou senha incorretos!</p></div>';
        }

    }
    ?>
</body>

</html>