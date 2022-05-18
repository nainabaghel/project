<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost:3306','root','','ecomm');
    if($conn->connect_error)    
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else    
    {
        $comm = $conn->prepare("SELECT email, pass FROM users WHERE email=? ");
        $comm->bind_param("sssi",$email, $name, $password, $number);
        $comm->execute();
        $comm->close();
        $conn->close();
        header("Location: index.html");
        
    }
?>