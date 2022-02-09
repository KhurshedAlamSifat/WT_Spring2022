<?php
$firstname=$_REQUEST["FirstName"];
$lastname=$_REQUEST["LastName"];
if($firstname=="")
{
    echo "Please enter the First name.";
}
echo"<br>";
if($lastname=="")
{
    echo "Please enter the Last name.";
}
else{echo "Hello ".$firstname." ".$lastname;}
echo"<br>";
$pass=$_REQUEST["Password"];
if($pass=="")
{
    echo "Please insert the password.";
}
elseif(strlen($pass)<6)
{
    echo "Your password must be munimum 5 characters.";
}
else{echo "You have valid Password!";}
echo"<br>";
$age=$_REQUEST["Age"];
if($age=="")
{
    echo "Please enter your age.";
}
else{echo "You are ".$age." years old";}
echo"<br>";
$email=$_REQUEST["Email"];
echo "Your email is ".$email;
echo"<br>";
if(isset($_POST["Designation"]))
{
    echo "You have selected ".$_POST["Designation"];
}
else{echo "You have not selected any DESIGNATION";}
echo"<br>";
if(isset($_POST["pl1"]) || ($_POST["pl2"]) || ($_POST["pl3"]))
{
    echo "You preffered language ";
    if(isset($_POST["pl1"]))
    {
        echo $_POST["pl1"]." ";
    }
    if(isset($_POST["pl2"]))
    {
        echo $_POST["pl2"]." ";
    }
    if(isset($_POST["pl3"]))
    {
        echo $_POST["pl3"]." ";
    }
}
else{echo "You have not selected any preffered language ";}
?>