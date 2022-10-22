<?php
    include('connection.php');

    $id = $_GET['id'];
    $username = $_GET['name'];

    $sql = "UPDATE aula SET username = '$username' WHERE id = '$id' ";

    if ($conn->query($sql) === TRUE) {
        header("location: home.php"); // all ids
        //header("location: query.php?id=$id"); //only this id
    }
    else {
        echo "Update fail!!!";
    }
?>