<?php
//session_start();
include "connection.php";
if(isset($_GET['action']))
	{
		$id2=$_GET['id'];
		$hid=$_GET['hid'];
		$rm=$_GET['rooms'];
		$qry="UPDATE add_room
		SET free=free+".$rm."
		WHERE hid=".$hid."";
		mysql_query($qry,$con);
		
		$sql1="delete  from reservation where id='$id2'";
		mysql_query($sql1,$con);	
	}	
?>



<html>
<head>
</head>
<?php
include "admin_header.php";

?>
<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ">

<img src="images/Equator-Bar-I.jpg" width="780" height="200"></br></br>
         <center><table width="1300" id="mytable" style="border:0px solid #000000; background-color:">
					  
                      <tr></tr>
					  <tr><br>
                        <td width="37px"style="color:black"><b> id </td>
                        <td width="99px"style="color:black"> <b>check in</b> </td>
						<td width="112px"style="color:black"> <b>check out</b> </td>
						<td width="112px"style="color:black"> <b>type</b> </td>
                        <td width="153px"style="color:black"> <b>no rooms </b></td>
						
                        <td width="105px"style="color:black"> <b>Adults</b></td>
						<td width="115px"style="color:black"> <b>Childrens </b></td>
                        <td width="115px"style="color:black"> <b>Ref. Id </b></td>
				<td width="115px"style="color:black"> <b>Username </b></td>
                       <td width="15px"style="color:black"> <b>cancellation</b> </td>                      
                      </tr>
				
  <?php
		$sql="select * from  reservation  ";
		$sq= mysql_query($sql,$con);
		while($row=mysql_fetch_array($sq))
		{
		
		
					 $id1=$row['id'];
					 
echo"<tr><td style=color:white>".$row['id']."</td>";
			echo"<td style=color:white>".$row['in_date']."</td>";
	        echo"<td style=color:white>".$row['out_date']."</td>";
			 echo"<td style=color:white>".$row['room_type']."</td>";
			echo"<td style=color:white>".$row['rooms']."</td>";
			echo"<td style=color:white>".$row['adults']."</td>";
			echo"<td style=color:white>".$row['childrens']."</td>";
			echo"<td style=color:white>".$row['uniq_id']."</td>";
			echo"<td style=color:white>".$row['uname']."</td>";
			?>
			<td></td>
			<td  width="60"><a href="reserved_users.php?action=delete&id=<?php echo $id1; ?>&rooms=<?php echo $row['rooms'];?>&hid=<?php echo $row['hid']?> ">cancel</a></td>
							
		
		<?php
		
         }
    ?>

</table>
</div>
</body>
</html>
<?php
include "footer.php";
?>