<?php
include'hotel_header.php'?>




<script>
function validate()
  {
	  
	  
	  
	  
	  
		   var phoneno = /^\d{10}$/;  
  if(document.getElementById('phno').value.match(phoneno))  
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




<div style="background-color:#877D7D">
<table align="center" style="position:relative; left:100px;">
                            <form action="hotel_edit_action.php" method="post" enctype="multipart/form-data">
                                <tr><h4>Add Hotel Description</h4>
                                
                           
                                    
                                        <td><label>Select District</label></td>
                                    <td><select  name="dist" required>
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
                                    <td><input type="text" name="name" required="required"></td></tr>
                                 <tr>
                                <tr>
                                    <td><label>Location</label></td>
                                    <td><input type="text" name="location" required="required"></td></tr>
                                 <tr>
                                    <td><label>Facilities</label></td>
                                   <td> <input type="text" name="facil" required="required"></td></tr>
                                 
                                  <tr><td><label>Description</label></td><td><textarea rows="5" cols="50" name="description">

</textarea></td></tr>
                                
                                   
                               <tr><td> <label>E-mail</label></td>
                                   <td> <input type="email" name="email" required="required"> </td></tr>
                                <tr><td> <label>Contact</label></td>
                                   <td> <input  type="number" name="contact" id="phno" required="required"></td></tr>
                             <tr>
                             
                            
                                <hr>
                              <td></td><td><input type="submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"  value="ADD"  onclick="return validate()" align="center"></td></tr>
                            </form>
                            </table>
                        </div>
<?php
include "footer.php";
?>                  
</body>

</html>


