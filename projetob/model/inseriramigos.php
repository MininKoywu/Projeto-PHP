<?php
    if($_POST["cxnome"] !="")
    {
        include_once "../factory/conexao.php";
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $datanasc = $_POST["cxdatanasc"];
        $tel = $_POST["cxtel"];

        $sql = "insert into tbamigos
        (nome,email,datanasc,tel)values('$nome','$email','$datanasc','$tel')";
        
        $query = mysqli_query($conn,$sql);
        if ($query) 
            header("Location: ../view/telamenu.php");
            exit();
        } else {
            header("Location: ../view/telacadamigos.php");
            exit();
        }
?>