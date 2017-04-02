<?php
include "admin_header.php";
include "connection.php";



if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	
 
	$sq1="select username from registration  where id='$id'"; 
	$r=mysql_query($sq1);
	$row=mysql_fetch_array($r);
	$log=$row[0];
	
	$sq3="delete from login where username='$log'";
	$r1=mysql_query($sq3);
	
	$sql="delete from registration where id='$id'";
	
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
                        <td width="37px"style="color:#4D6793"><b> id </td>
                        <td width="82px"style="color:#4D6793"> <b>Name</b> </td>
						<td width="82px"style="color:#4D6793"> <b>Address</b> </td>
                        <td width="153px"style="color:#4D6793"> <b>Email </b></td>
						
                        <td width="95px"style="color:#4D6793"> <b>Phone </b></td>
						<td width="75px"style="color:#4D6793"> <b>Gender </b></td>
						<td width="105px"style="color:#4D6793"> <b>Username</b> </td>
				
						<td width="75px"style="color:#4D6793"> <b>Password</b> </td><td></td>
                       <td width="85px"style="color:#4D6793"> <b>delete</b> </td>                      
                      </tr>
					 




<?php
	$sql="select * from registration ";
	$sq=mysql_query($sql,$con);
     while($row=mysql_fetch_array($sq))
	 {
	 
					 $id1=$row['id'];
					 
echo"<tr><td>".$row['id']."</td>";
			echo"<td>".$row['name']."</td>";
	        echo"<td>".$row['address']."</td>";
			echo"<td>".$row['email']."</td>";
			echo"<td>".$row['phoneno']."</td>";
			echo"<td>".$row['gender']."</td>";
			echo"<td>".$row['username']."</td>";
	
			echo"<td>".$row['password']."</td>";?>
			
			
			<td></td>
			<td  width="60"><a href="registered_users.php?action=delete&id=<?php echo $id1; ?>">delete</a></td>
					
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
