<?php

include('pndb.php');
 
 $studentname=$_POST['studentname'];
 
 $email=$_POST['email'];

 $mobilenumber=$_POST['mobilenumber'];
 
 $address=$_POST['address'];
 
 $gender=$_POST['gender'];
 
 $college=$_POST['college'];
 
 $qualifications=$_POST['qualifications'];
 
 $branch=$_POST['branch'];

 $semester=$_POST['semester'];

 $internshipcourse=$_POST['internshipcourse'];
 




$q ="INSERT INTO internship2020 (studentname,email,mobilenumber,address,gender,college,qualifications,branch,semester,internshipcourse)VALUES('$studentname','$email','$mobilenumber','$address','$gender','$college','$qualifications','$branch','$semester','$internshipcourse')";

$query=mysqli_query($col,$q);



  if( $query)
  {
  	header('location:pndisplay.php');
  }

?>