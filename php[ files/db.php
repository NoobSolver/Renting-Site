<?php
$connect=mysqli_connect('localhost','root','','mydb');
if(mysqli_connect_errno($connect))
{
	echo 'failed to connect';
}
?>