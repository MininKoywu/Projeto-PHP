<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilocad.css"/>
    <title>Cadastro de Amigo</title>
</head>
<body>
    
<header>
    <img src="../img/logo.png" alt="Logo">
</header>

<section id="cxprincipal">
    <form action="../model/inseriramigos.php" method="POST">
        <h1> Cadastre um Amigo </h1>
        <label for="cxnome">Nome:</label>
        <input type="text" name="cxnome" placeholder="Digite aqui o nome do amigo" required/><br>
        <label for="cxemail">E-mail:</label>
        <input type="email" name="cxemail" placeholder="Digite aqui o e-mail do amigo" required/><br>
        <label for="cxdatanasc">Data de Nascimento:</label>
        <input type="date" name="cxdatanasc" required/><br>
        <label for="cxtel">Telefone:</label>
        <input type="tel" name="cxtel" placeholder="Digite aqui o número de telefone do amigo" required/><br>
        <input type="submit" value="Enviar"/> 
    </form>
</section>

<footer>
    <p>&copy; Desenvolvido por Yasmin Alves Novaes</p>
</footer>
</body>
</html>
