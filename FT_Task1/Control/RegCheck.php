<?php

include "../Model/model.php";

$fnameerr=$lnameerr=$ageerr=$emailerr=$passerr=$derr=$lerr=$fileerr=$filename=$l="";
if(isset($_POST["Submit"]))
{
    $firstname=$_POST["FirstName"];
    $lastname=$_POST["LastName"];
    if(empty($firstname))
    {
        $fnameerr = " * Please insert your First name.";
    }
    if(empty($lastname))
    {
        $lnameerr = " * Please insert your Last name.";
    }
    
    $pass=$_POST["Password"];
    if(empty($pass))
    {
        $passerr = " * Please insert the password.";
    }
    if(strlen($pass)<6)
    {
        $passerr = " * Your password must be munimum 5 characters.";
    }
    
    $age=$_POST["Age"];
    if(empty($age))
    {
        $ageerr = " * Please enter your age.";
    }
    
    $email=$_POST["Email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $emailerr = " * Please enter valid email.";
    }
    
   
    if(!isset($_POST["Designation"]))
    {
        $derr = " * Please select a Designation.";
    }
    if(isset($_POST["Designation"]))
    {
        $designation=$_POST["Designation"];
    }
    
    if(!isset($_POST["java"]) && !isset($_POST["php"]) && !isset($_POST["c++"]))
    {
        $lerr = " * You have not selected any preffered language.";
    }
    if(isset($_POST["java"]) || isset($_POST["php"]) || isset($_POST["c++"]))
    {
        $l1=$l2=$l3= "";
        if(isset($_POST["java"]))
        {
            $l1 = $_POST["java"]." ";
        }
        if(isset($_POST["php"]))
        {
            $l2 = $_POST["php"]." ";
        }
        if(isset($_POST["c++"]))
        {
            $l3 = $_POST["c++"]." ";
        }
        $l = $l1.$l2.$l3;
    }
    
    if(!isset($_FILES["myfile"]))
    {
        $fileerr= " * Please upload e txt file.";
    }
    $target_dir="../Files/";
    $target_file=$target_dir.$_FILES["myfile"]["name"];
    if(!move_uploaded_file($_FILES["myfile"]["tmp_name"],$target_file))
    {
        $fileerr= " * file can't uploaded";
    }
    else
    {
        $filename = $_FILES["myfile"]["name"];
        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($firstname, $lastname, $age, $email, $pass, $designation, $l, $filename,"programmer", $conobj);
        $mydb->closecon($conobj);
    }
}

?>