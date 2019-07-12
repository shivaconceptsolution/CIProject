<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
  <a href="<?php echo site_url() ?>/Dashboard/logout">logout</a>
  <center>
    <h1>Welcome <?php echo $this->session->userdata('uid');  ?>
  <table border='1' cellspacing="0" cellpadding="0">
    <tr><th>ID </th><th>Email</th><th>Password</th></tr>
  <?php 
  //echo "<pre>";
  //print_r($arr);
  foreach($arr as $x)
  {
    echo "<tr>";
  	foreach ($x as $key) {
  		echo "<td>".$key."</td>";
  	} ?>

<td><a href="<?php echo site_url()."/Dashboard/FindRecord/".$x['id']; ?>">Edit</a></td><td><a href="<?php echo site_url()."/Dashboard/DeleteRecord/".$x['id']; ?>">Delete</a></td>
    <?php
  	echo "</tr>";
  }

   ?>
 </table>
</center>
</body>
</html>