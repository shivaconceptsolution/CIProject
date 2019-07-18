<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
     function showdata(a)
     {

     	var xmlhttp = new XMLHttpRequest();
     	xmlhttp.onreadystatechange=function()
     	{
        document.getElementById("res").innerHTML = xmlhttp.responseText;
     	}
     	xmlhttp.open("POST","<?php echo site_url(); ?>/search/searchdata/"+a,true);
     	xmlhttp.send();
     }

	</script>
</head>
<body>
<input type="text" name="txtsearch" onkeyup="showdata(this.value)"  />

<div id="res"></div>
</body>
</html>