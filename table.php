<?php
//table.php

//getting our configuration
require_once("../../../config.php");

//create connection_aborted
$mysql = new mysqli("localhost",$db_username, $db_password,"webpr2016_marvin");

//SQL sentence
$stmt = $mysql->prepare("SELECT id, recipient, message, created FROM messages_sample");

//if error in sentence
echo $mysql->error;

//variables for data for each row we will get
$stmt->bind_result ($id, $recipient, $message, $created);

//quiery
if $stmt->execute();
		
//GET RESULT
//we have multiple rows
while($stmt->fetch()){
	
	//DO SOMETHING FOR EACH ROW
	echo $id." ".$message."<br>";
}


?>




<a href="app.php">app</a>