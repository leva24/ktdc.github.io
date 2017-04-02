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


  <?php
	extract($_REQUEST);
	include('connection.php');
	$sql="SELECT * FROM hotel_info where hid='".$hid."'";
    $result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$hid=$row['hid'];
	$hname=$row['hname'];
	$location=$row['location'];	
	?>   
                          <h3 style="vertical-align">Book Your Room <?php echo $hname; ?> at <?php echo $location;?> </h3> <br />
                              
       <?php                                 


$x=200;
	 $sql="SELECT * FROM add_room where hid='".$hid."'";
    $result=mysql_query($sql);
while($rowrm=mysql_fetch_array($result)){
	echo '<br /><br />
    '. $rowrm['rmtype']. '  (Rs:'.$rowrm['rate'].'/per room)'?>
    <input type="number" name="<?php echo  $rowrm['rmtype'];?>" placeholder="Number Of Rooms" /><br /><br />
    
    <?php


}
					?>
           <input type="submit" name="BOOK_NOW" value="SUBMIT" />     
       
</body>

</html>