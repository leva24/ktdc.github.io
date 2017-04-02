<?php
session_start();
	include "connection.php";
	
		if( ($_SESSION['uname']=="") && ($_SESSION['pwd']==""))
			{
				header("location:login.php");
			}
?>

<html>
<head>

	<script language=javascript src="../../../wamp/www/AngelBerg/function.js">
	</script>
	<script language=javascript>
	
	

	
	
	
		function checkout()
		{
			var i=0;
	for(x=0;x<document.f1.elements.length;x++)
	{
		if(document.f1.elements[x].value=="")
		{
			f1.txtname.focus();
			alert("Pls Enter All Value");
			i=1;
			break;
		}
	}
	if(i==0)
	{
		f1.method="POST";
		f1.action="addres.php";
		f1.submit();
	}
		}
	</script>
	<script src="checkdate.js">
	
	
	</script>
	 <link rel="icon" href="../../../wamp/www/AngelBerg/images/favicon.png" type="image/jpg">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="../../../wamp/www/AngelBerg/style.css" />
  <link href="../../../wamp/www/AngelBerg/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../../../wamp/www/AngelBerg/themes/1/js-image-slider.js" type="text/javascript"></script>
    
	<script src="js/Myjs.js">
	</script> 
	<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}

-->
    </style>

</head>
	
			
<body>

				


<?php
	include "user_header.php";

		$sql="select * from registration ";
		$sq=mysql_query($sql,$con);
           while ($row=mysql_fetch_array($sq))
		   {
		   
		   }
?>


<div style="background-color:#7D2800 ; width:1355px; height:550px; margin-left:-180px ">

<font color=white><center>
<pre>Thank you for your interest in hotel<em><font color="#999999"> &nbsp;<b><strong><big>AngelBerg</strong></b></big>       
</font></em>please fill in your room requirement. </pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="availibility.php"><strong><b><i><font color="#00FFFF"><big>Check Rooms Availability</a></big></i></b></strong></span>	
    
<br><br>
                                                                                               
<br><br><br>
			<div id="sidebar">
				<div class="order">
<form action="" method="post" name="reservation">
						<h3><font color="#FF0000"><strong><big><i><b>Reservation</b></i></big></strong></font></h3>
						<div id="d2"></div>
						<table width="450" cellpadding="0" cellspacing="0">
							<tr>
								<td class="first">
									 <font color="#FFFFFF">Arrival Date									 
									 <input type="date" name="date" id="date" onBlur="return prev1(this.value)"></td>
								<td class="first">
								<font color="#FFFFFF">	Departure Date	
								<input type="date" name="date1" onBlur="return prev2(this.value)"></td>
							</tr>
							<tr>
								<td class="first"><br/><br/>
							<font  color="#FFFFFF">	Room type							
							<select name="ddlroom">
                              <option selected="selected">--select--</option>
                              <option value="standard">Standard</option>
                              <option value="deluxe">Deluxe</option>
                              <option value="superdeluxe">SuperDeluxe</option>
                              <option value="suite">Suite</option>
                            </select></td>
								<td class="third"><br/><br/>
								<font color="#FFFFFF">	Rooms 
									&nbsp;&nbsp; <input type="text" name="rooms" style="width:50">								</td>
							</tr>
							<tr>
								<td class="first">
								<font color="#FFFFFF">	Adults
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="adults" style="width:50"></td>
								<td class="third">
								<font color="#FFFFFF">	Children
										<input type="text" name="children" style="width:50" onBlur=" get(this.value,adults.value,rooms.value,ddlroom.value,date.value,date1.value)">								</td>
							</tr>
							<tr>

								<td colspan="1" class="reset">
								  <p>&nbsp;</p>
							    <p><a href="#"></a></p>								</td>

							<td>&nbsp;</td>
						</tr>         	
						</table> 	
				  </form>
</div>
</div>
</div></big></big><div  id="d1"></div>

 																																																																																																									
<?php
	
	include "footer.php";
?>
</body>
</html>



	
	
			
		