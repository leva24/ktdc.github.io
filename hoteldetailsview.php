<?php
include "admin_header.php";
?>
<div style="background-color:#7D2800 ; width:1355px; height:650px; margin-left:-180px ">
        <h5><?php echo $_SESSION['username'];?></h5>
                           
                <table  border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>District</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Manager Name</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            
                            <?php
						include "connection.php";

echo $sql="SELECT `hid`, `dist`, `type`, `name`, `location`, `manager`, `contact` FROM `add_hotel` ";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	


								echo "<tr>";
                                echo "<td class='booking-history-type'>".$row[0]."</td>";
                                echo "<td class='booking-history-title'>".$row[1]."</td>";
								
                                echo "<td>".$row[2]."</td>";
                                echo "<td>".$row[3]."</td>";
                                echo "<td>".$row[4]."</td>";
                                echo "<td>".$row[5]."</td>";
                                echo "<td>".$row[6]."</td>";
                                }
								echo "</tr>";
								?>
                            
                        </tbody>
                    </table>
               
 </div>
    	
<?php
include "footer.php";
?>
</body>

</html>


