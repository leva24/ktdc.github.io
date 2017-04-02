<?php
	include "connection.php";
   include "userinfo.php";










   $usql="select username from login where username='$_POST[a2]'";
$res=mysql_query($usql);
$num=mysql_num_rows($res);
if($num>0)
{
	echo "<script>window.alert('Username already taken');</script>";
	header('location:userinfo.php');
}
else
{
	$sql="insert into registration (name,address,email,phoneno,gender,username,password,repassword) values ( '$_POST[f1]','$_POST[addr]','$_POST[e1]','$_POST[mobile]','$_POST[gender]','$_POST[a2]','$_POST[pwd]','$_POST[cpwd]')";
	mysql_query($sql,$con);
	
	$sql1="insert into login (utype,username,password) values ('user', '$_POST[a2]','$_POST[pwd]')";
	mysql_query($sql1,$con);

	echo	"<script> window.onload=function(){alert('Registration Successfully');window.location='login.php'}</script>";
}
?>
