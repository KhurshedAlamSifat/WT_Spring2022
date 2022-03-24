<?php
include "../Control/RegCheck.php";
?>
<!DOCTYPE html>
<head>
<h1 align = "center">Registration Form</h1>
</head>
<body bgcolor="#0ccf9b" text="white">
	<hr>
	<form action= "" method ="post" enctype="multipart/form-data">
        <fieldset>
            <table align = "center">
                <tr>
                    <td>FirstName:</td>
                    <td><input type="text" name="FirstName"></td>
                    <td><font color ="red">
                        <?php
                        echo $fnameerr;
                        ?>
                    </font></td>
	     	    </tr>
                <tr></tr><tr></tr>
			    <tr>
                    <td>LastName:</td>
                    <td><input type="text" name="LastName"></td>
                    <td><font color ="red">
                        <?php
                        echo $lnameerr;
                        ?>
                    </font></td>
                </tr>
                <tr></tr><tr></tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="number" name="Age"></td> 
                    <td><font color ="red">
                        <?php
                        echo $ageerr;
                        ?>
                    </font></td>
                </tr>
                <tr></tr><tr></tr>  
                <tr>
                    <td>Email:</td>
                    <td><input type="Email" name="Email"></td>
                    <td><font color ="red">
                        <?php
                        echo $emailerr;
                        ?>
                    </font></td>
                </tr>
                <tr></tr><tr></tr> 
                <tr>
                    <td>Password:</td>
                    <td><input type="Password" name="Password"></td>
                    <td><font color ="red">
                        <?php
                        echo $passerr;
                        ?>
                    </font></td>
                </tr> 
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    <td>Designation:</td>
                <td>•<input type="radio" name="Designation" value="junior Programmer">Junior Programmer</td></tr>
                <tr><td><td>•<input type="radio" name="Designation"value="Senior Programmer">Senior Programmer</td></td></tr>
                <tr><td><td>•<input type="radio" name="Designation"value="Project Leader">Project Lead</td></td></tr>
                    <td><font color ="red">
                        <?php
                        echo $derr;
                        ?>
                    </font></td>
                </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    <td>
                        Prefferred language:
                    </td>
                    <td>•<input type="checkbox" name="java" value="JAVA">JAVA</td></tr>
                <tr><td><td>•<input type="checkbox" name="php" value="PHP">PHP</td></td></tr>
                <tr><td><td>•<input type="checkbox" name="c++" value="C++">C++</td></td></tr>
                    </td>
                    <td><font color ="red">
                        <?php
                        echo $lerr;
                        ?>
                    </font></td>
                </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    <td>
                        please choose a file:
                    </td>
                    <td><input type="file" name="myfile"></td>
                    <td><font color ="red">
                        <?php
                        echo $fileerr;
                        ?>
                    </font></td>
                </tr> 
            </table>
            <h2 align = "center">
                <input type="submit" name="Submit" >
                <input type="reset" name="Reset">
            </h2>
        </fieldset>
    </form>
</hr>
</body>
</html>