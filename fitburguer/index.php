<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>FitBurguer</title>
</head>
<body class = "body">
   <div class = "caixa-login">
    <form action="auth.php" method="post">
        <label for ="usuario">Usuario:</label>
        <input type="text" name="usuario" placeholder="digite o usuario"><br>
        <label for ="senha">Senha:</label>
        <input type="password" name="senha" placeholder="digite a senha"><br>
        <input type="submit" name="acessar">
    </form>
    </div>
    <div class ="error-box">
        <?php
            if(!isset($_GET['erro_pass'])){
                echo'<p class="error-item">Usuario ou senha incorretos!</p>';
            }
            elseif(!isset($_GET['erro_login'])){
                echo ' <p class="error-item"> é necessario estar logado para acessar a pagina!</p>';
            }
            else{
                echo '';
            }
        ?>
    </div>
</body>
</html>