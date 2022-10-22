<?php
    include('connection.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM aula WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("location: index.php"); // all ids
        //header("location: query.php?id=$last_id"); //only this id
    }
    else {
        echo "Delete fail!!!";
    }
?>