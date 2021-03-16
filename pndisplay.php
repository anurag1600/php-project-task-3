<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Student Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Gender</th>
		<th>College</th>
		<th>Qualifications</th>
		<th>Branch</th>
		<th>Semester</th>
		<th>Internship Course</th>
		<th>Action</th>

	</tr>

<?php

include "pndb.php";

$data="select * from Internship2020";
$q=mysqli_query($col,$data);

while($result=mysqli_fetch_array($q)){

?>

<tr>
<td><?php echo $result['id'];?></td>
<td><?php echo $result['studentname'];?></td>
<td><?php echo $result['email'];?></td>
<td><?php echo $result['mobilenumber'];?></td>
<td><?php echo $result['address'];?></td>
<td><?php echo $result['gender'];?></td>
<td><?php echo $result['college'];?></td>
<td><?php echo $result['qualifications'];?></td>
<td><?php echo $result['branch'];?></td>
<td><?php echo $result['internshipcourse'];?></td>

	<td>
		<a href="pnview.php?id=<?php echo $result['id'];?>">View</a>
		<a href="pnedit.php?id=<?php echo $result['id'];?>">Edit</a>
		<a href="delete.php?id=<?php echo $result['id'];?>">Delete</a>
	</td>



</tr>
<?php
}
?>
</table>

</body>
</html>