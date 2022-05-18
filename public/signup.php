<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $conn = new mysqli('localhost:3306','root','','ecomm');
    if($conn->connect_error)    
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else    
    {
        $comm = $conn->prepare("INSERT INTO users(email, name, pass, number) values(?, ?, ?, ?)");
        $comm->bind_param("sssi",$email, $name, $password, $number);
        $comm->execute();
        $comm->close();
        $conn->close();
        header("Location: index.html");
        
    }
?>