<script>







function validate()
  {
	  
	  
	  
	  
	  
		   var phoneno = /^\d{10}$/;  
  if(document.getElementById('contact').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
	  
	//password validate
	  
	  var passw=  /^\w{5,14}$/;  
if(document.getElementById('pwd').value.match(passw))     
{   
 
return true;  
}  
else  
{   
alert('Password must be 5 to 15 characters long!')  
return false;  
}  
	  
	  
	  
  if(document.getElementById('name').value=="")
{
alert("Enter name");
document.getElementById('name').focus();
return false;
}

if(document.getElementById('contact').value=="")
{
alert("Enter contact number");
document.getElementById('contact').focus();
return false;
}

if(document.getElementById('user').value=="")
{
alert("Enter user name");
document.getElementById('user').focus();
return false;
}
if(document.getElementById('pwd').value=="")
{
alert("Enter password name");
document.getElementById('pwd').focus();
return false;
}
return true;
  }
  </script>






<?php
include'admin_header.php'?>
<div style="background-color:#877D7D;">

<table align="center" style="position:relative; left:100px;">
                            <form action="add_hotel_action.php" method="post">
                                <tr><h4>Add New Hotels</h4>
                                
                          
                          
                                        <td><label>Select District</label></td>
                                    <td><select  name="dist" id="dist" required="required">
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
                                    <td><input type="text" id="name" name="name" required="required"></td></tr>
                                    
                                     
                                 <tr>
                                <tr>
                                    <td><label>Manager in-charge</label></td>
                                    <td><input type="text" name="manager" required="required"></td></tr>
                                 <tr>
                                    <td><label>Contact Number:</label></td>
                                   <td> <input type="text" name="contact" id="contact" required="required"></td></tr>
                                 
                                   <tr><td> <label>Username</label></td>
                                   <td> <input type="text" name="username" id="user" required="required"></td></tr>
                                
                                    <tr><td><label>Password</label></td>
                                    <td><input type="text" name="password" id="pwd" required="required"ss></td></tr>
                               
                                
                             <tr>
                                <hr>
                                <td></td><td><input type="submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"  Onclick=" return validate()" value="ADD"  align="center"></td>
                                
                                <td><a style="background-color:#EB090D;color:#F5F2F2; size:10px;"href="adminhotelview.php">View Hotel details >></a></td>
                                
                                
                                
                                
                                </tr>
                            </form>
                            </table>
                        </div>
 <?php
include'footer.php'?>                 
</body>

</html>
