<!DOCTYPE html>
<body>
 <h1> Registration Form </h1>
 <form action="action_page.php">
     <table>
         <tr>
             <td> First Name: </td>
             <td> <input type="text"></td> </tr>
             <tr>
             <td> Last Name: </td>
             <td> <input type="text"></td> </tr>
             <tr>
             <td> Age: </td>
             <td> <input type="number"></td> </tr> 
             <tr>
             <td> Designation: </td>
             <td> 
                 <input type="radio" name:"designation">Junior Programmer
                 <input type="radio" name:"designation">Senior Programmer
                 <input type="radio" name:"designation">Project Lead
            </td> </tr>
            <tr>
            <td> Preferred language: </td>
             <td> 
                 <input type="checkbox" name:"language">JAVA
                 <input type="checkbox" name:"language">PHP
                 <input type="checkbox" name:"language">C++
            </td> </tr>
            <tr>
             <td> E-mail: </td>
             <td> <input type="email"></td> </tr>
             <tr>
             <td> Password: </td>
             <td> <input type="password"></td> </tr>
             <tr>
             <td> Please choose a file </td>
             <td> 
             <input type="file">
            </td> </tr>
</table>
<input type="button" value="Submit">
<input type="button" value="Reset">
 </body>
</html>