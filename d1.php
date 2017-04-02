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
		echo  $noofroom=$row1[2];
		$avail=$row1[3];
		$broom=$row1[4];		
		
		
$res="select in_date,out_date,booked_rooms, max(booked_rooms) from reservation where room_type='$rtype' ";
		 $rs=mysql_query($res,$con);
						if($s1=mysql_fetch_array($rs))
								{
							
								 $out_date=$s1[1];
								 $in_date=$s1[0];
								$booked=$s1[2];
							    $max=$s1[3];
								$_SESSION['booked']=$max;
							echo $total=$room+$max;
							
							
							
	// $r=mysql_query("select datediff($in_date,$out_date)",$con);
				/*if($row=mysql_fetch_array($r)){
					echo $row[0];
						 }*/
				
										if($noofroom>=$total)
										{
										
										 echo $roomavl="SELECT max(booked_rooms) FROM reservation where room_type='".$rtype."'";
										 $result=mysql_query($roomavl,$con);
															if($s1=mysql_fetch_array($result))
																{
																	$z1=$s1[0];
																	$z=0;
																 echo " Not Available";
																//header('location: reservationprocess.php');
																	 $tariff="select total_rooms from tariff where type='".$rtype."'";
																	 $result1=mysql_query($tariff,$con);
																	if($s2=mysql_fetch_array($result1))
																		{ 
																		$z=$s2[0];
																			}
																			echo $y=$z-$z1;
																			
																			if($y>=$_SESSION['room'])
																			{
																			
																			 header('location: reservationprocess.php');
																			}
																			else
																			{
																			echo "Sorry BOOKING IS NOT AVAILABLE ON THIS DATE";
																			}
																	}
																					
														else if( $in>$out_date || $in<$in_date || $out>$out_date && $noofroom>=$total  )
															{
																echo " continue";	
																//header('location: reservationprocess.php');
																
															 }
											
										
										
										}
														else
														{
															echo "<script> window.onload=function()
															{ alert('please enter correct hint');
															window.location='change_password.php'}
															</script>";

														}
										
		         							}
									 else
										{
										echo "jijesh";
										//header('location: reservationprocess.php');
															
										}       
											
									
									
						
			}
 




?>
</body>
</html>
