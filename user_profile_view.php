<?php
include "user_header.php";
include "connection.php";


?>



<html>
<head>
</head>

<body>
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ">

<img src="images/Equator-Bar-I.jpg" width="780" height="200"></br></br>
         <center><table width="782" id="mytable" style="border:0px solid #000000; position:relative; left:100px; background-color:">
					  
                      <tr></tr>
					  <tr><br>
                        <td width="37px"style="color:black"><b> id </td>
                        <td width="99px"style="color:black"> <b>Name</b> </td>
						<td width="112px"style="color:black"> <b>Hname</b> </td>
						<td width="112px"style="color:black"> <b>Email</b> </td>
                        <td width="153px"style="color:black"> <b>Contact </b></td>
						<td><a style="background-color:#EB090D;color:#F5F2F2; size:10px;"href="user_profile_edit.php">Edit Profile details >></a></td>
                                             
                      </tr>
				
  <?php
  
  
   $uid=$_SESSION['uid'];
  $username=$_SESSION['username'];

  
  
		$sql="select * from  registration where username='$username'";
		$sq= mysql_query($sql,$con);
		while($row=mysql_fetch_array($sq))
		{
		
		
					 //$id1=$row['id'];
					 
echo"<tr><td style=color:white>".$row['id']."</td>";
			echo"<td style=color:white>".$row['name']."</td>";
	        echo"<td style=color:white>".$row['address']."</td>";
			 echo"<td style=color:white>".$row['email']."</td>";
			echo"<td style=color:white>".$row['phoneno']."</td>";
			
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