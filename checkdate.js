function datechk(date1,date2,date3)
{	

 
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
		xmlhttp.onreadystatechange=function()
  		{ 	
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
				
    			document.getElementById("d2").innerHTML=xmlhttp.responseText;
				
								
    		}
  		}
		xmlhttp.open("GET","date.php?q="+date1+"&q1="+date2+"&q2="+date3,true);
		xmlhttp.send();
}

function prev1(date1)
{	

 
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
		xmlhttp.onreadystatechange=function()
  		{ 	
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
				
    			document.getElementById("d2").innerHTML=xmlhttp.responseText;
				
								
    		}
  		}
		xmlhttp.open("GET","date1.php?q="+date1,true);
		xmlhttp.send();
}
function prev2(date)
{	

 
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
		xmlhttp.onreadystatechange=function()
  		{ 	
  			if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
				
    			document.getElementById("d2").innerHTML=xmlhttp.responseText;
				
								
    		}
  		}
		xmlhttp.open("GET","date1.php?q="+date,true);
		xmlhttp.send();
}
