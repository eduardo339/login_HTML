<?php
    include('connection.php');
    $con = connection();

    $id = null;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users VALUES('$id','$email','$password')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
?>