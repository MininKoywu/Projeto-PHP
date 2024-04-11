<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estiloconsulta.css"/>
    <title>Consulta de Usuário</title>
</head>
<body>

<header>
    <img src="../img/logo.png" alt="Logo">
</header>

<?php
    include_once "../factory/conexao.php";
    $nome = $_POST["cxpesquisa"];
    $consultar = "select * from tbusuario where nome = '$nome'";
    $executar = mysqli_query($conn, $consultar);

    if(mysqli_num_rows($executar) == 0) {
        echo "<p>Usuário não encontrado.</p>";
?>
        <button onclick="window.location.href='../view/telaconsulta.php';">Voltar</button>
        <button onclick="window.location.href='../view/telamenu.php';">Menu</button>
<?php
    } else {
        $linha = mysqli_fetch_array($executar);
?>

<section id="cxprincipal">
    <label>Nome:</label>
    <input type="text" readonly value="<?php echo $linha['nome']?>"/></br>
    <label>E-mail:</label>
    <input type="email" readonly value="<?php echo $linha['email']?>"/></br>
    <label>Senha:</label>
    <input type="text" readonly value="<?php echo $linha['senha']?>"/></br>

    <button onclick="window.location.href='../view/telaconsulta.php';">Voltar</button>
    <button onclick="window.location.href='../view/telamenu.php';">Menu</button>
</section>

<footer>
    <p>&copy; Desenvolvido por Yasmin Alves Novaes</p>
</footer>

<?php
    }
?>
</body>
</html>
