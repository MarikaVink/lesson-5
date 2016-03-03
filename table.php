<?php
//table.php

//getting our configuration
require_once("../../config.php");

//create connection_aborted
$mysql = new mysqli("localhost",$db_username, $db_password,"webpr2016_marvin");

//SQL sentence
$stmt = $mysql->prepare("SELECT id, recipient, message,
 created FROM messages_sample ORDER BY created DESC LIMIT 7");

//if error in sentence
echo $mysql->error;

//variables for data for each row we will get
$stmt->bind_result ($id, $recipient, $message, $created);

//query
$stmt->execute();

$table_html = "";

$table_html .="<table>";
	$table_html .="<tr>";
$table_html .="<th>ID</th>";
$table_html .="<th>Recipient</th>";
$table_html .="<th>Message</th>";
$table_html .="<th>Created</th>";
$table_html .="</tr>";
		
//GET RESULT
//we have multiple rows
while($stmt->fetch()){
	
	//DO SOMETHING FOR EACH ROW
	//echo $id." ".$message."<br>";
	
	
	
}
$table_html .="</table>";
echo $table_html;

?>




<a href="app.php">app</a>