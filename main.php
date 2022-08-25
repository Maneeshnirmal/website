<!DOCTYPE html>
<html>
<head>
<title>main page</title>
<style>
.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
	float:right;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
</style>
</head>
<legend style="background: aquamarine;text-align: center;font-size: 32px;width: 50%;margin: auto;">welcome to console</legend>
<?php include("configure.php");?>
	
<div class="chip">
  <img src="contact chip.png" alt="Person" width="96" height="96">
<?php  
 $count=1;
$sql="Select * from admin_login";
$ans = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($ans)){?>
WELCOME:<?php echo $row["admin"];?>
<br>
<?php $count++;}?>
</div>
<?php
$count=1;
 //include("configure.php");
$sel_query="Select * from status ORDER BY id;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center">ID:<?php echo $count; ?></td><br>
<br>
<!--<div class="chip">
  <img src="contact chip.png" alt="Person" width="96" height="96">
  WELCOME:
  ADMIN
</div>-->
<h1 style="text-align: right;margin-top: 62px;">STATUS:<?php echo  $row["status"]; ?></h2>
<?php $count++; } ?>
</html>
