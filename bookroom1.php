<?php
session_start();
?>
<script type="text/javascript">
function validate()
{
	
	/*var curdt=date("Y-m-d")
	
	if(document.getElementById('contact').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
	*/
	
	
	
	var a1=4;
	//var a1= document.getElementById("hidden").value;
	var a2=document.getElementById("torooms").value;
		var maxa=4;
	
	
	var z1=parseInt(document.getElementById("torooms").value);
	var z2=parseInt(document.getElementById("adu1").value);
	
	var z3=parseInt(document.getElementById("adu2").value);
	
	var y1=parseInt(maxa*z1);
	
	
	var y2=parseInt(z2+z3);
	

	if(a2>a1)
	{
		alert("enter number of rooms less than availed room ")
		return false;
	}
	
	//person validate
	
	

	else if(y2>y1)
	{
		alert("Not Possible to accomodate");
		return false;
	}
	else
	{
	return true;
	}
	
	
	

}
</script>

<?php
	include 'user_header.php';
	extract($_REQUEST);
	include('connection.php');
?>
<div style="background-color:#877D7D; ">
 <h3 style="vertical-align">Book Your Room </h3> <br />
 <form method="get" action="">
	<input type="hidden" name="hid" value="<?php echo $hid;?>"/>
	<input type="hidden" name="rmtype" value="<?php echo $rmtype; ?>"/>
	<input type="hidden" name="avail" value="<?php echo $avail;?>"/><br/>
	
	Starting Date :&nbsp;&nbsp;&nbsp;<input type="date" name="in_date" id="in" required/><br/><br/><br/>
    
    
	Ending Date :&nbsp;&nbsp;<input type="date" name="out_date" required/><br/><br/><br/>
	<input type="hidden" id="hidden" value="<?php echo $avail ?>">
	Number of Rooms :&nbsp;<input type="number" required id="torooms" name="torooms" max="<?php echo $avail ?>" required/><br/><br/><br/>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adults :&nbsp;&nbsp;<input id="adu1" required type="number" name="adults" max="<?php echo $avail ?>"/><br/><br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Childrens :<input  type="number" id="adu2" name="children" max="<?php echo $avail ?>"/><br/><br/><br/>
	<input type="submit" style="width:100px;height:30px;background-color:#996600 ;border-radius:10px;border:solid color: #3399FF;"  O value="BOOK NOW"  align="center" name="book" onClick="return validate()"><br/><br/><br/>
  </form>
  </div>
  
  <?php
  
		if(isset($book))
		{
			
			
			//$sq5="SELECT `rate` from add_room WHERE hid='$hid' and rmtype='$rmtype'";
			//$r1=mysql_query($sq5);
			//$res=mysql_fetch_array($r1);
			//$total=$res[0]*$torooms;
			
			$uniq = uniqid(ktdckl);
              
			//echo $uniq;
			
			 $qry="INSERT INTO reservation(hid,uname,uniq_id,room_type,in_date,out_date,rooms,adults,childrens)
			VALUES(".$hid.",'".$_SESSION['username']."','".$uniq."','".$rmtype."','".$in_date."','".$out_date."',".$torooms.",".$adults.",".$children.")";
			
			mysql_query($qry);
			 $qry1="UPDATE add_room SET free=free-".$torooms." WHERE hid=".$hid." AND rmtype='".$rmtype."'";
			mysql_query($qry1);
			
			echo "<script>window.onload=function(){alert('Booking Completed.Your booking Id is".$uniq.".Please note this for future reference');window.location='hotel_search.php'}</script>";
			
			
			
			
			
			
			?>
            
            
         
            
            
            
    
    <?php
			
			
			
			
			
		}
  
  
  
  
  ?>
  
<?php
include "footer.php";
?>
