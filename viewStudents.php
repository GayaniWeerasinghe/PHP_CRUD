<?php
   
   include 'databaseConnection.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
        include "navbar.php";
    ?>

    <div class = "container">
    <a href="addStudent.php" class="text-light"><button class="btn btn-success my-5">Add Student</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID No</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php

      $sql = "select * from `student` ";
      $result = mysqli_query($con,$sql);

      if($result){
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $name = $row['name'];
          $mobile = $row['mobile'];
          $email = $row['email'];
          $password = $row['password'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$mobile.'</td>
          <td>'.$email.'</td>
          <td>'.$password.'</td>
          <td>
             <a href = "updateStudent.php? updateid='.$id.'"><button class="btn btn-primary">Update</button></a>
             <a href = "deleteStudent.php? deleteid='.$id.'"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>';
        }
      }

    ?>

  </tbody>
</table>
    </div>
    <?php
        include "footer.php";
    ?>
  </body>
</html>