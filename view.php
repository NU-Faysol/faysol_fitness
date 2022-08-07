
    <?php
        include 'E:\xampp\htdocs\faysol_fitness\components/access.php';
        include 'connection.php';
    ?>


        <!doctype html>
    <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-striped table-dark table-hover">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">username</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">pass</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $allData = mysqli_query($conn,"SELECT * FROM `register`");

        while($row = mysqli_fetch_array($allData)){
            echo "<tr> 
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[mobile]</td>
                        <td>@$row[email]</td>
                        <td>@$row[pass]</td>
                        <td> <a class='btn btn-info' href='update.php? id=$row[id]'> update </a></td>
                        <td> <a class='btn btn-danger' href='delete.php? id=$row[id]'> delete </a></td>
                </tr> ";
        }
    ?>
  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>







