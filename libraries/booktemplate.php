
<?php include '../main/head.php';?>
	
<nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-large" id="bread-for-large">
                <li><a href="../main/index.php">Αρχική</a></li>
                <li><a href="../libraries/libraries.php">Βιβλιοθήκες</a></li>
                <li class="disabled">Βιβλίο</li>
              </ul>
          </nav>

          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-small" >
                <li><a href="../main/index.php">Αρχική</a></li>
               <li><a href="../libraries/libraries.php">Βιβλιοθήκες</a></li>
                <li class="disabled">Βιβλίο</li>
                
              </ul>
          </nav>	
<?php 



require_once("../database/dbcontroller.php");
$db = new DBController();

$r=$_GET['id'];
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
$sql = "SELECT * from documents where idDocuments = '$r' ";

$res = mysql_query($sql);

$row = mysql_fetch_array($res);
$doc_id=$row['idDocuments'];
?>
	<div class="small-offset-3 show-for-large hide-for-small">
        <?php  echo '<p><font size="4">'.$row['title'].'</font></p>'	?>
    </div>
  
	<div class="small-offset-2 show-for-large hide-for-small" >

	    <div class="large-11 columns">
	        <div class="callout " style = "overflow:auto; height:85%;">

	        	<?php echo '<img src="'.$row['image'].'"style="margin: 20px 0px">';	?>
       			
       			<div>
		       		<p class="thick"> Περιγραφή </p>

		       		<p>Ημερομηνία Έκδοσης: <?php echo $row['publicationDate'];?></p>
		       		
		        	<p ><space>Συγγραφείς: <?php echo $row['author'];?></space></p>

		        	<p class="bookside"><?php echo $row['description'];?></p>
				</div>
	        	
				<div class="large-6 medium-6">

					<!-- get the library name -->
					<?php 

						$lib = $row['libName'];
						$sql = "SELECT DISTINCT * from libraries where libName = '$lib' ";

						$res = mysql_query($sql);

						$row2 = mysql_fetch_array($res);

						$lib = $row2['libName'];
						$map = $row2['map'];



					?>
					<ul class="vertical menu" data-accordion-menu>
					  
					  <li>

					  	<div class="reveal" id="exampleModal2" data-reveal data-overlay="false">
						  <h3>Αίτημα Δανεισμού για μία (1) εβδομάδα του βιβλίου <?php echo $row['title'];?>  απο <?php echo $lib;?>  </h3>
						  <p>Δείτε στον <?php echo '<a href='.$map.'>χάρτη</a>'; ?>την βιβλιοθήκη</p>
						  <p><strong>Είστε σίγουροι;</strong></p>
							<?php echo "<a class='button' href='lend.php?doc_id=$doc_id & t=d' data-close aria-label='Close reveal' type='button'><font size='2'>Δανεισμός</font></a>";?>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>

						<div class="reveal" id="exampleModal3" data-reveal data-overlay="false">
						  <h3>Αίτημα Μακροχρόνιου Δανεισμού για ένα (1) μήνα του βιβλίου <?php echo $row['title'];?>  απο <?php echo $lib;?>  </h3>
						  <p>Δείτε στον <?php echo '<a href='.$map.'>χάρτη</a>'; ?>την βιβλιοθήκη</p>
						  <p><strong>Είστε σίγουροι;</strong></p>
							<?php echo "<a class='button' href='lend.php?doc_id=$doc_id & t=m' data-close aria-label='Close reveal' type='button'><font size='2'>Δανεισμός</font></a>";?>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>


							

					  	<?php 
					  		if ((isset($_SESSION['login']))){
						  		echo '<a href="#">';

									if($row['isLended'] == 0){

											echo "Βιβλιοθήκη :  ".$row['libName']."  (Διαθέσιμο) ";

											echo '<ul class="menu veritcal nested">
											<div class="expanded button-group">
											  
											  <a class="hollow button" data-open="exampleModal2"><font size="2">Δανεισμός</font></a>
											  <a class="hollow button" data-open="exampleModal3"><font size="2">Μακροχρόνιος Δανεισμός</font></a>
										  	</div>
									    	</ul>';

									}else{
										echo "Βιβλιοθήκη :  ".$row['libName']."  ( <span>Μη Διαθέσιμο</span>) ";
									}

								echo '</a>';
					  		}else{

					  		echo '<div id="warning" ><h5>Για να έχετε πρόσβαση στις υπηρεσίες βιβλιοθηκών του ΕΚΠΑ, πρέπει να συνδεθείτε!</h5>
							<p><a data-toggle="modal" data-target="#popUpWindow"">Σύνδεση</a>
								ή <a data-toggle="modal" data-target="#sign_up_modal"">Εγγραφή</a>
							</p>
					  		</div>';
					  		
					  	}
					  	?>
					  </li>
					 
					</ul>
				</div>
			</div>
    	</div>
	</div>


