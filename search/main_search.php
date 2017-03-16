
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
                
                <li class="disabled">Αποτελέσματα Αναζήτησης</li>
              </ul>
          </nav>

          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-small hide-for-large" >
                <li><a href="../main/index.php">Αρχική</a></li>
               
                <li class="disabled">Αποτελέσματα Αναζήτησης</li>
                
              </ul>
          </nav>	
	<?php
	require_once("../database/dbcontroller.php");

	


	$db = new DBController();

	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");


	
	$value = $_POST['title'];

	
	$sql="SELECT * FROM documents WHERE title = '$value' ";
		
	
	
	$res = mysql_query($sql) or die("error");
	$count = mysql_num_rows($res);


echo '<br/><br/>';
	echo '<h3  style="text-align:center;">Αποτελέσματα Αναζητησης βιβλιοθηκών για '.$value.'</h3>';
	echo '<br/><br/>';
	echo "<table  style= 'width:50%; margin-left:25%'><thead><tr><th>Όνομα</th> <th>Συγγραφέας</th> <th>Ημερομηνία Έκδοσης</th>  <th>Τύπος</th> <th>Διαθεσιμότητα</th></tr></thead><tbody>";
	if($count == 0){
		echo "Δέν βρέθηκε αποτέλεσμα!";
	}
	for($i=0; $i < $count; ++$i){
		$row = mysql_fetch_array($res);
		$title =$row['title'];
		$author = $row['author'];
		$type = $row['type'];
		$publication = $row['publicationDate'];
		$validity = $row['isLended'];
		$id = $row['idDocuments'];
		

		echo "<tr><td><a href='booktemplate.php?id=$id'>$title</a></td> <td>$author</td> <td>$publication</td>";
		if($type == 'paper'){
			echo "<td>Διπλωματική</td>";
		}else{
			echo "<td>Βιβλίο</td>";
		}
		if($validity == 0){
			echo "<td>ΝΑΙ</td></tr>";
		}else{
			echo "<td>ΟΧΙ</td></tr>";
		}
	}
	echo "</tbody></table>";
	echo "</ul></div>";

	include '../main/footer.php';
	?>
