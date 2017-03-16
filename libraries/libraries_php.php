
	<?php

	 $sql = "SELECT * from libraries";
	$res = mysql_query($sql);
	$count = mysql_num_rows($res);

	echo "<div id='wat'><ul class='accordion' data-accordion data-allow-all-closed='true'>";
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
