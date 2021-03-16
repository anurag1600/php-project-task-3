<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>City</th>
		<th>College</th>
		<th>Address</th>
		<th>Action</th>

	</tr>

<?php

include "jobdb.php";

$data="select * from delhi";
$q=mysqli_query($col,$data);

while($r=mysqli_fetch_array($q)){

?>

<tr>
<td><?php echo $r['id'];?></td>
<td><?php echo $r['name'];?></td>
<td><?php echo $r['city'];?></td>
<td><?php echo $r['college'];?></td>
<td><?php echo $r['address'];?></td>
	<td>
		<a href="jobview.php?id=<?php echo $r['id'];?>">View</a>
		<a href="jobedit.php?id=<?php echo $r['id'];?>">Edit</a>
		<a href="">Delete</a>
	</td>



</tr>
<?php
}
?>
</table>

</body>
</html>