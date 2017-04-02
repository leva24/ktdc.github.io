<html>
<head>
	<title>Location page</title>
	<link rel="stylesheet" type="text/css" href="link.php">
	<?php
include "header.php";
?>
	</head>
<div style="background-color:#877D7D ; width:1355px; height:840px; margin-left:-30px ">


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
<div style="position:relative; left:20px;" border=0>
	

<?php
include "connection.php";

	$sql="select * from destinations ";
	$sq=mysql_query($sql,$con);
     while($row=mysql_fetch_array($sq))
	 {
	 
					 $id1=$row['did'];
					 


echo '<h3  style="position:relative; color:black; text-decoration:underline; ">'.$row['dname'].'</h3><br>';
echo '<h5  style="position:relative; ">District: '.$row['dist'].'</h5>';
echo '<h5  style="position:relative;">Location: '.$row['location'].'</h5>';
echo '<h5  style="position:relative;left:-15px; ">'.$row['descript'].'</h5>';
echo '<h5  style="position:relative; ">Contact: '.$row['contact'].'</h5><hr>'






			
			
	       
			 
			?>
			
			<br>
            <br>
			
					
			<?php
					 }
					 
				


?>



	
</div>
<br><br>

</div><br/>
<?php
include "footer.php";
?>

</body>
</html>
