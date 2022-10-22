<?php
    include('connection.php');

    $id = $_GET['id'];

    $sql = "SELECT id, username FROM aula WHERE id = $id";
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