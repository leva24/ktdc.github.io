<?php include'hotel_header.php'?>

       <div style="background-color:#877D7D">
       <table align="center" style="position:relative; left:100px;">
                            <form action="addroom_action.php" method="post">
                                <tr><h4>Add New Hotels</h4>
                                
                           
                                        <td><label>Select Room Type</label></td>
                                    <td><select  name="type" required>
                                    
                                                        <option value="Super-Deluxe">Super-Deluxe</option>
                                                        <option value="Deluxe">Deluxe</option>
                                                        <option value="Standard">Standard</option>
                                                        
                                                        </select></td></tr>
                                                         <tr>
                                    <td><label>Rate</label></td>
                                    <td><input  type="number" required name="rate"></td></tr>
                                 <tr>
                                <tr>
                                    <td><label>qty</label></td>
                                    <td><input  type="number" required name="qty"></td></tr>
                                
                             <tr>
                                <hr>
                                <td></td><td><input type="submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"  value="ADD"  align="center"></td>
                                
                                
                                <td><a style=" background-color:#EB090D;color:#F5F2F2; size:10px;" href="hotel_room_view.php">View Rooms >></a></td>
                                
                                
                                </tr>
                            </form>
                            </table>
                            </div>

       
            <?php
include "footer.php";
?>

            