<div class=" show-for-small hide-for-large">
        <?php  echo '<p><font size="4">'.$row['title'].'</font></p>'	?>
    </div>
	<div class=" show-for-small hide-for-large" id="small">

	    <div class="large-11 columns">
	        <div class="callout " style = "overflow:auto; height:85%;">

	        	<?php echo '<img src="'.$row['image'].'"style="margin: 20px 0px">';	?>
       			
       			<div>
		       		<p class="thick"> Περιγραφή </p>

		       		<p>Ημερομηνία Έκδοσης: <?php echo $row['publicationDate'];?></p>
		       		
		        	<p ><space>Συγγραφείς: <?php echo $row['author'];?></space></p>

		        	<p class="bookside"><?php echo $row['description'];?></p>
				</div>
	        	
				<div class="large-6 medium-6">

					<!-- get the library name -->
					<?php 

						$lib = $row['libName'];
						$sql = "SELECT DISTINCT * from libraries where libName = '$lib' ";

						$res = mysql_query($sql);

						$row2 = mysql_fetch_array($res);

						$lib = $row2['libName'];
						$map = $row2['map'];



					?>
					<ul class="vertical menu" data-accordion-menu>
					  
					  <li>

					  	<div class="reveal" id="exampleModal2" data-reveal data-overlay="false">
						  <h3>Αίτημα Δανεισμού για μία (1) εβδομάδα του βιβλίου <?php echo $row['title'];?>  απο <?php echo $lib;?>  </h3>
						  <p>Δείτε στον <?php echo '<a href='.$map.'>χάρτη</a>'; ?>την βιβλιοθήκη</p>
						  <p><strong>Είστε σίγουροι;</strong></p>
							<?php echo "<a class='button' href='lend.php?doc_id=$doc_id & t=d' data-close aria-label='Close reveal' type='button'><font size='2'>Δανεισμός</font></a>";?>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>

						<div class="reveal" id="exampleModal3" data-reveal data-overlay="false">
						  <h3>Αίτημα Μακροχρόνιου Δανεισμού για ένα (1) μήνα του βιβλίου <?php echo $row['title'];?>  απο <?php echo $lib;?>  </h3>
						  <p>Δείτε στον <?php echo '<a href='.$map.'>χάρτη</a>'; ?>την βιβλιοθήκη</p>
						  <p><strong>Είστε σίγουροι;</strong></p>
							<?php echo "<a class='button' href='lend.php?doc_id=$doc_id & t=m' data-close aria-label='Close reveal' type='button'><font size='2'>Δανεισμός</font></a>";?>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>


							

					  	<?php 
					  		if ((isset($_SESSION['login']))){
						  		echo '<a href="#">';

									if($row['isLended'] == 0){

											echo "Βιβλιοθήκη :  ".$row['libName']."  (Διαθέσιμο) ";

											echo '<ul class="menu veritcal nested">
											<div class="expanded button-group">
											  
											  <a class="hollow button" data-open="exampleModal2"><font size="2">Δανεισμός</font></a>
											  <a class="hollow button" data-open="exampleModal3"><font size="2">Μακροχρόνιος Δανεισμός</font></a>
										  	</div>
									    	</ul>';

									}else{
										echo "Βιβλιοθήκη :  ".$row['libName']."  ( <span>Μη Διαθέσιμο</span>) ";
									}

								echo '</a>';
					  		}else{

					  		echo '<div id="warning" ><h5>Για να έχετε πρόσβαση στις υπηρεσίες βιβλιοθηκών του ΕΚΠΑ, πρέπει να συνδεθείτε!</h5>
							<p><a data-toggle="modal" data-target="#popUpWindow"">Σύνδεση</a>
								ή <a data-toggle="modal" data-target="#sign_up_modal"">Εγγραφή</a>
							</p>
					  		</div>';
					  		
					  	}
					  	?>
					  </li>
					 
					</ul>
				</div>
			</div>
    	</div>
	</div>
<?php include '../main/footer.php';?>