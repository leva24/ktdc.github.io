<html>
<head>
<style>
select:hover
{
	background-color:#EBF10A;
}
</style>
</head>
<body>
<?php
include 'user_header.php';
?>
<div style="background-color:#877D7D" >
<form action="hotel_search_details.php" method="post">
                                <h4>Search Hotels</h4>
                                <br />
                                
                           
                                        <label style="position:relative; left:-20px;">Select District</label>
                                    <select  name="dist" class="distri" style="width:200px; height:30px;">
                                    					<option value="">--Select--</option>
                                   					 	<option value="Eranakulam">Eranakulam</option>
                                                        <option value="Idukki">Idukki</option>
                                                        <option value="Kannur">Kannur</option>
                                                        <option value="Kasargod">Kasargod</option>
                                                        <option value="Kollam">Kollam</option>
                                                        <option value="Kottayam">Kottayam</option>
                                                        <option value="Kozhikode">Kozhikode</option>
                                                        <option value="Malappram">Malappuram</option>
                                                        <option value="Palakkadu">Palakkadu</option>
                                                        <option value="Pathanamthitta" >Pathanamthitta</option>
                                                        <option value="Thiruvananthapuram">Thiruvananthapuam</option>
                                                        <option value="Thrissur">Thrissur</option>
                                                        <option value="Wayanadu">Wayanadu</option>
                                                        </select>
                                                        <br />
                                                        <br />
                                                        <input style=" font-weight:bold; box-shadow:2px 2px 2px #16F521;width:80px; height:30px" type="submit" value="Submit" />
                                                        <input  style="position:relative; left:10px; font-weight:bold; box-shadow:2px 2px 2px #16F521;width:80px; height:30px" type="reset" value="Reset" />
                                                        </form>
                                                        </div><br/><br/><br/><hr />
  <?php
include "footer.php";
?>
                                                      
                                                         
</body>
</html>