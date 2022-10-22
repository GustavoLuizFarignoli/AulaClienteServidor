<?php
    include('connection.php');

    $username = $_GET['name'];

    $sql = "INSERT INTO aula(username) VALUES('$username')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        header("location: index.php"); // all ids
        //header("location: query.php?id=$last_id"); //only this id
    }
    else {
        echo "Insert fail!!!";
    }
?>