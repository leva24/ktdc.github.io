<?php session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>
<?php
include 'connection.php';
/*$sql="select * from reservation where ";
$sq=mysql_query($sql,$con);
 while($row=mysql_fetch_array($sq))
  {
		$type=$row[1];
		$date_in=$row[2];
		$date_out=$row[3];
		$room=$row[4];
		
		if($type==$rtype && $date_in==$fr ){
		  echo 'ff';
		}

         
		
}
*/


 $ch=$_REQUEST['q'];
  $_SESSION['ch']=$ch;
 $adlt=$_REQUEST['q1'];
    $_SESSION['adlt']=$adlt;
  $room=$_REQUEST['q2'];
     $_SESSION['room']=$room;
  $rtype=$_REQUEST['q3'];
    $_SESSION['rtype']=$rtype;
 $in=$_REQUEST['q4']; 
  $_SESSION['in']=$in;
 $out=$_REQUEST['q5'];
   $_SESSION['out']=$out;
$total=0;
 $s="select * from tariff where type='".$rtype."'";
$s1=mysql_query($s,$con);
 if($row1=mysql_fetch_array($s1))
  {
		$type=$row1[0];
		$rate=$row1[1];
		  $noofroom=$row1[2];
		$avail=$row1[3];
		$broom=$row1[4];		
		
		
if($_SESSION['rtype']=="standard")
 	{
 $res="select max(booked_rooms) from reservation where  in_date='$_SESSION[in]' and out_date='$_SESSION[out]' ";
				 $rs=mysql_query($res,$con);
	if($s1=mysql_fetch_array($rs))
			{
		     
			   $maxb=$s1[0];
			
			 $b=$_SESSION['room']+$maxb;
							  
			 if($noofroom>=$b)
							  {
							  if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
							  {
								  $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$b,$_SESSION[adlt], $_SESSION[ch])";
								 mysql_query($sql,$con);
								 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
											}
								 
									 
											}
											 
										 }
			else 
			 {
				if($noofroom>=$_SESSION['room'])
					{
					echo "success";
					 $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
						 mysql_query($sql,$con);
						 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
									 }  }
										
					}
			 
			 
if($_SESSION['rtype']=="deluxe")
 	{
	 $res="select max(booked_rooms) from reservation where  in_date='$_SESSION[in]' and out_date='$_SESSION[out]'and room_type='$_SESSION[rtype]'  ";
				 $rs=mysql_query($res,$con);
	if($s1=mysql_fetch_array($rs))
			{
		     
			  echo $maxb=$s1[0];
			
			echo $b=$_SESSION['room']+$maxb;
							  
			 if($noofroom>=$b)
							  {
							  if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
							  {
								  $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$b,$_SESSION[adlt], $_SESSION[ch])";
								 mysql_query($sql,$con);
								 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
					
								 
								 
								 
											}
								 
									 
											}
											 
										 }
			else                         
			 {
				if($noofroom>=$_SESSION['room'])
					{
					echo "success";
					 $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
						 mysql_query($sql,$con);
					
					echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
									 }  }
										
					}
			 
						 
if($_SESSION['rtype']=="superdeluxe")
 	{
	 $res="select max(booked_rooms) from reservation where  in_date='$_SESSION[in]' and out_date='$_SESSION[out]' and room_type='$_SESSION[rtype]' ";
				 $rs=mysql_query($res,$con);
	if($s1=mysql_fetch_array($rs))
			{
		     
			  $maxb=$s1[0];
			
			 $b=$_SESSION['room']+$maxb;
							  
			 if($noofroom>=$b)
							  {
							  if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
							  {
								  $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$b,$_SESSION[adlt], $_SESSION[ch])";
								 mysql_query($sql,$con);
								 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
											}
								 
									 
											}
											 
										 }
			else 
			 {
				if($noofroom>=$_SESSION['room'])
					{
					echo "success";
					 $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
						 mysql_query($sql,$con);
						 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
									 }  }
										
					}



if($_SESSION['rtype']=="suite")
 	{
	 $res="select max(booked_rooms) from reservation where  in_date='$_SESSION[in]' and out_date='$_SESSION[out]' and room_type='$_SESSION[rtype]' ";
				 $rs=mysql_query($res,$con);
	if($s1=mysql_fetch_array($rs))
			{
		     
			  echo $maxb=$s1[0];
			
			echo $b=$_SESSION['room']+$maxb;
							  
			 if($noofroom>=$b)
							  {
							  if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
							  {
								  $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$b,$_SESSION[adlt], $_SESSION[ch])";
								 mysql_query($sql,$con);
								 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
											}
								 
									 
											}
											 
										 }
			else 
			 {
				if($noofroom>=$_SESSION['room'])
					{
					echo "success";
					 $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
						 mysql_query($sql,$con);
						 echo "<script>window.onload=function(){alert('Success....!');window.location='reservation.php';}</script>";
									 }  }
										
					}
			 


			 
}




?>
</body>
</html>
