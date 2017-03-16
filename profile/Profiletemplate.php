
<?php include '../main/head.php';
?>

<?php
require_once("../database/dbcontroller.php");
$db = new DBController();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
?>

<nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-large" id="bread-for-large">
                <li><a href="../main/index.php">Αρχική</a></li>
                <li class="disabled">Το προφίλ μου</li>
              </ul>
          </nav>

          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-small" >
                <li><a href="../main/index.php">Αρχική</a></li>
                <li class="disabled">Το προφίλ μου</li>
                
              </ul>
          </nav>
	<div  id="large">
	    <div class="callout">
			<!-- TA STOIXEIA MOU -->
	   		<p class="profilbelow"><font size="4">Τα στοιχεία μου</font></p>
	   		<div class="callout">
				<div class="row">
			  		<div class="medium-6 columns">	  			
			  			<?php
			  				//get the user id from $_SESSION['id']
			  				$id = $_SESSION['id'];
			  				$sql = "SELECT * from users where idUsers ='$id' ";
			  				$res = mysql_query($sql) or die("could not excecute query");

			  				$row = mysql_fetch_array($res);

			  				$name = $row['name'];
			  				$surname = $row['surname'];
			  				$email = $row['email'];
			  				$department = $row['department'];
			  			
		   					echo "  <p>Όνομα:  <strong>  ".$name." </strong></p>
					   				<p>Επώνυμο:<strong>  ".$surname."</strong></p>
					   				<p>Τμήμα:  <strong>  ".$department."</strong></p>
					   				<p>email:  <strong>  ".$email."</strong></p>
					   				</div>";

					   		//get the lended documents 
					   		$cur_date = date("Y-m-d");
					   		//not expired		   		
		   					$sql1 =  "SELECT * from documents where useridLended = '$id'  and returnDate > '$cur_date'";
		   					$lended = mysql_query($sql1) or die("could not excecute query");
							$count_lended = mysql_num_rows($lended);
							//expired
		   					$sql2 =  "SELECT * from documents where useridLended = '$id'  and returnDate <= '$cur_date'";
							$expired = mysql_query($sql2);
							$count_expired = mysql_num_rows($expired);

							echo "<div class='medium-6 columns'>
				   				<p>Δανεισμένα Έγγραφα:<strong>".$count_lended."</strong></p>
				   				<p>Ληξιπρόθεσμα Έγγραφα:<strong>".$count_expired."</strong></p>
				   				</div>	";
		   				?>			
	   				</div>
	   			</div>
				<!--TA STOIXEIA MOU TELOS  -->
                <!-- Lixiprothesma Biblia -->
	       		<red><p class="thick"> <font size="4">Ληξιπρόθεσμα Έγγραφα</font></p></red>
	       		<div class="callout">
		   			<ul class="bookside">
		   				<?php
		   				 if($count_expired ==0){
		   				 	echo '<li>Δεν Υπάρχνουν ληξιπρόθεσμα έγγραφα</li>';
		   				 }

		   				for($i=0; $i < $count_expired; ++$i){
		   					$row = mysql_fetch_array($expired);
		   					$title = $row['title'];
		   					$id = $row['idDocuments'];
		   					echo "<li>".$title."</li>";
		   					echo "<red><p>Ημερομηνία Επιστροφής: Έληξε</p></red>";
		   					echo '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#popUpWindow"	>Ανανέωση Δανεισμού</button>';		
		   				}?>
		   			</ul>
		   		</div>
				<!-- Lixiprothesma Biblia TELOS -->
				<!-- Daneismena Biblia -->
		   		<p class="profilside"> <font size="4">Δανεισμένα Έγγραφα </font></p>
	       		<div class="callout ">
		   			<ul class="bookside">

		   				<?php
		   				if($count_lended ==0){
		   				 	echo '<li>Δεν Υπάρχνουν δανεισμένα έγγραφα</li>';
		   				 }
		   				for($i=0; $i < $count_lended; ++$i){
		   					$row = mysql_fetch_array($lended);
		
		   					echo "<li>". $row['title']."</li>";
		   					echo "<red><p>Ημερομηνία Επιστροφής:".$row['returnDate']."</p></red>";				
		   				}?>
		   			</ul>
		   		</div>
	   		<!-- Daneismena Biblia TELOS-->
			</div> 
		</div> 	
	</div> 



<?php include '../main/footer.php';?>

	   	<!-- ανανεωση δανεισμου-->
		<div class="container">
		    <div class="modal fade" id="popUpWindow" >
		        <div class="modal-dialog modal-lg">
		            <div class="modal-content">
		            <form action="../database/lend_update.php" method="post">
  					<!-- header -->
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal">&times;</button>
		                    <h3 class="modal-title">Ανανέωση Δανεισμού</h3>
		                </div>

		                <!-- body (form) -->
		                <div class="modal-body">
		                    <h5>Ανανέση δανεισμού για το έγγραφο <?php echo $title;?>  για μία εβδομάδα</h5>
		                    <?php $_SESSION['doc_id'] = $id;?>
		                </div>
		                <div class="modal-body">
		                	<h5><strong>Είστε σίγουροι;</strong></h5>
		                </div>
		                <div class="modal-body">
		                <input id = "btn"type="submit" class="btn btn-primary btn-block" value="Ανανέωση">
						<button id = "btn" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#popUpWindow">Άκυρο</button>
		               	</div>

		               <div class="modal-body">
  						
		               </div>
		              </form>
		            </div>
		        </div>
		    </div>
		</div>