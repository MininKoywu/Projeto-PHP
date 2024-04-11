<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilocad.css"/>
    <title>Cadastro de Comércio</title>
</head>
<body>

<header>
    <img src="../img/logo.png" alt="Logo">
</header>

<section id="cxprincipal">
    <form action="../model/inserircomercio.php" method="POST">
        <h1> Cadastre uma Empresa </h1>
        <label for="cxcontato">Contato:</label>
        <input type="text" name="cxcontato" placeholder="Digite aqui o contato da empresa" required/><br>
        <label for="cxempresa">Empresa:</label>
        <input type="text" name="cxempresa" placeholder="Digite aqui o nome da empresa" required/><br>
        <label for="cxtel">Telefone:</label>
        <input type="tel" name="cxtel" placeholder="Digite aqui o telefone da empresa" required/><br>
        <label for="cxemail">E-mail:</label>
        <input type="email" name="cxemail" placeholder="Digite aqui o e-mail da empresa" required/><br>
        <input type="submit" value="Gravar Empresa"/>
    </form>
</section>

<footer>
    <p>&copy; Desenvolvido por Yasmin Alves Novaes</p>
</footer>
    
</body>
</html>
