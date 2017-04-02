<html>
<head>
	<title>Location page</title>
	<link rel="stylesheet" type="text/css" href="link.php">
	<?php
include "header.php";
?>
	</head>
<div style="background-color:#7D2800 ; width:1355px; height:840px; margin-left:-180px ">


   <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAclK0B2lXQwV5lPy1rLiTFBSN1aiKepvDswXjKa4j2DDWdYvOjhQMO1tywqS8ObgP5dtO70AyyArhzA"
      type="text/javascript"></script>
    <script language="'Javascript'" type='text/javascript'>
        var map = null;
        var geocoder = null;

        function load() {
            if (GBrowserIsCompatible()) {
                map = new GMap2(document.getElementById("map"));
                map.setCenter(new GLatLng(10.5074, 76.9730), 7);
                map.addControl(new GSmallMapControl());
                geocoder = new GClientGeocoder();
            
			 
			}
        }

        function showAddress(address) {
            if (geocoder) {
                geocoder.getLatLng(
          address,
          function(point) {
              if (!point) {
                  alert(address + " not found");
              } else {
                  map.setCenter(point, 17);
                  var marker = new GMarker(point);
                  map.addOverlay(marker);
                  marker.openInfoWindowHtml(address);
              }
          }
        );
            }
        }
 
</script>    
</head>
  <body onload="load()" onunload="GUnload()">
    <form action="#" onsubmit="showAddress(this.address.value); return false">
      <br><p>
        <input type="text" size="20" name="address" value="" placeholder="search place" style="margin-left:-90px" />
        <input type="submit" value="Search!" />
      </p>
      <div id="map" style="width: 1300px; height: 200px; margin-left:15px"></div>
    </form>








<br>
<table border=0>
	<tr>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td align=center><font color=white size=4><b><i><u>LOCATION</u></i></b></td></font>
	</tr>
	<tr>
		<td></td><td border><a href=11.php target=_blank><img src="images/main-1_203_m.jpg" width=250 height=150 ></a></td><td></td>
		<td><div align="justify"><font color="white">Hotel<strong><em><font color="violet">AngelBerg</font></em></strong>is strategically located colse to the business hub of Amreli
		  and <br>
		  in close vicinity of the Railway station and central Bus station.<br>
		  It provides an easy access to the industrial zones of Amreli.
	    of you are travelling by car.</font></div></td><td></td>
		<td><a href=12.php target=_blank><img src="images/15322_b2.jpg" width=250 height=150></a></td>
	</tr>
	<tr>
		<td><font color="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Overview</font></td>
		<td></td><td></td><td></td>
		<td><font color="#CCCCCC">Hall</font></td>
	</tr>
</table>
<br><br>
<table width=100%>
	<tr>
		<td rowspan=4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=13.php target=_blank><img src="images/LVSR_golf_course.jpg" width=250 height=150></a></td>
		<th>LOCATION</th>
		<th>DISTANCE</th>
		<td rowspan=4><a href=14.php target=_blank>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Wedding-Pavillion-Renewal-of-Vows.jpg" width=250 height=150 ></a></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Railway-Station</td>
		<td>1 Km</td>
	</tr>
	<tr>
		<td>Bus Station</td>
		<td>0.5 Km</td>
	</tr>
	<tr>
		<td><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;Sitting</font></td>
		<td></td>
		<td></td>
		<td align=middle><font color="#FFFFFF"> regal </font></td>
	</tr>
</table>
</div><br/>
<?php
include "footer.php";
?>

</body>
</html>
