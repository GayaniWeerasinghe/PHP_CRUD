<?php

include 'databaseConnection.php';
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $mobile= $_POST['mobile'];
    $email= $_POST['email'];
    $password= $_POST['pw'];

    $sql = "insert into `student` (name,mobile,email,password) values ('$name','$mobile','$email','$password')";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "Student Added Successfully";
        header('location: viewStudents.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <?php
        include "navbar.php";
  ?>

    <div class = "container my-5">
    <form method = "post">
     <div class="mb-3">
       <label>Student Name</label>
       <input type="text" class="form-control" name="name" placeholder = "Enter student name" autocomplete="off">
     </div>
     <div class="mb-3">
       <label>Student Email</label>
       <input type="email" class="form-control" name="email" placeholder = "Enter student email" autocomplete="off">
     </div>
     <div class="mb-3">
       <label>Mobile Number</label>
       <input type="text" class="form-control" name="mobile" placeholder = "Enter student mobile" autocomplete="off">
     </div>
     <div class="mb-3">
       <label>Password</label>
       <input type="text" class="form-control" name="pw" placeholder = "Enter password" autocomplete="off">
     </div>
 
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    <?php
        include "footer.php";
    ?>
  </body>
</html>