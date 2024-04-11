<?php
    if($_POST["cxnome"] !="") 
    {
        include_once "../factory/conexao.php";
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxpassword"];

        $sql = "insert into tbusuario 
        (nome,email,senha)values('$nome','$email','$senha')"; 
        
        $query = mysqli_query($conn,$sql); 
        if ($query) 
            header("Location: ../view/telalogin.php");
            exit();
        } else {
            header("Location: ../view/telacaduser.php");
            exit();
        }
?>