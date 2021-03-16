<?php
include ('pndb.php');

if (isset($_GET['id']))
{
 $id =$_GET['id'];
$query ="select * From internship2020 where id=$id";
$fire =mysqli_query($col,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Student Name:<?php echo $user['studentname'] ?></h2>
	<h2>Email:<?php echo $user['email'] ?></h2>
	<h2>Mobile Number:<?php echo $user['mobilenumber'] ?></h2>
	<h2>Address:<?php echo $user['address'] ?></h2>
	<h2>Gender:<?php echo $user['gender'] ?></h2>
	<h2>College:<?php echo $user['college'] ?></h2>
	<h2>Qualifications:<?php echo $user['qualifications'] ?></h2>
	<h2>Branch:<?php echo $user['branch'] ?></h2>
	<h2>Semester:<?php echo $user['semester'] ?></h2>
	<h2>internshipcourse:<?php echo $user['internshipcourse'] ?></h2>
	


</body>
</html>