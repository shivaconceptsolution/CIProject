<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo form_open();
echo form_input('txtnum1',@$a);
echo form_input('txtnum2',@$b);
echo form_submit('btnsubmit','ADD');

echo @$result;
?>

</body>
</html>