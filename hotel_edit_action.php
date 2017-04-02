<?php
include "connection.php";
session_start();
  extract($_REQUEST);
  
  $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];
$sql="select  hid  from add_hotel where username='$username'";
$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	$hid=$row['hid'];
	
	$w="select * from hotel_info where hid='$hid'";
$r=mysql_query($w);
$row1=mysql_fetch_array($r);
$n=mysql_num_rows($r);	
if($n>0)
{
 $sq="UPDATE `hotel_info` SET `hname`='$name',`dist`='$dist',`location`='$location',`facilities`='$facil',`description`='$description',`email`='$email',`phno`='$contact' WHERE hid='$hid'";
	mysql_query($sq);
	?>
    <script>alert("Inserted Successfully");
    document.location.href='hoteldescript.php';
    </script>
    <?php
}

 
else
{


?>
<script>
alert("Not Possible");
</script>
<?php	
	
}
 

?>