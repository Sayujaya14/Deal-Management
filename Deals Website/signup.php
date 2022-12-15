<?php
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

    $sql=" INSERT INTO deal1( username,  password) VALUES ( '$username', '$password');";

    $inserted = $conn->query($sql);
    
    if($inserted == TRUE){
        header("Location: /LOGIN & REGISTER BY ME/login.html");
        echo "Inserted" ;
    } else {
        echo "Error : ".$sql."<br>".$conn->error;
    }
}


?>