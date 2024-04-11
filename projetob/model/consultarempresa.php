<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estiloconsulta.css"/>
    <title>Consultar a Empresa (Comércio)</title>
</head>
<body>

<header>
    <img src="../img/logo.png" alt="Logo">
</header>

<?php
    include_once "../factory/conexao.php";
    $empresa = $_POST["cxpesquisa"];
    $consultar = "select * from tbcomercio where empresa = '$empresa'";
    $executar = mysqli_query($conn,$consultar);

    if(mysqli_num_rows($executar) == 0) {
        echo "<p>Empresa não encontrada.</p>";
?>
        <button onclick="window.location.href='../view/telaconsulta.php';">Voltar</button>
        <button onclick="window.location.href='../view/telamenu.php';">Menu</button>
<?php
    } else {
        $linha = mysqli_fetch_array($executar);
?>

    <section id="cxprincipal">
        <label>Contato:</label>
        <input type="text" readonly value="<?php echo $linha['contato']?>"/></br>
        <label>Empresa:</label>
        <input type="text" readonly value="<?php echo $linha['empresa']?>"/></br>
        <label>Telefone:</label>
        <input type="tel" readonly value="<?php echo $linha['tel']?>"/></br>
        <label>E-mail:</label>
        <input type="email" readonly value="<?php echo $linha['email']?>"/></br>

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
