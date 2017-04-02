<?php
session_start();
include "connection.php";
include "admin_login.php";
extract($_POST);

 $sql="select * from admin where  username='".$username."' and  password='".$password."'";
$sq=mysql_query($sql,$con);

	
	$row=mysql_fetch_array($sq);
						//$b=$row['Role'];
						
						$name=$row['username'];
						$pass=$row['password'];
						
						if(($username==$name)&&($password==$pass))
				{
						
						$_SESSION['username']=$name;
						$_SESSION['password']=$pass;
						
								header("location:admin_home.php");
						}		
							
						else
							{
						echo	"<script> window.onload=function(){alert('invalid user');window.location='admin_login.php'}</script>";
							}
				
				
				
	
?>