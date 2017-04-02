<?php
include "user_header.php";
include "connection.php";
session_start();
  extract($_REQUEST);
  
  $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];

	
	$w="select * from login where username='$username'";
$r=mysql_query($w);
$row1=mysql_fetch_array($r);
$n=mysql_num_rows($r);	
if($n>0)
{
 $sq="UPDATE `login` SET `password`='$pwd' WHERE username='$username'";
	mysql_query($sq);
	
	$sq1="UPDATE `registration` SET `password`='$pwd',`repassword`='$cpwd' WHERE username='$username'";
	mysql_query($sq1);

	?>
    <script>alert("Inserted Successfully");
    document.location.href='user_home.php';
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