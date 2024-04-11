<?php
    if($_POST["cxcontato"] !="")
    {
        include_once "../factory/conexao.php";
        $contato = $_POST["cxcontato"];
        $empresa = $_POST["cxempresa"];
        $tel = $_POST["cxtel"];
        $email = $_POST["cxemail"];

        $sql = "insert into tbcomercio 
        (contato,empresa,tel,email)values('$contato','$empresa','$tel','$email')";
        
        $query = mysqli_query($conn,$sql); 
        if ($query) 
            header("Location: ../view/telamenu.php");
            exit();
        } else {
            header("Location: ../view/telacadcomercio.php");
            exit();
        }
?>