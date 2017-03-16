
<?php include '../main/head.php'; ?>
<?php include '../database/connect.php';?>

<?php 

$lib = $_GET['libName'];
$addr = $_GET['address'];
$tel = $_GET['telNum'];
$email = $_GET['email'];
$des = $_GET['description'];
$dep = $_GET['department'];
$web = $_GET['website'];
?>



<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs show-for-large" id="bread-for-large">
    <li><a href="../main/index.php">Αρχική</a></li>
    <li ><a href="libraries.php">Βιβλιοθήκες</a></li>
    <li class="disabled"><?php echo $lib;?></li>
  </ul>
</nav>

<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs show-for-small" >
    <li><a href="../main/ index.php">Αρχική</a></li>
    <li ><a href="libraries.php">Βιβλιοθήκες</a></li>
    <li class="disabled"><?php echo $lib;?></li
  </ul>
</nav>


<div id = "all_libraries_large" class="show-for-large hide-for-small">
<h2><?php echo $lib;?></h2>

<div id="lib_details">
Τμήμα:<?php echo $dep;?><br/>
Διεύθηνση:<?php echo $addr;?><br/>
Τηλέφωνο:<?php echo $tel;?><br/>
email:<?php echo $email;?><br/>
website:<?php echo "<a href='http://www.lib.uoa.gr/'>$web</a>";?>
</div>
<div id="lib_description"><?php echo "<p>$des</p>";?></div>
<div id="lib_documents">
<?php include 'library_page_php.php';?>

</div>
</div>

<div id = "all_libraries_small" class="show-for-small hide-for-large">
<h2><?php echo $lib;?></h2>


	<div id="lib_details">
	Τμήμα:<?php echo $dep;?><br/>
	Διεύθηνση:<?php echo $addr;?><br/>
	Τηλέφωνο:<?php echo $tel;?><br/>
	email:<?php echo $email;?><br/>
	website:<?php echo "<a href='http://www.lib.uoa.gr/'>$web</a>";?>
	</div>
	<div id="lib_description"><?php echo "<p>$des</p>";?></div>

<div id="lib_documents" >
<?php include 'library_page_php.php';?>

</div>
</div>





<?php 	include '../main/footer.php';?>


