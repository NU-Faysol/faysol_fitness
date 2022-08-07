<?php
        include 'E:\xampp\htdocs\faysol_fitness\components/access.php';
        include 'connection.php';
        
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM `register` WHERE id = '$id'";

        mysqli_query($conn,$deleteQuery);
        header("location:view.php");

    ?>