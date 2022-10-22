<?php
    include('connection.php');
?>
<html style="background-color: aliceblue;">
    <div style="display: flex; justify-content:space-around; align-items:center;">
        <h1>
            <?php
                session_start();
                if(isset($_SESSION["name"])  && $_SESSION["name"] != 0){
                    echo "Bem vindo(a) ao Sistema, " . $_SESSION["name"][0];
                } else {
                    echo "Deu ruim";
                    header("Location: login.php");
                }
            ?>
        </h1>
    </div>
</html>