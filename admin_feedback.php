<?php
include "connection.php";
?>


<?php
include "admin_header.php";

?>
<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ">

<img src="images/Equator-Bar-I.jpg" width="780" height="200"></br></br>
         <center><table id="mytable" style="border:0px solid #000000; background-color:">
				<font color="#00FFCC"><strong><b><i><big>Feedback Details</big></i></b></strong></font>
                      <tr></tr>
					  <tr><br>
                        <td width="99px"style="color:#4D6793"> <b>name</b> </td>
						<td width="112px"style="color:#4D6793"> <b>Mobileno</b> </td>
                        <td width="153px"style="color:#4D6793"> <b>email</b></td>
						
                        <td width="105px"style="color:#4D6793"> Date<b></b></td>
						<td width="115px"style="color:#4D6793"> <b>messege</b></td>
				
                                           
                      </tr>
				
  <?php
		$sql="select * from  feedback ";
		$sq= mysql_query($sql,$con);
		while($row=mysql_fetch_array($sq))
		{
		
		
			
				
					 

			echo"<tr><td style=color:white>".$row['name']."</td>";
	        echo"<td style=color:white>".$row['mob']."</td>";
			echo"<td style=color:white>".$row['email']."</td>";
			echo"<td style=color:white>".$row['date']."</td>";
			echo"<td style=color:white>".$row['ymsg']."</td>";
			?>
			<td></td>
							
		
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