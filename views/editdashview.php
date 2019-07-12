<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
  <center>
   <form action="<?php echo site_url()?>/dashboard/updaterecord"
    method="post"> 
  <table border='1' cellspacing="0" cellpadding="0">
    <tr><th>ID </th><th>Email</th><th>Password</th></tr>
  <?php 
  foreach($arr as $x)
  {
    echo "<tr>";
    $i=1;
  	foreach ($x as $key) {
     
      ?>
      <td><input type="text" name="txt<?php echo $i; ?>"  value="<?php echo $key; ?>" /> </td>
  		
  	<?php
    $i++;
  } 
echo "</tr>";
}
  ?>

  <tr><td colspan="3" align="center"><input type="submit" name="btnsubmit" value="update"></td></tr>
 </table>
</form>
</center>
</body>
</html>