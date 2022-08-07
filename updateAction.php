  <?php

   include 'connection.php';

    $id = $_POST['id'];  //

    $r_username = $_POST['r_username'];
    $r_mobile = $_POST['r_mobile'];
    $r_email = $_POST['r_email'];
    $r_pass = $_POST['r_pass'];

    $updateQuery = "UPDATE `register` SET `username`='$r_username',`mobile`='$r_mobile',`email`='$r_email',`pass`='$r_pass' WHERE id = '$id'";

        if(mysqli_query($conn,$updateQuery)){
            echo "<script>alert(' Updated ')</script>";
            echo "<script>location.href = 'view.php'</script>";
        }
        else{
            echo "<script>alert('Not Updated. ')</script>";
            echo "<script>location.href = 'view.php'</script>";
        }
  
  ?>