function get(children,adult,norooms,tprooms,to,from)
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
				
    			document.getElementById("d1").innerHTML=xmlhttp.responseText;
								
    	}
  		}
		xmlhttp.open("GET","getdata.php?q="+children+"&q1="+adult+"&q2="+norooms+"&q3="+tprooms+"&q4="+to+"&q5="+from,true);
		xmlhttp.send();
}
