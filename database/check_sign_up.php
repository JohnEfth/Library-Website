<?php

require_once("../database/dbcontroller.php");
$db = new DBController();
session_start();

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);
$name = test_input($_POST['name']);
$surname = test_input($_POST['surname']);
$email = test_input($_POST['email']);
$department = test_input($_POST['department']);

echo $username;
echo $password;
echo $name;
echo $surname;
echo $department;

$sql="SELECT idUsers from users";
$res=mysql_query($sql);
$count = mysql_num_rows($res);
echo $count;
$userid = $count + 1;
$sql="INSERT INTO users (idUsers,username,surname,email,department,name,password)
VALUES ('$userid','$username','$surname','$email','$department','$name','$password')";
$res=mysql_query($sql) or die("Unable to insert into database");

$_SESSION['login'] = 1;
$_SESSION['id']  = $userid;


header('Location: ../profile/Profiletemplate.php'); 

function test_input($data) {
	$data = stripslashes($data);
	$data = mysql_real_escape_string($data);
	return $data;
 }
?>