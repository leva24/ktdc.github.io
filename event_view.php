<?php
include "admin_header.php";
include "connection.php";

if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	$sql="delete from imp_event where eid='$id'";
	
	$sq=mysql_query($sql,$con);
	}
}




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
                        <td width="82px"style="color:#4D6793"> <b>Name</b> </td>
                        <td width="82px"style="color:#4D6793"> <b>Location</b> </td>
						<td width="82px"style="color:#4D6793"> <b>Detail</b> </td>
                        <td width="153px"style="color:#4D6793"> <b>Date</b></td>
						
                       
                       <td width="85px"style="color:#4D6793"> <b>delete</b> </td>                      
                      </tr>
					 




<?php
	$sql="select * from imp_event ";
	$sq=mysql_query($sql,$con);
     while($row=mysql_fetch_array($sq))
	 {
	 
					 $id1=$row['eid'];
					 
echo"<tr><td>".$row['eid']."</td>";
			echo"<td>".$row['ename']."</td>";
			echo"<td>".$row['loca']."</td>";
	        echo"<td>".$row['edetails']."</td>";
			echo"<td>".$row['date']."</td>";
			?>
			
			
			<td></td>
			<td  width="60"><a href="destination_view.php?action=delete&id=<?php echo $id1; ?>">delete</a></td>
					
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
