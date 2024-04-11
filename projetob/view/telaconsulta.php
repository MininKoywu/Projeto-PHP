<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estiloconsulta.css"/>
    <title>Consultar</title>
</head>
<body>

<header>
    <img src="../img/logo.png" alt="Logo">
</header>

<form action="../model/consultarusernome.php" method="POST" class="consultaform">
    <img src="../img/consultauser.png" alt="Ícone Consulta Usuário">
    <h1>Consultar Usuário</h1>
    <input type="text" name="cxpesquisa" placeholder="Digite o nome completo do usuário" required/>
    <input type="submit" value="Pesquisar" class="pesquisar">
</form>

<form action="../model/consultarempresa.php" method="POST" class="consultaform">
    <img src="../img/comercioicon.png" alt="Ícone Comércio">
    <h1>Consultar Empresa</h1>
    <input type="text" name="cxpesquisa" placeholder="Digite o nome da empresa" required/>
    <input type="submit" value="Pesquisar" class="pesquisar">
</form>

<form action="../model/consultaramigonome.php" method="POST" class="consultaform">
    <img src="../img/consultamigosicon.png" alt="Ícone Consulta Amigos">
    <h1>Consultar Amigo</h1>
    <input type="text" name="cxpesquisa" placeholder="Digite o nome completo do amigo" required/>
    <input type="submit" value="Pesquisar" class="pesquisar">
</form>

<footer>
    <p>&copy; Desenvolvido por Yasmin Alves Novaes</p>
</footer>

</body>
</html>
