<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocad.css">
    <title>Login</title>
</head>
<body>
    <header>
        <img src="../img/logo.png" alt="Logo">
    </header>
    <section id="cxprincipal">
        <h1> Acesse a sua conta </h1>
        <form action="../model/processarlogin.php" method="POST">
            <label for="cxemail">E-mail:</label>
            <input type="email" name="cxemail" placeholder="Digite aqui o seu e-mail" required/>
            <br>
            <label for="cxsenha">Senha:</label>
            <input type="password" name="cxsenha" placeholder="Digite aqui a sua senha" required/>
            <br>
            <button type="submit" name="login">Acessar</button> 
        </form>
    </section>         
    <br>
    <a href="telacaduser.php">Ainda não é cadastrado? Cadastre-se aqui</a>
    <footer>
        <p>&copy; Desenvolvido por Yasmin Alves Novaes</p>
    </footer>
</body>
</html>
