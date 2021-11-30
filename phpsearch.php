<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "employee";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from table1 where ID like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	?>
<div class="details">
	<center>
<table align="middle" width="30%" style="padding: 10px;">
<tr>
	<td> ID </td>
	<td> <input type="text" name="ID" value="<?php echo $row["ID"]?>" readonly> </td>
</tr>
<tr>
	<td> Name </td>
	<td> <input type="text" name="Name" value="<?php echo $row["Name"]?>" readonly> </td>
</tr>
<tr>
	<td> Gender </td>
<td> <input type="text" name="Gender" value="<?php echo $row["Gender"]?>" readonly> </td>
</tr>
<tr>
	<td> Position </td>
<td> <input type="text" name="Position" value="<?php echo $row["Position"]?>" readonly> </td>
</tr>
<tr>
	<td> Attendance </td>
<td> <input type="text" name="Attendance" value="<?php echo $row["Attendance"]?>" readonly> </td>
</tr>
<tr>
	<td> Salary </td>
<td> <input type="text" name="Salary" value="<?php echo $row["Salary"]?>" readonly> </td>
</tr>
<tr>
	<td> Contact </td>
<td> <input type="text" name="Contact" value="<?php echo $row["Contact"]?>" readonly> </td>
</tr>
<tr>
	<td> Address </td>
<td> <input type="text" name="Address" value="<?php echo $row["Address"]?>" readonly> </td>
</tr>
<tr>
	<td> Joining </td>
<td> <input type="text" name="Joining" value="<?php echo $row["Joining"]?>" readonly> </td>
</tr>
</table>
</center>
</div>
<?php
}
} else {
	echo "0 records";
}

$conn->close();

?>

</body>
</html>


<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
	body{
		width: 100%;
		height: 90vh;
		background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),url(img/db.jpeg);
		background-position: center;
		background-size: cover;
		font-family: 'Poppins',sans-serif;
	}
	.details{
		padding-top: 30px;
	}
	td{
		color: #fff;
	}
</style>