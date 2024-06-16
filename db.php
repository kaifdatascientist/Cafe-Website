<?php

$conn = new mysqli('localhost', 'root', '', 'cafe');


if($conn -> connect_error){
    die('Database connection error ' . $conn->connect_error);
}

$table = 'contact';

if (isset($_POST['submit']))
{
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $food = $_POST['food'];
    $message = $_POST['message'];

    $sql = "INSERT INTO $table (name,address,food,message) values('$name', '$address', '$food', '$message')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('DONE..')</script>";
    }
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
    header('location: index.php');
    exit();
}
?>