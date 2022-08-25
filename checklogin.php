
<?php
  session_start();
  include("configure.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // admin name and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['admin']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
       $query = "SELECT *  FROM admin_login WHERE admin = '$myusername'and password = '$mypassword'";
		$result = $conn->query($query);
   
		if($result->num_rows>0)
		{
		$row = $result->fetch_array();
		/*$id=$row['id'];
		echo $id ."<br>";*/
        
	     if ($result) 	
		 { 
	 echo "logged in";
		 //$_SESSION['login_user'] = $myusername;
	      header("location:main.php");
		 }
		}
	   else
    {
        echo"unscccessful login";
    }
}
?>
		





   