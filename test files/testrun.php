<?php include 'db.php';?>
 
<?php
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO employees1(first_name,last_name,department,email)
				VALUES('$first_name','$last_name','$department','$email')");

if(mysqli_affected_rows($connect)>0)
{
	echo "<p>Employee Added</p>";
	mysqli_query($connect,"select * from employees1");
	echo 
	"--------------------------------<br>";
	echo "<a href='test.html'>Go Back</a>";
} 
else 
{
	echo "Employee NOT Added";
	echo mysqli_error ($connect);
}
?>
