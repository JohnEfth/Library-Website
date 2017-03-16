<?php include '../main/head.php';?>
<style>
		#wat-large{
			width: 50%;
			margin-left: 25%;
		}
	</style>
	<nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-large hide-for-small" id="bread-for-large">
                <li><a href="../main/index.php">Αρχική</a></li>
                <li><a href="../search/advanced_search.php">Αναζήτηση</a></li>
                <li class="disabled">Αποτελέσματα Αναζήτησης</li>
              </ul>
          </nav>

          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-small hide-for-large" >
                <li><a href="../main/index.php">Αρχική</a></li>
               <li><a href="../search/advanced_search.php">Αναζήτηση</a></li>
                <li class="disabled">Αποτελέσματα Αναζήτησης</li>
                
              </ul>
          </nav>	
	<?php

	require_once("../database/dbcontroller.php");
	$db = new DBController();

	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");


	$type= $_POST['radio'];
	$date = $_POST['date'];
	
echo $type;
	$title=$_POST['title'];

echo $title;
	if($type == 'Όλα'){
		$sql="SELECT * FROM documents WHERE libName = '$title' and publicationDate > '$date' ";
	}else if($type == 'Βιβλία')
	{	
		$sql = "SELECT * from documents where libName = '$title' and publicationDate > '$date' and type='book' ";
	}else if($type == 'Διπλωματικές'){
		$sql = "SELECT * from documents where libName = '$title' and publicationDate > '$date' and type='paper'";
	}else if($type == 'Άρθρα'){
		$sql = "SELECT * from documents where libName = '$title' and publicationDate > '$date' and type='article' ";
	}
	else if($type == 'Περιοδικά'){
		$sql = "SELECT * from documents where libName = '$title' and publicationDate > '$date' and type='magazines'";
	}	

	
	$res = mysql_query($sql) or die("error");
	$count = mysql_num_rows($res);


echo '<br/><br/>';
	echo '<h3 style="text-align:center; width :50%; margin-left:25%;" >Αποτελέσματα Αναζητησης Yλικού για '.$type.'  με τίτλο '.$title.' και ημερομηνια πριν απο  '.$date.'</h3>';
	echo '<br/><br/>';
	echo "<div id='wat-large' style='width:50%; margin-left:25%;'><ul class='accordion' data-accordion data-allow-all-closed='true'>";
	if($count == 0){
		echo "Δέν βρέθηκε αποτέλεσμα!";
	}
	for($i = 0; $i < $count; ++$i){
		$row = mysql_fetch_array($res);
		$lib = $row['libName'];
			
		$addr=$row['address'];
		
		$tel=$row['telNum'];
		
		$email=$row['email'];
		
		$dis=$row['description'];
		
		$dep=$row['department'];
		
		$web=$row['website'];
		

		echo "
		<li class='accordion'>
			<a href='#panel1d' role='tab' class='accordion-title' id='panel1d-heading' aria-controls='panel1d'><h4>$lib</h4></a>
  
		     <div id='panel1d' class='accordion-content' role='tabpanel' data-tab-content aria-labelledby='panel1d-heading'>
		     <p>$dis</p>
		     <a href='../libraries/library_page.php?libName=$lib & address=$addr & telNum=$tel & email=$email & description=$dis & department=$dep & website=$web'><p>Περισσότερα</p></a>
		    </div>
		</li> ";
	}

	echo "</ul></div>";


?>
<?php include '../main/footer.php';?>