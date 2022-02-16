<!DOCTYPE html>
<head>
<h1>Registration Form</h1>
</head>
<body>
	<hr>
	<form action= "process.php" method ="post">
	    <table>
			<tr>
			    <td>FirstName:</td>
		        <td><input type="text" name="FirstName"> </td>  
	     	</tr>
			<tr>
			    <td>LastName:</td>
		        <td><input type="text" name="LastName"> </td>  
		    </tr>
				<tr>
			    <td>Age:</td>
		        <td><input type="number" name="Age"> </td>  
		    </tr>   
			<tr>
			    <td>Email:</td>
		        <td><input type="Email" name="Email">  </td>
		    </tr> 
		    <tr>
			    <td>Password:</td>
		        <td><input type="Password" name="Password">  </td>
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
		    		<input type="checkbox" name="pl1" value="JAVA">JAVA
		    		<input type="checkbox" name="pl2" value="PHP">PHP
		    		<input type="checkbox" name="pl3" value="C++">C++
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		please choose a file:
		    	</td>
		    	<td><input type="file" name="myfile"></td>
		    </tr> 
		</table>
		<input type="submit" value="submit" >
		<input type="reset" name="reset">		
	</form>
</hr>
</body>
</html>