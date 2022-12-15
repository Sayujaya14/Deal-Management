<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="deal";

$conn=new
mysqli($servername,$username,$password, $dbname);

if($conn->connect_error){
    die("connection failer".$conn->connect_error);
}
echo "connected successfully";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from deal1 where username='$username' and password='$password'";

    $result = $conn->query($sql);
    
    if($result->num_rows <= 0){
        die("invalid credentials");
    }

    $result = $result->fetch_assoc();
    $_SESSION["user"] = $result["username"];
    header("Location:/LOGIN & REGISTER BY ME");
    echo "logged in";
}


?>