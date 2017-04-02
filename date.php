<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include "connection.php";
 $date=$_REQUEST['q'];
 $d=$_REQUEST['q1'];
 $d2=$_REQUEST['q2'];
    $_SESSION['type']=$d2;
  $curdate=date("Y-m-d");
		 if($date<$curdate)
			{
			echo "Please give Current Date Or After this Date";
			}
	     else
		 {
		 
	  $sq="select max(booked_rooms) from reservation where in_date='$date' and out_date='$d' and room_type='$_SESSION[type]'  ";
		 $s=mysql_query($sq,$con);
		 if($s1=mysql_fetch_array($s))
			{
		     
			   $maxb=$s1[0];
			  
		
		$rs="select total_rooms from tariff where type='$_SESSION[type]'";
		$rs1=mysql_query($rs,$con);
		         if($s1=mysql_fetch_array($rs1))
						{
							 $total=$s1[0];
							 $avail=$total-$maxb;
							echo $date ."  to  " .$d."  in  ".$_SESSION['type']."     Room    ".$avail."   Rooms are Available";
						 }
	}
				 }
?>
</body>
</html>
