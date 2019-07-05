<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
  <?php 
 // print_r($arr);
  foreach($arr as $x)
  {
  	foreach ($x as $key) {
  		echo $key." ";
  	}
  	echo "<hr>";
  }

   ?>
</body>
</html>