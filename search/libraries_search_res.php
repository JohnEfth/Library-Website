
	<?php
	


	include '../main/head.php';
	?>

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
	$value = $_POST['key'];

	if($type == 'Όνομα'){
		
		$sql="SELECT * FROM libraries WHERE libName = '$value'";
		
	}else if($type == 'Τμήμα')
	{	
		$sql = "SELECT * from libraries where department = '$value'";
	}else if($type == 'id'){
		$sql = "SELECT * from libraries where idLibraries = '$value'";
	}	

	
	$res = mysql_query($sql) or die("error");
	$count = mysql_num_rows($res);


echo '<br/><br/>';
	echo '<h3 style="text-align:center;">Αποτελέσματα Αναζητησης βιβλιοθηκών για '.$type.'  = '.$value.'</h3>';
	echo '<br/><br/>';
	echo "<div id='wat-large'><ul class='accordion' data-accordion data-allow-all-closed='true'>";
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


	include '../main/footer.php';
	?>
