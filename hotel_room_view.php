<?php
include "hotel_header.php";
include "connection.php";


?>
<html>
<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ;">
<span style="color:#00FFFF; font-size:24px; font-style:italic"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


EVENTS</strong></span></br></br>

</br></br>
					
				<center><table id="mytable" style="border:px solid #000000;  color:#CCCCCC">
					  
                      <tr>
                        <td width="37px"style="color:#4D6793"><b> id </td>
                        <td width="82px"style="color:#4D6793"> <b>Type</b> </td>
						<td width="82px"style="color:#4D6793"> <b>Rate</b> </td>
                        <td width="153px"style="color:#4D6793"> <b>Quantity</b></td>
						
                       
                       <td width="85px"style="color:#4D6793"> <b>Free Rooms</b> </td>                      
                      </tr>
					 




<?php
	 $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];
$sql="select  hid  from add_hotel where username='$username'";
$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$hid=$row['hid'];
  
  
		$sql="select * from add_room where hid='$hid'";
		$sq= mysql_query($sql,$con);
		
		
     while($row1=mysql_fetch_array($sq))
	 {
	 
					 //$id1=$row['rid'];
					 
echo"<tr><td>".$row1['rid']."</td>";
			echo"<td>".$row1['rmtype']."</td>";
	        echo"<td>".$row1['rate']."</td>";
			echo"<td>".$row1['qty']."</td>";
			echo"<td>".$row1['free']."</td>";
			?>
			
			
			
					
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
