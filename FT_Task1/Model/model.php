<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="regtask";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
             echo "can't create connection object. ".$conn->connect_error;
        }
        return $conn;
    }
    function InsertData($fname, $lname, $age, $email, $pass, $designation, $planguage, $file, $tablename, $conn)
    {
        $qslstr="INSERT INTO $tablename (fname, lname, age, email, pass, designation, planguage, filenm) 
        VALUES ('$fname','$lname',$age,'$email','$pass','$designation','$planguage','$file')";
        if($conn->query($qslstr)===TRUE)
        {
            echo "Data Inserted";
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }
    function closecon($conn)
    {
        $conn->close();
    }
}
?>