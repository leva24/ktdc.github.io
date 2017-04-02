<?php
	session_start();
	
	$l=mysql_connect("localhost","root","");
	mysql_select_db('hotel');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	echo $res=mysql_query("select * from login where username='".$username."' and  password='".$password."'",$l);
	
	$row=mysql_fetch_array($res);
			$name=$row['username'];
			$pass=$row['password'];
			$_SESSION['username']=$name;
						$_SESSION['password']=$pass;
	
	if(mysql_num_rows($res)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:reservation.php");
		exit();		 
	}
	else
	{
	     // header("location:login.php");
		//  exit();
	}
	
?>