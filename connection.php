<?php  
     function connect()
	 {
       $servername = "localhost";  
       $username = "root";  
       $password = ""; 
		$dbname	   ="cpsystem_issues_database";
       $conn = new mysqli($servername, $username, $password,$dbname) or die("unable to connect to host");  	
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
	   return $conn;
	 }
?>   
