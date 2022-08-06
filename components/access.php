<?php 

    session_start();

        if(isset($_SESSION['username'])) {

            $showname = $_SESSION['username'];
            // echo "<script>alert( 'Hello $showname')</script>";
       
        }
        else{
            echo "<script>alert('Do not access from URL!!')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }

?>