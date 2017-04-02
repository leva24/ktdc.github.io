<?php
include"admin_header.php"?>
<div style="background-color:#877D7D">
<table align="center">
                            <form action="add_event_action.php" method="post">
                                <tr><h4>Add Events</h4>
                                
                           </tr>
                                                         <tr>
                                    <td><label>Name</label></td>
                                    <td><input type="text"  required="required"name="name"></td></tr>
                                 <tr>
                                 
                                                         <tr>
                                    <td><label>Location</label></td>
                                    <td><input type="text"  required="required"name="loc"></td></tr>
                                 <tr>
                                
                                  <tr><td><label>Description</label></td><td><textarea rows="5" cols="50" name="description" required>

</textarea></td></tr>
                                 
                                   <tr><td> <label>Date</label></td>
                                   <td> <input type="date" required="required" name="edate"></td></tr>
                                
                                   
                               
                                
                             <tr>
                                <hr>
                                  <td></td><td><input type="submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"  value="ADD"  align="center"></td>
                                  <td><a style=" background-color:#EB090D;color:#F5F2F2; size:10px;" href="event_view.php">View Events >></a></td>
                                  
                                  </tr>
                            </form>
                            </table>
                        </div>
            <?php
include"footer.php"?>         
</body>

</html>


