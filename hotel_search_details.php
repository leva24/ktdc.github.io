<html>
<head>
<style>
.content
{
	display:inline;
	float:left;
}
#a1:hover
{
	background-color:red;
}
</style>
</head>
<body>	
<?php
include 'user_header.php';
?>





        
               
          
                <h3 style="vertical-align:">Available Hotels</h3>
                
                        
                                     
                                         <?php
										 extract($_REQUEST);
							include('connection.php');
//date free function
		 $query="select CURDATE() as cdate,r.* from reservation r";
		$query1=mysql_query($query);
		while($res1=mysql_fetch_array($query1)){
			 $curdate1=$res1['cdate'];
		 	echo $outDate=$res1['out_date'];
		 	if($outDate<=$curdate1){
		 		$id=$res1['id'];
		 		$rooms=$res1['rooms'];
		 		$roomtype=$res1['room_type'];
		 		 $del="delete from reservation where id=$id";
		 		 mysql_query($del);

		 		echo $ad="select * from add_room where rmtype='$roomtype'";
		 		 $ad1=mysql_query($ad);
		 		 while($ad2=mysql_fetch_array($ad1))
		 		 {
		 		 	$qty=$ad2['qty'];
		 		 	$free=$ad2['free'];
		 		 }

		 		echo $update="update add_room set qty=$rooms+$qty ,free=$rooms+$free where rmtype='$roomtype'";
		 		 mysql_query($update);


		 		
		 	}

		}

 $sql="SELECT distinct hi.hid,hi.*,ar.* FROM hotel_info hi, add_room ar WHERE hi.hid=ar.hid AND dist='".$_POST['dist']."' AND ar.free > 0";
$result=mysql_query($sql);

$res=mysql_num_rows($result);

if($res==0){
	echo "<script>alert('no records available');
			document.location.href='user_home.php';</script>";
}
else{
$x=400;
while($row=mysql_fetch_array($result))
{
 $hid=$row['hid'];
 echo '<div "class="container" style=" background-color:#877D7D; top:'.$x.'px;height:160px;border:2px solid black;position:absolute;left:325px; width:900px;">';	
	
	echo '<div id="pic1" align="left" class="content">';	
  echo '<img src="images2/ktdc.png" alt="Image Alternative text" width="130px" height="160px"/>';
  echo '<h3 class="booking-item-title" style=" position:relative; left:145px; top:-160px;"></h5>';
  
  echo '<h4 class="booking-item-title" style="position:relative; left:145px; top:-150px;">'.$row[2].'</h4>';
  
  
  echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;">'.$row[4].$row[7].'</h5>';
  
  
  //echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;">'.$row[12].'</h5>';
  echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;">'.$row[5].'</h3>';
  // echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;"> Rate '.$row[13].' Rs</h5>';
  echo '<br>';
  echo '<h4 class="booking-item-title" style="position:relative; left:145px; top:-150px;"> '.$row[11].'</h4>';
  
  echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;"> Rate '.$row[12].' Rs</h5>';
    
  echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;">'.$row[13].' Total</h5>';
  echo '<h5 class="booking-item-title" style="position:relative; left:145px; top:-150px;">'.$row[14].' Available</h5>';
    echo '</div>';  
	echo '<div id="desc" class="content" align="left">';
	//echo '<h5 class="booking-item-title" style="position:relative; left:180px;">'.$row[4].'</h5>';
	echo '</div>';
	
	echo '<div id="desc" class="content" align="left">';
	echo '<a id="a1" href="bookroom1.php?hid='.$hid.'&rmtype='.$row[11].' &avail='.$row[14].'" style=" text-decoration:none; position:absolute; left:700px; top:110px;">
	<h4 id="head4"  style=" center;text-align:center; width:90px; height:20px;color:white;background-color:rgba(255,0,0,0.5);">Book Now</h4></a>';
	echo '</div>';
	
  echo '</div>';
  $x=$x+170;
}

}
	


				?>
                
                




       
</body>

</html>