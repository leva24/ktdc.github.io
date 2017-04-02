<?php
session_start();
include "connection.php";
			echo " Available";

   $_SESSION['ch'];
   $_SESSION['adlt'];
   $_SESSION['room'];
    echo $_SESSION['rtype'];
  $_SESSION['in'];
   $_SESSION['out'];
   $_SESSION['booked'];
 //
  $broom =0;
 if($_SESSION['rtype']=="standard")
 	{
	 $res="select max(booked_rooms),in_date,out_date from reservation where room_type='$_SESSION[rtype]' ";
				 $rs=mysql_query($res,$con);
	while($s1=mysql_fetch_array($rs))
			{
		     
			  $broom=$s1[0];
			echo  $in=$s1[1];
			 echo $out=$s1[2];
			  $x=$broom+$_SESSION['room'];
           if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
		   {
		   		echo $se="select max(booked_rooms)from reservation where in_date='$_SESSION[in]' and out_date='$_SESSION[out]'";
				$r=mysql_query($se,$con);
					if($ss=mysql_fetch_array($r))
							{
							 
							  $b=$_SESSION['room']+$ss[0];
							  
								 echo $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$b,$_SESSION[adlt], $_SESSION[ch])";
								 mysql_query($sql,$con);
											 }
			 }
			 
			 else
			 {
			 echo "success";
			 	echo $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
 mysql_query($sql,$con);
			 }
			 
}
}

if($_SESSION['rtype']=="deluxe")
 	{
	
       $res="select  max(booked_rooms),in_date,out_date from reservation where room_type='$_SESSION[rtype]'";
				 $rs=mysql_query($res,$con);
				 while($s1=mysql_fetch_array($rs))
			{
			
		echo  $in=$s1[1];
			 echo $out=$s1[2];
			  $broom=$s1[0];
			  $x=$broom+$_SESSION['room'];
			   if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
		   {
			  
 echo $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$x,$_SESSION[adlt], $_SESSION[ch])";
 mysql_query($sql,$con);
			 
			 }
			  else
			 {
			 	echo $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
 mysql_query($sql,$con);
			 }
			 
}     
}
if($_SESSION['rtype']=="superdeluxe")
 	{
	
	$res="select  max(booked_rooms),in_date,out_date  from reservation where room_type='$_SESSION[rtype]' ";
				 $rs=mysql_query($res,$con);
	while($s1=mysql_fetch_array($rs))
			{
		       echo  $in=$s1[1];
			   echo $out=$s1[2];
			  $broom=$s1[0];
			  $x=$broom+$_SESSION['room'];
			     if ($in==$_SESSION['in'] && $out==$_SESSION['out'])
		   {
 echo $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$x,$_SESSION[adlt], $_SESSION[ch])";
 mysql_query($sql,$con);
			 
			 }
			  else
			 {
			 	echo $sql="insert into reservation (room_type,in_date,out_date,rooms,booked_rooms,adults,childrens)values ('$_SESSION[rtype]','$_SESSION[in]','$_SESSION[out]',$_SESSION[room],$_SESSION[room],$_SESSION[adlt], $_SESSION[ch])";
 mysql_query($sql,$con);
			 }
			 
}
}
/* $sq="update tariff set booked_rooms = (booked_rooms+$rooms), availablerooms=(total_rooms-booked_rooms) where type='$ddlroom'";
  mysql_query($sq,$con);*/
 /* $r=mysql_query("select datediff($in_date,$out_date)",$con);
		if($row=mysql_fetch_array($r)){
			echo $row[0];
			}*/
?>