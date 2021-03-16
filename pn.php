<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1 class="text-warning">Internship2020</h1>
		
  <form method="post" action="pndata.php">

	    
		Student Name:<br><input type="text" name="studentname"><br><br>

		
		Email:<br><input type="text" name="email"><br><br>

		Mobile Number:<br><input type="text" name="mobilenumber"><br><br>

		Address:<br><input type="text" name="address"><br><br>

		<br>
		
		gender<input type="radio" name="gender" value="male" required> Male 
  		  	 <input type="radio"  name="gender" value="female" required> Female <br>
  		  <br><br>

		
		<label> College:</label>

		<select name="college" class="form-control"> 
		<option value="0">select</option>
		<option value="RJIT">RJIT</option>
		<option value="SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMNET">SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMNET</option>
		<option value="MPCT">MPCT</option>
		<option value="MITS">MITS</option>
		<option value="ITM">ITM</option>
		<option value="OTHERS">OTHERS</option>
		</select> 
		<br><br>

		<label> Qualifications:</label>
		<select name="qualifications" class="form-control"> 
		<option value="0">select</option>
		<option value="B.TECH">B.TECH</option>
		<option value="B.C.A">B.C.A</option>
		<option value="M.C.A">M.C.A</option>
		<option value="B.SC">B.SC</option>
		<option value="OTHER">OTHER</option>
		</select> 
<br><br>
		<label> Branch:</label>
		<select name="branch" class="form-control"> 
		<option value="0">select</option>
		<option value="C.S.C">C.S.C</option>
		<option value="I.T">I.T</option>
		<option value="E.E">E.E</option>
		<option value="E.C">E.C</option>
		<option value="MECH.">MECH.</option>
		<option value="CIVIL">CIVIL</option>
		<option value="AUTOMOBILE">AUTOMOBILE</option>
		<option value="OTHER">OTHER</option>
		</select> 
<br><br>
		<label> Semester:</label>
		<select name="semester" class="form-control"> 
		<option value="0">select</option>
		<option value="Ist Semester">Ist Semester</option>
		<option value="IInd Semester">IInd Semester</option>
		<option value="IIIrd Semester">IIIrd Semester</option>
		<option value="IVth Semester">IVth Semester</option>
		<option value="Vth Semester">Vth Semester</option>
		<option value="VIth Semester">VIth Semester</option>
		<option value="VIIth Semester">VIIth Semester</option>
		<option value="VIIIth Semester">VIIIth Semester</option>
		</select> 
<br><br>
		<label> Internship Course:</label>
		<select name="internshipcourse" class="form-control"> 
		 <option value="0">Select</option>
                                         
        <option value="Web Designing">Web Designing Internship Course (45 days)</option>
        <option value="Web Development">Web Development Internship Course (90 days)</option>
        <option value="Laravel">PHP</option>
                                         
        <option value="Laravel">Laravel 7</option>
        <option value="Angular">Angular 9</option>
         <option value="Angular">Vue Js</option>
                                         
       <option value="React JS">React JS</option>
         <option value="React Native">React Native</option>
        </select> 
		
<br><br>
		

		

		


<input type="submit" style="color: blue" name="submit"  value="submit">














	</form>

</body>
</html>