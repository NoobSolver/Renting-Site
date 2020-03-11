<?php
$connect=mysqli_connect('localhost','root','','test');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>