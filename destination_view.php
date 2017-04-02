<?php
include "admin_header.php";
include "connection.php";

if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
	$id=$_GET['id'];
	$sql="delete from destinations where did='$id'";
	
	$sq=mysql_query($sql,$con);
	}
}




?>
<html>
<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ;">
<span style="color:#00FFFF; font-size:24px; font-style:italic"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


DESTINATIONS</strong></span></br></br>

</br></br>
					
				<center><table id="mytable" style="border:px solid #000000;  color:#CCCCCC">
					  
                      <tr>
                        <td width="37px"style="color:#4D6793"><b> id </td>
                        <td width="82px"style="color:#4D6793"> <b>Name</b> </td>
						<td width="82px"style="color:#4D6793"> <b>District</b> </td>
                        <td width="153px"style="color:#4D6793"> <b>Contact </b></td>
						
                       
                       <td width="85px"style="color:#4D6793"> <b>delete</b> </td>                      
                      </tr>
					 




<?php
	$sql="select * from destinations ";
	$sq=mysql_query($sql,$con);
     while($row=mysql_fetch_array($sq))
	 {
	 
					 $id1=$row['did'];
					 
echo"<tr><td>".$row['did']."</td>";
			echo"<td>".$row['dname']."</td>";
	        echo"<td>".$row['dist']."</td>";
			echo"<td>".$row['contact']."</td>";
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
