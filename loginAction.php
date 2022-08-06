<?php

if(isset($_POST['login'])){
        
        include 'connection.php';

        $l_username = $_POST['l_username'];
        $l_pass = $_POST['l_pass'];

        $result = mysqli_query($conn, "SELECT * FROM `register` WHERE username ='$l_username' AND pass = '$l_pass' ");
            if(mysqli_num_rows($result)){

                session_start();
                $_SESSION['username'] = $l_username;
                echo "<script>location.href = 'index.php'</script>"; 
            }
            else{
                echo "<script>alert('Username and Password are not matched')</script>";
                echo "<script>location.href = 'login.php'</script>";
            }
    }
    else{

        echo "<script>location.href = 'login.php'</script>";
    }

    

?>