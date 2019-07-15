<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['post_controller'] = function()
{
        echo "after controller";
};

$hook['pre_system'] = function()
{
        echo "before System";
};
$hook['post_system'] = function()
{
        echo "after System";
};
$hook['pre_controller'] = function()
{
        echo "pre controller";
};
$hook['post_controller_constructor']=function()
{
	echo "POST Controller constructor";
}

?>