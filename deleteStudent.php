<?php

include 'databaseConnection.php';

if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    $sql = "delete from `student` where id = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        //echo "Student deleted successfully";
        header('location:viewStudents.php');
    }
    else{
        die(mysqli.error($con));
    }
}

?>