



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

<?php
  
  if(isset($_POST['update']))
  {

      echo $name = $_POST['name'];
      echo $city = $_POST['city'];
      echo $college = $_POST['college'];
      echo $address = $_POST['address'];

      $query ="UPDATE delhi SET name = '$name',city = '$city',college='$college',address='$address', where id=$id";
       $fire = mysqli_query($col, $query);

      // if($fire)echo "data updated successfully.";
      if($fire)header("Location:jobdisplay.php");

  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="post" action="">
	<br>
	name:<input type="text" name="name" value="<?php echo $user['name']?>">

	<br>

	city:<input type="text" name="city" value="<?php echo $user['city']?>">
	<br>

	college:<input type="text" name="college" value="<?php echo $user['college']?>">
	<br>

	address:<input type="text" name="address" value="<?php echo $user['address']?>">
	<br>

	<input type="submit" name="update"  value="update">
</form>

	
</form>
</body>
</html>














