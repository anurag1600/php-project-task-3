<?php
include ('jobdb.php');

if (isset($_GET['id']))
{
 $id =$_GET['id'];
$query ="select * From delhi where id=$id";
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
	<h2>Name:<?php echo $user['name'] ?></h2>
	<h2>City:<?php echo $user['city'] ?></h2>
	<h2>College:<?php echo $user['college'] ?></h2>
	<h2>Address:<?php echo $user['address'] ?></h2>

</body>
</html>