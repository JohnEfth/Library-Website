<?php

	$sql = "SELECT * from documents WHERE libName='$lib'";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);

	echo "<table id='lib_doc_results'><thead><tr><th>Όνομα</th> <th>Συγγραφέας</th> <th>Ημερομηνία Έκδοσης</th>  <th>Τύπος</th> <th>Διαθεσιμότητα</th></tr></thead><tbody>";
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
?>