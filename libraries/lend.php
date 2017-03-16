<?php

require_once("../database/dbcontroller.php");
$db = new DBController();
session_start();

$doc_id = $_GET['doc_id'];
$user_id = $_SESSION['id'];
$lend_type = $_GET['t'];	//m gia makroxronio , d gia aplos daneimos



if($lend_type == 'm'){

	$ret_date = Date('Y-m-d', strtotime("+1 months"));
echo $ret_date;
	$sql ="UPDATE documents  SET returnDate='$ret_date', useridLended = '$user_id', isLended='1' WHERE idDocuments=$doc_id ";
	mysql_query($sql) or die("could not excecute query1");
}else{

$ret_date = Date('Y-m-d', strtotime("+7 days"));
echo $ret_date;	
	$sql ="UPDATE documents  SET returnDate='$ret_date', useridLended = '$user_id',isLended = '1' WHERE idDocuments=$doc_id ";
	mysql_query($sql) or die("could not excecute query2");
}

header('Location:../profile/Profiletemplate.php');
?>