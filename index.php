<?php
include 'conn.php';
$query="SELECT * FROM `user_info`";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<a href="http://localhost:8080/phptest/insert.php"><button style="height: 30px;width:80px;background-color: #23ff09;">inset data</button></a>
<br><br>
	<table border="1px solid black " width="100%" >
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Mobile</th>
			<th> Designation</th>
			<th>Gender</th>
			<th>Hobbies</th>
		</tr>
		
		<?php
		while($row=mysqli_fetch_row($result))
		{
			?>
			<tr>
				<td><?php echo $row['0'];?></td>
				<td><?php echo $row['1']?></td>
				<td><?php echo $row['2'];?></td>
				<td><?php echo $row['3'];?></td>
				<td><?php echo $row['4'];?></td>
				<td><?php echo $row['5'];?></td>
				<td><?php echo $row['6'];?></td>
				<td><?php echo $row['7'];?></td>
				<td><?php echo $row['8'];?></td>


			</tr>
			<?php
		}



		?>
	</table>

</body>
</html>