<?php
extract($_REQUEST);
include("connection.php");
//print_r($_REQUEST);
  $sql="INSERT INTO `imp_event`(`ename`, `edetails`, `date`,loca) VALUES ('$name','$description','$edate','$loc')";

$result=mysql_query($sql);


if($result)
{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='update_event.php';
    </script>
    <?php
}
?>
