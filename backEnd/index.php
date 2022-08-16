<?php
header('Access-Control-Allow-Origin: *');

if(isset($_POST)){

    $name = $_POST['name'];
    $email = $_POST['email'];


    if(empty($name) || empty($email)){
        echo "<script>alert('please enter all fields');</script>";
        return;
    }

    $connection = mysqli_connect("localhost","root","","webdev");

    $insert = "insert into users(name , email) values ('$name', '$email')";
    mysqli_query($connection,$insert);
}




?>