<?php
$fulnmerr=$fnameerr=$lnameerr=$ageerr=$emailerr=$passerr=$derr="";
if(isset($_POST["Submit"]))
{
$firstname=$_REQUEST["FirstName"];
$lastname=$_REQUEST["LastName"];

if(empty($firstname))
{
    $fnameerr = " -> Please enter the First name.";
}
echo"<br>";
if(empty($lastname))
{
    $lnameerr = " -> Please enter the Last name.";
}
else{ echo " Hello ".$firstname." ".$lastname; }
echo"<br>";

$pass=$_REQUEST["Password"];
if(empty($pass))
{
    $passerr = " -> Please insert the password.";
}
elseif(strlen($pass)<6)
{
    $passerr = " -> Your password must be munimum 5 characters.";
}
else{ echo " You have valid Password!"; }
echo"<br>";

$age=$_REQUEST["Age"];
if(empty($age))
{
    $ageerr = " -> Please enter your age.";
}
else{ echo "You are ".$age." years old"; }
echo"<br>";

$email=$_REQUEST["Email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr = " ->Please enter valid email.";
}
else{ echo "Your email is ".$email; }
echo"<br>";

if(isset($_POST["Designation"]))
{
    echo "You have selected ".$_POST["Designation"];
}
else{echo  "You have not selected any DESIGNATION";}
echo"<br>";

if(isset($_POST["java"]) || isset($_POST["php"]) || isset($_POST["c++"]))
{
    echo "You preffered language ";
    if(isset($_POST["java"]))
    {
        echo $_POST["java"]." ";
    }
    if(isset($_POST["php"]))
    {
        echo $_POST["php"]." ";
    }
    if(isset($_POST["c++"]))
    {
        echo $_POST["c++"]." ";
    }
}
else{echo "You have not selected any preffered language ";}

echo"<br>";

if ($_FILES["myfile"]["type"]=="text/plain")
{
    if($_FILES["myfile"]["size"]<6*1024)
    {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Files/".$firstname." ".$lastname.date("y-m-d").".txt"))
        {
            echo "file uploaded";
            echo"<br>";
            echo $_FILES["myfile"]["tmp_name"];
            echo"<br>";
            echo $_FILES["myfile"]["name"];
        }
        else{echo "file can't uploaded";}
    }
    else{echo "file size over loaded";}
}
else{echo "This is not a text file";}
}

?>