

<?php

include ('pndb.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$y="select * from internship2020 where id=$id";
	$f=mysqli_query($col,$y);

	$user=mysqli_fetch_assoc($f);
}
?>

<!-- update code -->

<?php

 if(isset($_POST['update'])){

       echo $studentname = $_POST['studentname'];
       echo $email = $_POST['email'];
       echo $mobilenumber = $_POST['mobilenumber'];
       echo $address = $_POST['address'];
       echo $gender = $_POST['gender'];
       echo $college = $_POST['college'];
       echo $qualifications = $_POST['qualifications'];
       echo $branch = $_POST['branch'];
       echo $semester = $_POST['semester'];
       echo $internshipcourse = $_POST['internshipcourse'];


       $q ="UPDATE internship2020 SET studentname = '$studentname',email = '$email',mobilenumber = '$mobilenumber',address = '$address',gender = '$gender',college = '$college',qualification = '$qualification',branch = '$branch',semester = '$semester',internshipcourse = '$internshipcourse' where id=$id";
       $f = mysqli_query($col, $q);

      // //if($fire)echo "data updated successfully.";
      if($f) header("Location:pndisplay.php");

  } 



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="">
		
		Student Name:
		<input type="text" name="studentname" placeholder="Enter name" value="<?php echo $user['studentname']?>"><br><br>

		Email:
		<input type="text" name="email" placeholder="Enter email" value="<?php echo $user['email']?>"><br><br>

		Mobile Number:
		<input type="text" name="mobilenumber" placeholder="Enter mobile number" value="<?php echo $user['mobilenumber']?>"><br><br>

		Address:
		<input type="text" name="address" value="<?php echo $user['address']?>"><br><br>

		Gender:
		<input type="radio"  id="" name="gender" value="male" 

		<?php
            if($user["gender"]=='male')
            {
                echo "checked";
            }
            ?>

            > Male <br>
		<input type="radio"  id="" name="gender" value="female" 

		<?php
            if($user["gender"]=='female')
            {
                echo "checked";
            }
            ?>

            > Female <br><br>

		College:
		<select name="college">
            <option value="0">Select</option>
            <option value="rjit"

            <?php
            if($user["college"]=='rjit')
            {
                echo "selected";
            }
            ?>

            >RJIT</option>
            <option value="shriram college"

            <?php
            if($user["college"]=='shriram college')
            {
                echo "selected";
            }
            ?>

            >SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMENT</option>
            <option value="mpct"

            <?php
            if($user["college"]=='mpct')
            {
                echo "selected";
            }
            ?>>MPCT</option>


            <option value="mits"

            <?php
            if($user["college"]=='mits')
            {
                echo "selected";
            }
            ?>

            >MITS</option>
            <option value="itm"

            <?php
            if($user["college"]=='itm')
            {
                echo "selected";
            }
            ?>

            >ITM</option>
            <option value="others"

            <?php
            if($user["college"]=='others')
            {
                echo "selected";
            }
            ?>

            >OTHERS</option>
        </select><br><br>

        Qualifications:
        <select name="qualifications">
            <option value="0">Select</option>
            <option value="btech">B.Tech</option>
            <option value="bca">B.C.A</option>
            <option value="mca">M.C.A</option>
            <option value="bsc">B.S.C</option>
            <option value="other">OTHER</option>
        </select><br><br>

        Branch:
        <select name="branch">
            <option value="0">Select</option>
            <option value="cse">C.S.E</option>
            <option value="it">I.T</option>
            <option value="ee">E.E</option>
            <option value="ec">E.C</option>
            <option value="mech">MECH.</option>
            <option value="civil">CIVIL</option>
            <option value="automobile">AUTOMOBILE</option>
            <option value="other">OTHER</option>
        </select><br><br>

        Semester:
        <select name="semester">
            <option value="0">Select</option>
            <option value="Ist">Ist Semester</option>
            <option value="IInd">IInd Semester</option>
            <option value="IIIrd">IIIrd Semester</option>
            <option value="IVth">IVth Semester</option>
            <option value="Vth">Vth Semester</option>
            <option value="VIth">VIth Semester</option>
            <option value="VIIth">VIIth Semester</option>
            <option value="VIIIth">VIIIth Semester</option>
        </select><br><br>

        Internship Course:
        <select name="internshipcourse">
            <option value="0">Select</option>
            <option value="Web Designing">Web Designing Internship Course (45 days)</option>
            <option value="Web Development">Web Development Internship Course (90 days)</option>
            <option value="Laravel">PHP</option>
            <option value="Laravel">Laravel 7</option>
            <option value="Angular">Angular 9</option>
            <option value="Angular">Vue Js</option>
            <option value="React JS">React JS</option>
            <option value="React Native">React Native</option>
        </select><br><br>

        <input style="background-color: blue;" type="submit" name="submit" value="submit">
	
		</form>

</body>
</html>