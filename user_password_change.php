<?php
include "user_header.php";
include "connection.php";
?>








<html>
<head>





<script>
  function validate()
  {
	  
	  
	  var passw=  /^\w{5,14}$/;  
if(document.getElementById('p1').value.match(passw))     
{   
 
return true;  
}  
else  
{   
alert('Password must be 5 to 15 characters long!')  
return false;  
}  
	  
	  
	  
	
	  
	  //password validate
	  var password = document.getElementById("p1").value;
        var confirmPassword = document.getElementById("p2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
	  
	  
	  
  if(document.getElementById('a').value=="")
{
alert("Enter name");
document.getElementById('a').focus();
return false;
}
if(document.getElementById('a').value!="")
{
var firstname = document.getElementById("a");
    var alpha = /^[a-zA-Z\s-, ]+$/; 
	if (!firstname.value.match(alpha)) {
        alert('only letters ');       
        return false;
   }
}
if(document.getElementById('dddd').value=="")
{
alert("Enter address");
document.getElementById('dddd').focus();
return false;
}
return true;



  }
  </script>
















</head>


<body >
<div style="background-color:#877D7D ; width:1355px; height:auto; margin-left:-30px ;">
	 
            <form name="form1" method ="POST" action="user_password_change_action.php">
  <center> <table border="0" height="430px" width="394" style="margin-left:100px">

  
   
 
  <tr><td><font color="#FFFFFF">Password</td><td> <input type="password" id="p1" placeholder="***" name="pwd" maxlength='15' onClick="checkavailable()" required > </td></tr>
    <tr><td><font color="#FFFFFF">Confirm Password</td><td> <input type="password"  placeholder="***"id="p2" name="cpwd" maxlength='15' required > </td></tr></font>
	<tr><td></td><td><input type="submit" name="submit" id="bt1"  value="Submit" Onclick=" return validate()" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"/></td></tr>
  </table></center>
  <span class="style1"></span>
 

</form>
</div>
          </div>
        </section>
		
      </div>
    </div>
  </div>
</div>


</body>
</html>


<?php
include "footer.php";
?>