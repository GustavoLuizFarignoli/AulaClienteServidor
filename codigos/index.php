<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
        include('connection.php');

        $sql = "SELECT id, username FROM aula";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                echo "Aluno " . $row['id'] . ": " . $row['username'] . "<br>";
            }
        }
        else {
            echo "Sem resultados no banco de dados!!!";
        }
    ?>
    </body>
</html>