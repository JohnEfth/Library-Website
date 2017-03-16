<?php
require_once("../database/dbcontroller.php");
$db = new DBController();
session_start();

$doc_id= $_SESSION['doc_id'];

$NewDate=Date('y-m-d', strtotime("+1 months"));

$sql = "UPDATE documents SET returnDate ='$NewDate' WHERE idDocuments ='$doc_id'";
mysql_query($sql);
header('Location:../profile/Profiletemplate.php');

?>