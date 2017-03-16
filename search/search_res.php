
<?php include '../main/head.php';?>
<?php require_once("../database/dbcontroller.php");
$db = new DBController();?>

<?php


$lib = $_POST['field_name'][0];
$type=$_POST['field_name'][1];
$date=$_POST['choose_date'];

$sql="SELECT * FROM documents where libName ='$lib' and type ='$type' and publicationDate <= '$date' ";

$res = mysql_query($sql);

$count = mysql_num_rows($res);
echo $lib;

?>
<?php include '../main/footer.php';?>