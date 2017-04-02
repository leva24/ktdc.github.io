<?php
extract($_REQUEST);
include("connection.php");
//print_r($_REQUEST);
  $sql="INSERT INTO `destinations`(`dname`, `dist`, `location`, `descript`,`contact`) VALUES ('$name','$dist','$loc','$description','$contact')";

$result=mysql_query($sql);


if($result)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='add_destination.php';
    </script>
    <?php
}
?>
