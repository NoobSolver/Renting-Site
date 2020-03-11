<?php include 'db.php';?>
<?php
//create a variable
$fist_name=$_POST['First name'];
$last_name=$_POST['Last name'];
$email=$_POST['Email Id'];
$dob=$_POST['D.O.B'];
$gender=$_POST['Gender'];

mysqli_query($connect,"INSERT into customers(first_name,last_name,email,dob,mf)") VALUES('$first_name','$last_name','$email','$dob','mf');

if(mysqli_affected_rows($connect)>0)
{
	echo "<p>Registeration Completed</p>";
	mysqli_query($connect,"select * from customers");
	echo 
	"+----------------------------+<br>";
	echo "<a href='gurents.html'> Go back</a>;
}
   else
   {
   echo "REGISTRATION FAILED";
   echo mysqli_error($connect);

   }
 ?>  