<?php session_start();
if(isset($_SESSION['username'])!=true)
{
?>
<script>
alert("You must login to continue");
location.href="login.php";
</script>
<?php	
}







?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>KTDC</title>
<link rel="icon" href="images/favicon.png" type="image/jpg">
<link href='social.css' rel='stylesheet' type='text/css'> 
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css" />
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
</head>

<body>
<nav class="social" >
         
</nav>
	<div id="header">
																																																																																						
		<span>KTDC Hotel Booking</span>
		<ul id="menu">
			<li><a href=admin_home.php>Home</a></li>
			<li><a href=registered_users.php>Registered Users</a></li>
			<li><a href=reserved_users.php>Reservation Details</a></li>
            	<li><a href="add_hotel.php">Add Hotel</a></li>
          	
          <li><a href="add_destination.php">Add Destinations</a></li>
          <li><a href="update_event.php">Update Events</a></li>
            
			<li><a href=admin_logout.php>Logout</a></li>
			<li><a href=admin_feedback.php>feedback</a></li>
            <li><a href="#"><?php echo $_SESSION['username']?></a></li>
			
		</ul>
		<!--<img src="images/image.jpg" alt="" width="1000" height="311" /><br />-->
	
	<br/><br/><br/>
	
	
	
	</body>
	</html>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
