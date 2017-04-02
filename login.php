<?php


	include "header.php";
?>
<script language="javascript" type="text/javascript">
function fun_val()
	{
		var l=document.loginform.username.value;
		
		var p=document.loginform.password.value;
		if(p==""||l=="")
		{
			alert("Invalid/Incomplete Details");
			document.loginform.username.focus;
		}
	}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:387px;
	height:118px;
	z-index:1;
	left: 3px;
	top: 357px;
}
#Layer2 {
	position:absolute;
	width:438px;
	height:177px;
	z-index:2;
	left: 885px;
	top: 337px;
}
-->
</style>
</head>

<body>
<div style="background-color:#877D7D ; width:1350px; height:400px; margin-left:-20px;  ">
 
  <p > 
  
  <p align="center"><br>
<div id="Layer1"></div>
<TR></tr>
<form name="loginform" action="./login_action.php" method="post"><TR></tr>
 <center> <table width="372" height="157" align="center" cellpadding="1"cellspacing="1" border="0"  bordercolor="#FF0066" >
    <tr> 
      <td height="41" colspan="2" align="center"><h2><font color="#00FFFF"><em><font face="Georgia, Times New Roman, Times, serif">Login Form</font></em></font></h2></td>
    </tr>
    <tr> 
      <td width="170" height="40"  align="center"><h3><font color="#CCCCCC"><em><font face="Georgia, Times New Roman, Times, serif">Username</font></em></font></h3></td>
      <td width="185"><font color="#7c0000">
         <input type="text" name="username" required style="background" />
      </font></td>
    </tr>
    <tr> 
      <td height="38" align="center"><h3><font color="#CCCCCC"><em><font face="Georgia, Times New Roman, Times, serif">Password</font></em></font></h3></td>
      <td><font color="#7c0000">
        <input type="password" name="password" required maxlength="8">
        </font></td>
    </tr>
    <tr> 
	<td>
	 <a href="userinfo.php">
      <em><strong><font color="#00FF00" size="4" face="Georgia, Times New Roman, Times, serif">     New User?</font></strong></em> <font color="#7c0000"></a></font></td>
      <td height="27" colspan="2" align="center"><font color="#7c0000">
	  <input type="submit" name="ok"  id="bt1" onclick="fun_val();" value="Submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"/>
       
       
    </tr>
  </table></center>
<p>&nbsp;</p>
</form>
</div>

<?php
include "footer.php";
?>


