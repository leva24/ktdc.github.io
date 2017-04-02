<?php
include "user_header.php";
include "connection.php";
session_start();
  extract($_REQUEST);
  
  $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];

	
	$w="select * from registration where username='$username'";
$r=mysql_query($w);
$row1=mysql_fetch_array($r);
$n=mysql_num_rows($r);	
if($n>0)
{
 $sq="UPDATE `registration` SET `name`='$f1',`address`='$addr',`email`='$e1',`phoneno`='$mobile' WHERE username='$username'";
	mysql_query($sq);
	?>
    <script>alert("Inserted Successfully");
    document.location.href='user_profile_view.php';
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