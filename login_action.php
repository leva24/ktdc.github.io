    
<?php
session_start();
extract($_REQUEST);
include('connection.php');
//echo $username."<br>";
//echo $password."<br>";



$sql="select * from login where username='$username' and password='$password'";
$result=mysql_query($sql);
$num_row=mysql_num_rows($result);
if($num_row==1)
{
	$row=mysql_fetch_array($result);
	$_SESSION['uid']=$row['uid'];
	if($row['utype']=='admin')
	{
		$_SESSION['username']=$username;
		

		header('location:admin_home.php');
		exit();
	}
	else if($row['utype']=='hotel')
	{
		$_SESSION['username']=$username;
		
		header('location:hotel_home.php');
		exit();
	}
	else if($row['utype']=='user')
	{
		$_SESSION['username']=$username;
		header('location:user_home.php');
	exit();
	}
}
	else
	{
		?>
        <script>
        window.alert('No Such User Found...Please Register');
		location.href="login.php";
		</script>
        <?php
	}
?>

