<?php


$update = $_POST['update'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "employee";

$connec = new mysqli($servername, $username, $password, $db);

if ($connec->connect_error){
	die("Connection failed: ". $connec->connect_error);
}

$sql = "update employee set ID='$_POST[ID]', Name='$_POST[Name]',Gender='$_POST[Gender]',Position='$_POST[Position]',Attendance='$_POST[Attendance]',Salary='$_POST[Salary]',Contact='$_POST[Contact]',Address='$_POST[Address]',Joining='$_POST[Joining]' where ID like '%$update%'";
$result = mysqli_query($connec,$sql);

if($result)
{
	echo'<script type="text/javascript"> alert("Data Updated") </script>';
}
else
{
	echo'<script type="text/javascript"> alert("Data Updated") </script>';
}
?>