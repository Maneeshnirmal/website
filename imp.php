
<!--<td align="center">admin:<?php  echo "(".$_POST['admin'].")"; ?></td>-->

<br>
<button>ADD DEVICE</button><br>
<!--<tbody>-->
<?php
$count=1;
 include("configure.php");
$sel_query="Select * from admin_login ORDER BY id;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center">ID:<?php echo $count; ?></td><br>
<td>status:<?php echo $row["admin"]; ?></td>

</tr>
<br>
<?php $count++; } ?>
<!--</tbody>-->
<button href="update.php">ON</button><br>
<button>OFF</button><br>
<!--</body>-->