<?php
//create connection variables
$db_host = 'localhost';
$db_user = 'root' ;
$db_pw = '';
$db_name = 'quiz' ;


//use function to get to the db infromation
//create mysqli oject
$mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name);

//Error Handler
if($mysqli->connect_error){
 printf("Connect failed: %s\n" , $mysqli->connect_error);
 exit();

}
