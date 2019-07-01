<!DOCTYPE html>
<html>
<head>
	<title>Welcome in Login Page</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js">
  	 
  </script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
  	
  </script>
</head>
<body>
<div class="container">
<form action="<?php echo site_url(); ?>/register/index" method="post">
<div class="form-group">
<label for="email">Email:</label>
<input type="text" class="form-control" placeholder="enter email" name="txtemail"  />
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control" placeholder="enter password" name="txtpass" />
</div>
<div class="form-group">

<input type="submit" value="CLICK"  class="form-control btn btn-outline-primary" name="btnsubmit" />
</div>

<div class="form-group">
	<?php
	echo validation_errors();
	?>
</div>
</form>

</div>
</body>
</html>