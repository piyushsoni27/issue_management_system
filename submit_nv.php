<?php
require_once "connection.php"; 

$conn = connect();

$var_name = $_POST;

#print_r($var_name["projectname"]);

$sql = "INSERT INTO nv_requests (project, cl_submitted, nv_title, requester_id, submitted_by, date_of_submission, date_of_request, comment) 
							VALUES ('".$var_name['projectname']."','".$var_name['CLno']."','".$var_name['NVname']."','".$var_name['RID']."','".$var_name['sb']."','".$var_name['ds']."','".$var_name['dr']."','".$var_name['comment']."')";

#$sql = "INSERT INTO nv_requests (cl_submitted) VALUES ('".$var_name['CLno']."')";

echo $sql;
							
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

