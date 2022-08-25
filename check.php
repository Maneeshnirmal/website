<?php
include("configure.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
//$user = $_REQUEST['user'];
//$pass = $_REQUEST['pass'];
 $myusername = mysqli_real_escape_string($conn,$_POST['admin']);
 $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

if(isset($_POST['loggedin']))
{
    if (empty ($_POST['admin'])) //if username field is empty echo below statement
    {
        echo "you must enter your unique username <br />";
    }
    if (empty ($_POST['password'])) //if password 1 field is empty echo below statement
    {
        echo "you must enter your password <br />";
    }
}

else
{   
    $query = "SELECT *  FROM admin_login WHERE admin = '$myusername'and password = '$mypassword'";
    $result = $conn->query($query);
    if ($result) 
    {
        echo "query successfull wrote to DB";
        //header('location:../members.php');
    }
    else
    {
        echo"unscccessful login";
    }
}
}
?>