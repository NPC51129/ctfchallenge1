<?php
$id = @(float)$_GET['id'];

if($id == 0 || $id>2){
	echo 'I will tell you a secret: my id is 1. Now can you find my name?<br>';
}

$secretId = 1;
if($id == $secretId){
    echo 'Naive<br>';
}
else{
	require 'db.php';
	$query = 'SELECT * FROM users WHERE id = \''.$id.'\';';
	if(mysql_errno())die(mysql_error());
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
	if(mysql_num_rows($query)<1)die("no record!");
   
    echo "id: ".$row['id']."</br>";
    echo "name:".$row['name']."</br>";
}