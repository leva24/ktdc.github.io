<?php
session_start();

/*$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["filetouplad"]["name"]);

echo $templeimage=$_FILES["filetouplad"]["name"];
 if(move_uploaded_file($_FILES["filetouplad"]["tmp_name"],$target_file)) {
      
	  echo "The file ". basename( $_FILES["filetouplad"]["name"]). " has been uploaded.";

	  $full=$target_dir.basename( $_FILES["filetouplad"]["name"]);
	  echo $full;
    } 
	
	else {
       
	   
	    echo "Sorry, there was an error uploading your file.";
    }*/

	
extract($_REQUEST);
//print_r($_REQUEST);
include('connection.php');
$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$sql="select  hid  from add_hotel where username='$username'";
$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$hid=$row['hid'];
$w="select * from hotel_info where hid='$hid'";
$r=mysql_query($w);
$row=mysql_num_rows($r);	
if($row>0)
{
?>
<script>
alert("Not Possible");
 document.location.href='hoteldescript.php';
</script>
<?php
}
else
{
 $sql="INSERT INTO `hotel_info`(hid,hname,dist,`location`, `facilities`, `description`,`email`, `phno`) VALUES ('$hid','$name','$dist','$location','$facil','$description','$email','$contact')";

$result=mysql_query($sql);
if($result)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='hoteldescript.php';
    </script>
    <?php
}
$sql_room1="INSERT INTO   add_room(hid,rmtype) VALUES ('$hid ','Super-Deluxe')";
$sql_room2="INSERT INTO   add_room(hid,rmtype) VALUES ('$hid ','Deluxe')";
$sql_room3="INSERT INTO   add_room(hid,rmtype) VALUES ('$hid ','Standard')";
$result1=mysql_query($sql_room1);
$result1=mysql_query($sql_room2);
$result1=mysql_query($sql_room3);
}
?>
//<?php
//$q="select * from hotel_info where hid='$hid'";
//$r=mysql_query($q);
//$row=mysql_fetch_array($r);
//echo "<img src='".$row['himg']."'>";
//?>