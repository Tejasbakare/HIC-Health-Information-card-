<?php
$servername = "localhost";
 $username = "root";
 $password = "";
 $database = "project";
 //connection 
 $conn = new mysqli($servername,$username,$password,$database);

 //connection checking
 if($conn->connect_error)
 {
     die("Connection failed: " . $conn->connect_error);
 }
 else
 {
     //echo "connection successfully";
 }
 ?>