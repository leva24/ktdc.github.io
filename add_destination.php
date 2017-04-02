<?php
include"admin_header.php"?>

<html>
<head>
<script>
function validate()
  {
	  
	  
	  
	  
	  
		   var phoneno = /^\d{10}$/;  
  if(document.getElementById('ph1').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
	  
	
	  
	  
  
  }
</script>
</head>
<body>




<div style="background-color:#877D7D">




<table align="center" style=" position:relative; left:100px;">
                            <form action="add_destin_action.php" method="post">
                                <tr><h4>Add Destinations</h4>
                               
                                        <td><label>Select District</label></td>
                                    <td><select  name="dist" required="required">
                                    <option value="Eranakulam">Eranakulam</option>
                                                        <option value="Idukki">Idukki</option>
                                                        <option value="Kannur">Kannur</option>
                                                        <option value="Kasargod">Kasargod</option>
                                                        <option value="Kollam">Kollam</option>
                                                        <option value="Kottayam">Kottayam</option>
                                                        <option value="Kozhikode">Kozhikode</option>
                                                        <option value="Malappram">Malappuram</option>
                                                        <option value="Palakkadu">Palakkadu</option>
                                                        <option value="Pathanamthitta" >Pathanamthitta</option>
                                                        <option value="Thiruvananthapuram">Thiruvananthapuam</option>
                                                        <option value="Thrissur">Thrissur</option>
                                                        <option value="Wayanadu">Wayanadu</option>
                                                        </select></td></tr>
                                                         <tr>
                                    <td><label>Name</label></td>
                                    <td><input type="text" name="name" required></td></tr>
                                 <tr>
                                <tr>
                                    <td><label>Location</label></td>
                                    <td><input type="text" name="loc" required></td></tr>
                                 <tr><td><label>Description</label></td><td><textarea rows="5" cols="50" name="description" required>

</textarea></td></tr>
                                 
                                   
                                   
                                     <tr><td> <label>Contact</label></td>
                                   <td> <input type="number" name="contact" required id="ph1"></td></tr>
                               
                                
                             <tr>
                                <hr>
                                 <td></td><td><input type="submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"  value="ADD"  align="center" Onclick=" return validate()"></td>
                                 
                                 <td><a style=" background-color:#EB090D;color:#F5F2F2; size:10px;" href="destination_view.php">View destinations >></a></td>
                                 </tr>
                            </form>
                            </table>
                        </div>
        <?php
include"footer.php"?>          
</body>

</html>


