
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>registration form</title>
<?php
include "user_header.php";
?>

<style type="text/css">
<!--
.style1 {font-family: Forte}
-->
</style>
</head>
 <script>
 

 
 
				function checkavailable()
				{
					//alert("aaaaaaaa");
					xmlHttp1=GetXmlHttpObject();
					var x2=document.getElementById('p').value;	
					if(xmlHttp1==null)
					{
						alert("Browser does not support HTTP request");
						return;
					}
				    url="ajax1.php";
					url+="?btch="+x2;
					url+="&sid="+Math.random();
					xmlHttp1.onreadystatechange=stateChanged;
					xmlHttp1.open("GET",url,true);
					xmlHttp1.send(null);
				}
    
    
				function GetXmlHttpObject()
				{
					var xmlHttp=null;
					try
					{
						xmlHttp=new XMLHttpRequest(); 
					}
					catch(e)
					{
						try
						{
							xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
						}
						catch(e)
						{
							xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
						}
					}
					return xmlHttp;
				}
  
 
  
  </script>
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
	  
	  
	  
	  //phone validate
	   var phoneno = /^\d{10}$/;  
  if(document.getElementById('m2').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
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
	 
            <form name="form1" method ="POST" action="user_profile_edit_action.php">
  <center> <table border="0" height="430px" width="394" style="margin-left:100px">

  <tr>
    <td width="99" ><font color="#FFFFFF"> Name</td>
    <td width="181"> <input type="text" placeholder="logic" name="f1" id="a" required> </td></tr>
  <tr><td><font color="#FFFFFF">House name</td><td> <textarea  id="dddd" name="addr" required> </textarea></td></tr>
   <tr><td><font color="#FFFFFF">Email</td><td><input type="email" name="e1" id="p" placeholder="cc@gmail.com" required> </td> <td width="10"> <div id="u1" style="color:#000000">  </div> </td></tr>
    <tr><td><font color="#FFFFFF">Mobile</td><td> <input type="number"  placeholder="1234567890" id="m2" name="mobile" maxlength='10'  required> </td></tr>
  
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

<?php
include "footer.php";
?>
</body>
</html>






