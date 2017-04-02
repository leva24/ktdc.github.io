<?php
include "admin_header.php";
include "connection.php";

if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	
	//login tbl delete
	$sq1="select username from add_hotel  where hid='$id'"; 
	$r=mysql_query($sq1);
	$row=mysql_fetch_array($r);
	$log=$row[0];
	
	$sq3="delete from login where username='$log'";
	$r1=mysql_query($sq3);
	
	
	
	//hotel info delete
	$sq4="delete from hotel_info where hid='$id'";
	$r2=mysql_query($sq4);
	$sq5="delete from add_room where hid='$id'";
	$r3=mysql_query($sq5);
	
	
	
	
	
	
	//hotel main delete
	$sql="delete from add_hotel where hid='$id'";
	$sq=mysql_query($sql,$con);
	}
}




?>
<html>
<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ;">
<span style="color:#00FFFF; font-size:24px; font-style:italic"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


REGISTERED USERS</strong></span></br></br>
<img src="images/LVSR_golf_course.jpg" width="780" height="200">
</br></br>
					
				<center><table id="mytable" style="border:px solid #000000;  color:#CCCCCC">
					  
                      <tr>
                        <td width="37px"style=" color:black"><b> id </td>
                        <td width="82px"style="color:black"> <b>Name</b> </td>
						<td width="82px"style="color:black"> <b>District</b> </td>
                        <td width="153px"style="color:black"> <b>Manager</b></td>
						
                        <td width="95px"style="color:black"> <b>Contact </b></td>
						
						<td width="105px"style="color:black"> <b>Username</b> </td>
				
						<td width="75px"style="color:black"> <b>Password</b> </td><td></td>
                       <td width="85px"style="color:black"> <b>delete</b> </td>                      
                      </tr>
					 




<?php
	$sql="select * from add_hotel ";
	$sq=mysql_query($sql,$con);
     while($row=mysql_fetch_array($sq))
	 {
	 
					 $id1=$row['hid'];
					 
echo"<tr><td>".$row['hid']."</td>";
			echo"<td>".$row['name']."</td>";
	        echo"<td>".$row['dist']."</td>";
			echo"<td>".$row['manager']."</td>";
			echo"<td>".$row['contact']."</td>";
			echo"<td>".$row['username']."</td>";
			echo"<td>".$row['password']."</td>";
	
		?>
			
			
			<td></td>
			<td  width="60"><a href="adminhotelview.php?action=delete&id=<?php echo $id1; ?>">delete</a></td>
					
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
