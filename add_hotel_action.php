<?php
extract($_REQUEST);
include('connection.php');
$usql="select username from login where username='$username'";
$res=mysql_query($usql);
$num=mysql_num_rows($res);
if($num>0)
{
	?>
	<script>window.alert('Username already taken');
	location.href="add_hotel.php";
	</script>
    <?php
}
else
{
  $sql_login="INSERT INTO login(utype,username,password)VALUES('hotel','$username','$password')";

 $result1=mysql_query($sql_login);
 $uid=mysql_insert_id();
 $sql_hotel="INSERT INTO `add_hotel`(`dist`,name,`manager`, `contact`, `username`, `password`) VALUES ('$dist','$name','$manager','$contact','$username','$password')";
$result2=mysql_query($sql_hotel);


if($result2)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='add_hotel.php';
    </script>
    <?php
}



}
?>
