<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
</head>

<body>

<h1 style="text-align:center">NV Request Form</h1>

<div class="container center" style="width:800px">
  <form action="submit_nv.php" method="post">
    <label for="p_name">Project Name</label>
    <select id="p_name" name="projectname">
		<?php 
		require_once "connection.php";		
		$conn = connect();	

		$projectList = "";
		$sql = "SELECT * from nv_requests";
		$result = $conn->query($sql);		
		while($row = $result->fetch_assoc()) {
				$project = $row["project"];
				$projectList .= "<option value='".$project."'>".$project."</option>";
		}	      
	   echo $projectList;
	   $conn->close();
	  ?>
    </select>
    <label for="n_name">NV Title</label>
    <input type="text" id="n_name" name="NVname" placeholder="Type of NV..">
	 
     <label for="RID">Requester's ID</label>
    <input type="text" id="Ri" name="RID" placeholder="ex:a.bhuvan ">

      <label for="clno">Cl#</label>
    <input type="text" id="clno" name="CLno" placeholder="main_cl ex:1080060 ">


       <label for="dor">DATE OF REQUEST   </label>
    <input type="date" id="dor" name="dr" ><br><br>

        <label for="dos">DATE OF SUBMISSION</label>
    <input type="date" id="dos" name="ds" ><br><br>


      <label for="sbm">SUBMITTED BY</label>
    <input type="text" id="sbm" name="sb" placeholder="ex:a.bhuvan ">
 
    <label for="subject">comment</label>
    <textarea id="subject" name="comment" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" >
	
  </form>
</div>


</body>
</html>
