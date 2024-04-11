<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilocad.css"/>
    <title>Cadastro de Usuário</title>
</head>
<body>

<header>
    <img src="../img/logo.png" alt="Logo">
</header>

<section id="cxprincipal">
    <form action="../model/inseriruser.php" method="POST">
        <h1> Cadastre-se </h1>
        <label for="cxnome">Nome:</label>
        <input type="text" name="cxnome" placeholder="Digite aqui o seu nome" required/><br>
        <label for="cxemail">E-mail:</label>
        <input type="email" name="cxemail" placeholder="Digite aqui o seu e-mail" required/><br>
        <label for="cxpassword">Senha:</label>
        <input type="password" name="cxpassword" placeholder="Digite aqui a sua senha" required/><br>
        <input type="submit" value="Cadastrar"/> 
    </form>
</section>

</br>
<a href="telalogin.php">Já é cadastrado? Faça login aqui</a>

<footer>
    <p>&copy; Desenvolvido por Yasmin Alves Novaes</p>
</footer>

</body>
</html>
