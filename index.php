<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulip Love - Login</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>

<?php
// Verificar se os campos de e-mail e senha foram enviados
if(isset($_POST['email']) && isset($_POST['password'])) {
    // Recuperar os valores dos campos
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar se o e-mail e senha correspondem a um usuário válido (você deve implementar essa lógica)
    if($email === "seu_email@example.com" && $password === "sua_senha_segura") {
        // Se o login for bem-sucedido, redirecione o usuário para a página principal, por exemplo
        header("Location: index.php");
        exit();
    } else {
        // Se as credenciais estiverem incorretas, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: index.php?error=credenciais_invalidas");
        exit();
    }
} else {
    // Se os campos não foram enviados, redirecione de volta para a página de login
    header("Location: index.php");
    exit();
}
?>

<div class="container">
    <div class="login-container">
        <h2>Bem-vindo ao Tulip Love</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Login</button>
        </form>
        <div class="social-login">
            <h3>Login com:</h3>
            <a href="google_login.php">Google</a>
            <a href="facebook_login.php">Facebook</a>
        </div>
        <p>Não tem uma conta? <a href="signup.php">Cadastre-se</a></p>
    </div>
</div>

</body>
</html>
