<?php
include "../Control/result.php";
?>
<!DOCTYPE html>
<head>
<h1>Registration Form</h1>
</head>
<body>
	<hr>
	<form action= "" method ="post" enctype="multipart/form-data">
	    <table>
			<tr>
			    <td>FirstName:</td>
		        <td><input type="text" name="FirstName">
				<?php
				echo $fnameerr;
				?> </td>
	     	</tr>
			<tr>
			    <td>LastName:</td>
		        <td><input type="text" name="LastName">
				<?php
				echo $lnameerr;
				?>  </td>
				 
		    </tr>
				<tr>
			    <td>Age:</td>
		        <td><input type="number" name="Age">
				 <?php
				echo $ageerr;
				?> </td> 
		    </tr>   
			<tr>
			    <td>Email:</td>
		        <td><input type="Email" name="Email">
				<?php
				echo $emailerr;
				?>   </td>
				
		    </tr> 
		    <tr>
			    <td>Password:</td>
		        <td><input type="Password" name="Password">
				<?php
				echo $passerr;
				?>  </td>
				
		    </tr> 
		    <tr>
			    <td>Designation:</td>
		        <td>
		        	<input type="radio" name="Designation" value="junior Programmer">juniorProgrammer
		        	<input type="radio" name="Designation"value="Senior Programmer">SeniorProgrammer
		        	<input type="radio" name="Designation"value="Project Leader">Project Lead
		        </td>
		    </tr>
		    <tr>
		    	<td>
		    		Prefferred language:
		    	</td>
		    	<td>
		    		<input type="checkbox" name="java" value="JAVA">JAVA
		    		<input type="checkbox" name="php" value="PHP">PHP
		    		<input type="checkbox" name="c++" value="C++">C++
				
				</td>
		    </tr>
		    <tr>
		    	<td>
		    		please choose a file:
		    	</td>
		    	<td><input type="file" name="myfile"></td>
		    </tr> 
		</table>
		<input type="submit" name="Submit" >
		<input type="reset" name="Reset">		
	</form>
</hr>
</body>
</html>