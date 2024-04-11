<?php
session_start();

if(isset($_POST['login'])) {
    include_once "../factory/conexao.php";

    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];

    $sql = "SELECT * FROM tbusuario WHERE email = '$email' AND senha = '$senha'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
        $_SESSION['email'] = $email;
        header("Location: ../view/telamenu.php");
        exit();
    } else {
        header("Location: ../view/telalogin.php?erro=1");
        exit();
    }
}
?>
