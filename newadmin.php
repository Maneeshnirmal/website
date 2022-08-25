<?php
include("configure.php");

 $sql = "insert into admin_login(admin,password) VALUES ('".$_POST['admin']."','".$_POST['password']."')";
if($conn->query($sql) === TRUE)
	{
	echo "created";
    echo "(".$_POST['admin'].")";
	header("location:main.php");
     
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>