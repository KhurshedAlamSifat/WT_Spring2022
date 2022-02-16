<?php
   	

	   //Get form data
	   $formdata = array(
	      'FirstName"'=> $_POST["FirstName"],
	      'LastName'=> $_POST["LastName"],
		  'Age'=> $_POST["Age"],
	      'Email'=>$_POST["Email"],
	      'Designation'=> $_POST["Designation"],
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 #echo "my value: ".$mydata[1]->LastName;
	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	
?>