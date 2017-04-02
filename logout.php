<?php
session_start();
  
   $_SESSION['uname']="";
     $_SESSION['pwd']="";
	  
	 unset($_SESSION['uname']);
	 unset($_SESSION['pwd']);
	  
	 session_destroy();
	 
	 header("location:login.php");
	 
?>