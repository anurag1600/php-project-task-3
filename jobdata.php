<?php

include('jobdb.php');
 
 $name=$_POST['name'];
 
 $city=$_POST['city'];

 $college=$_POST['college'];
 
 $address=$_POST['address'];
 




$q ="INSERT INTO delhi (name,city,college,address)VALUES('$name','$city','$college','$address')";

mysqli_query($col,$q);


?>