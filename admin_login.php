
<?php
include "header.php";


?>
<script>
function val()
{
if(document.getElementById('a').value=="")
  {
  alert("please enter the username");
  document.getElementById('a').focus();
  return false;
  }
 
}
</script>
<div style="background-color:#7D2800 ; width:1360px; height:650px; margin-left:-190px ">

<br/>

<img src="images/goa-hotel-swimming-pool.jpg">
<br/><br/>
<font color="#00FFFF" size="+3"><strong><i>Administrator</i></strong></font><br/><br/>
<form name="login" action="admin_process.php" method="post">
<font color="#FFFFFF">username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="logic" name="username" id="a">
Password</font>&nbsp;&nbsp;&nbsp;<input type="password" id="p1" placeholder="***" name="password" maxlength='15' onClick="checkavailable()">
<input type="submit" name="submit" id="bt1"  value="Login"Onclick=" return val()" style="width:90px;height:27px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"/>
<br><br><br><br><br>
<font color="#CCFFCC">This is Administrator login page.<p>admin was controlled by this site </p>
</font>
</form>
</div>
<?php
include "footer.php";
?>