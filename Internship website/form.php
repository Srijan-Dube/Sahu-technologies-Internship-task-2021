<?php
$servername = 'localhost';
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$conn = new mysqli('localhost','root',"",'user data');
if($conn->connect_error)
     {
     	die("Connection Failed:".$conn->connect_error);
     }
     else
     {
     	$x = $conn->prepare("insert into name(name,email,message)values(?,?,?)");
     	$x->bind_param("sss",$name,$email,$message);
     	$x->execute();
     	echo"Data is Entered.";
     	$x->close();
     	$conn->close();
     }
  ?>