<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "testmaneesh";
   // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
     echo "<br>"."successfully connected" ."<br>";
?>