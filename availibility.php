<html>
<head>
<style>
#Layer1 {


	position:absolute;
	width:725px;
	height:400px;
	z-index:1;
	left: 89px;
	top: 210px;
}
#Layer2 {
	position:absolute;
	width:271px;
	height:344px;
	z-index:2;
	left: 893px;
	top: 263px;
}
</style>
	<script src="checkdate.js">	</script>

<?php
include "user_header.php";
?>
<div style="background-color:#7D2800 ; width:1355px; height:550px; margin-left:-180px ;">

<div id="Layer1"><br>
  <br>
<strong><b><i><font color="#00FFFF"><big>Rooms Availability</big></i></b></strong></span><br><br>
		
				<center><table width="532" id="mytable" style="color:#CCCCCC;">
					  
                      <tr>
    <td >Arrival Date </td>
    <td >Departure Date</td>
    <td >Room type</td>
  </tr>
					 
  
  <tr>
    <td>
      <input type="date" name="date2" id="date2" onBlur="return prev1(this.value)">    </td>
    <td>
      <input type="date" name="date3" id="date3" onBlur="return prev2(this.value)">    </td>
    <td><select name="type" id="type" onChange="return datechk(date2.value,date3.value,this.value)">
      <option selected="selected">--select--</option>
      <option value="standard">Standard</option>
      <option value="deluxe">Deluxe</option>
      <option value="superdeluxe">SuperDeluxe</option>
      <option value="suite">Suite</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="3"><div id="d1"></div></td>
    </tr>
  
</table>
                <div id="d2"></div>
</div>
</div>

<?php
include "footer.php";
?>
</html>