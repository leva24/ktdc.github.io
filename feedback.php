<?php
 include "connection.php";
 include "user_header.php";
?>
<?php
if(isset($_POST['submit']))
{
	
	 $insert_feedback="insert into feedback(`ymsg`, `name`, `mob`, `email`, `date`) values('".$_POST['ymsg']."','".$_POST['name']."','".$_POST['mno']."','".$_POST['email']."','".$_POST['date']."')";
	$result_signup=mysql_query($insert_feedback); 
	
	
	
	?>
    
	<script>alert("Inserted Successfully");window.location="feedback.php?msg=succ";</script>
	<?php
}
?>
<html>
<body >
<script language="javascript">
function validate()
{
	
	
	 var phoneno = /^\d{10}$/;  
  if(document.getElementById('mob').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
	
	

	if(signup.name.value=='')
	{
		alert("Please enter your name");
		signup.name.focus();
		return false;
	}
	if(signup.mno.value=='')
	{
		alert("Please enter your address");
		signup.mno.focus();
		return false;
	}
	if(signup.email.value=='')
	{
		alert("Please enter your email");
		signup.email.focus();
		return false;
	}
	if(signup.date.value=='')
	{
		alert("Please enter your city");
		signup.date.focus();
		return false;
	}

	if(signup.ymsg.value=='')
	{
		alert("Please enter your password");
		signup.ymsg.focus();
		return false;
	}
}
function checkemail(obj)
{
	var emailAddressEntered = obj.value;
	if ((emailAddressEntered.indexOf('@') < 1) || (emailAddressEntered.lastIndexOf('.') < (emailAddressEntered.indexOf('@') + 2)) || (emailAddressEntered.indexOf('\'') > -1) || (emailAddressEntered.indexOf('"') > -1) ) {
	
		var msg;
		msg = "enter the valid email address..!"
		alert(msg);
		obj.value = ""
		}
}
</script>
<div style=" border-color:#FFFFFF;background-color:#877D7D ; width:1355px; height:590px; margin-left:-30px ;">
<center>
<img src="albums/album5/our_rates.jpg" width="500" height="150">

<table >
  <tr>
    <td width="84%">
<center><table  cellpadding="0" cellspacing="0">
	<form action="feedback.php" name="feedback" method="post" onSubmit="return validate()">
   <tr>
		<td colspan="2" class="errmsg"style="color:#FFFFFF">Your FeedBack process sucessfully added</td>
	</tr>
  <tr>
    <td width="13%" class="generaltext"style="color:#FFFFFF">Your Name</td>
    <td width="87%"><input required type="text" name="name"></td>
  </tr>
  <tr>
    <td class="generaltext" style="color:#FFFFFF">Mobile Number</td>
    <td><input  type="number" id="mob" required name="mno"></td>
  </tr>
  <tr>
    <td class="generaltext" style="color:#FFFFFF">Email</td>
    <td><input type="text" name="email" onChange="checkemail(email)"></td>
  </tr>
  <tr>
    <td class="generaltext"style="color:#FFFFFF">Today Date</td>
    <td><input type="date" name="date" required></td>
  </tr>

   <tr>
    <td class="generaltext"style="color:#FFFFFF">Type Yuor Message</td>
    <td><textarea name="ymsg" cols="20" rows="3" required></textarea></td>
  </tr>
  <tr>
  	<td>
	<input type="submit" name="submit"   id="bt1"  value="Send" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"/>
      
	</td>
  </tr>
 </form> 
</table>
</td>
</tr>
</table>



</div>

<?php
include "footer.php";
?>
</body>
</html>
