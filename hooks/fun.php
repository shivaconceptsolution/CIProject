<?php

function fun1()
{
	echo "before";
	//echo "<body bgcolor='red'></body>";
	//echo "<script>alert('welcome in hooks');</script>";
}
function fun2()
{
	echo "after";
	//echo "<body bgcolor='red'></body>";
	//echo "<script>alert('POST HOOKS');</script>";
}
fun1();
fun2();

?>