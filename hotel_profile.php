




<?php
include "hotel_header.php";
include "connection.php";
?>
<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ">

<img src="images/Equator-Bar-I.jpg" width="780" height="200"></br></br>
         <center><table width="782" id="mytable" style="border:0px solid #000000; background-color:">
					  
                      <tr></tr>
					  <tr><br>
                        <td width="37px"style="color:black"><b> id </td>
                        <td width="99px"style="color:black"> <b>Name</b> </td>
						<td width="112px"style="color:black"> <b>Location</b> </td>
						<td width="112px"style="color:black"> <b>Facilities</b> </td>
                        <td width="153px"style="color:black"> <b>Description</b></td>
						
                        <td width="105px"style="color:black"> <b>E-mail</b></td>
						<td width="115px"style="color:black"> <b>Contact </b></td>
				
                                         
                      </tr>
				
  <?php
  
  
  $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];
$sql="select  hid  from add_hotel where username='$username'";
$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$hid=$row['hid'];
  
  
		$sql="select * from hotel_info where hid='$hid'";
		$sq= mysql_query($sql,$con);
		$row1=mysql_fetch_array($sq);
		
		
			
					 $id1=$row1['hid'];
					 
echo"<tr><td style=color:white>".$row1['hid']."</td>";
			echo"<td style=color:white>".$row1['hname']."</td>";
	        echo"<td style=color:white>".$row1['location']."</td>";
			 echo"<td style=color:white>".$row1['facilities']."</td>";
			echo"<td style=color:white>".$row1['description']."</td>";
			echo"<td style=color:white>".$row1['email']."</td>";
			echo"<td style=color:white>".$row1['phno']."</td>";
			?>
			<td></td>
			
							
		
	

</table>
</div>
</body>
</html>
<?php
include "footer.php";
?>