<?php
//table.php

//getting our configuration
require_once("../../config.php");

//create connection_aborted
$mysql = new mysqli("localhost",$db_username, $db_password,"webpr2016_marvin");

//SQL sentence
$stmt = $mysql->prepare("SELECT id, gender, age, height, weight,
 created FROM BMI_app ORDER BY id DESC LIMIT 10");

//if error in sentence
echo $mysql->error;

//variables for data for each row we will get
$stmt->bind_result ($id, $gender, $age, $height, $weight, $created);

//query
$stmt->execute();

$table2_html = "";

$table2_html .="<table>";
	$table2_html .="<tr>";
$table2_html .="<th>ID</th>";
$table2_html .="<th>Gender</th>";
$table2_html .="<th>Age</th>";
$table2_html .="<th>Height</th>";
$table2_html .="<th>Weight</th>";
$table2_html .="<th>Created</th>";
$table2_html .="</tr>";
		
//GET RESULT
//we have multiple rows
while($stmt->fetch()){
	
	//DO SOMETHING FOR EACH ROW
	//echo $id." ".$message."<br>";
		$table2_html .="<tr>";//start new row
$table2_html .="<td>".$id."</td>";
$table2_html .="<td>".$gender."</td>";
$table2_html .="<td>".$age."</td>";
$table2_html .="<td>".$height."</td>";
$table2_html .="<td>".$weight."</td>";
$table2_html .="<td>".$created."</td>";
$table2_html .="</tr>"; //end row
	
	
}
$table2_html .="</table>";
echo $table2_html;

?>




<a href="homeapp.php">app</a>