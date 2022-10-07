<?php
    $name = $_POST["fname"];
    $email = $_POST["femail"];
    $senha = $_POST["flogin"];

    if($email == "teste@teste.com" && $senha == "123456"){
        session_start();
        $_SESSION["name"] = $name;
        /*$se_name = session_name();
        echo $se_name;*/
        header("Location: home.php");
    } else {
        session_start();
        $_SESSION["name"] = 0;
        header("Location: login.php");
    }
?>