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
        $nome = $_POST["cxpesquisa"];
        $consultar = "select * from tbamigos where nome = '$nome'";
        $executar = mysqli_query($conn,$consultar);

        if(mysqli_num_rows($executar) == 0) {
            echo "<p>Amigo não encontrado.</p>";
    ?>
            <button onclick="window.location.href='../view/telaconsulta.php';">Voltar</button>
            <button onclick="window.location.href='../view/telamenu.php';">Menu</button>
    <?php
        } else {
            $linha = mysqli_fetch_array($executar);
    ?>

    <section id="cxprincipal">
        Nome:
        <input type="text" readonly value="<?php echo $linha['nome']?>"/></br>
        E-mail:
        <input type="email" readonly value="<?php echo $linha['email']?>"/></br>
        Data de Nascimento:
        <input type="date" readonly value="<?php echo $linha['datanasc']?>"/></br>
        Telefone:
        <input type="tel" readonly value="<?php echo $linha['tel']?>"/></br>

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