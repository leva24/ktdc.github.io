<?php
session_start();
//print_r($_REQUEST);
include('connection.php');
extract($_REQUEST);
$uid=$_SESSION['username'];

$sql="select  hid  from add_hotel where username='$uid'";
$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$hid=$row[0];
 if($type=='Super-Deluxe')
 {
	 $q="update add_room set qty='$qty',rate='$rate',free='".$qty."'+free where rmtype='Super-Deluxe' and hid='$hid'";
	  $result1=mysql_query($q);
	  if($result1)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='addroom.php';
    </script>
    <?php
}
 }
 elseif($type=='Deluxe')
 {
	 $q1="update add_room set qty='$qty',rate='$rate',free='".$qty."'+free where rmtype='Deluxe' and hid='$hid'";
	  $result2=mysql_query($q1);
	    if($result2)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='addroom.php';
    </script>
    <?php
}
 }
 else
 {
	 $q2="update add_room set qty='$qty',rate='$rate',free='".$qty."'+free where rmtype='Standard' and hid='$hid'";
	  $result3=mysql_query($q2);
	  if($result3)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='addroom.php';
    </script>
    <?php
}
 }

?>


