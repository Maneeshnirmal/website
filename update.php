<?php
 
include("configure.php");
$status =$_POST['status'];
$sql=("update status set 
status='".$status."',where id='".$id."'");
 if($conn->query($sql) === TRUE)
	{
	header("location:admin_details.php");
     
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>