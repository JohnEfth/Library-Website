

<?php 	include '../main/head.php';?>

<?php include '../database/connect.php';?>
  <!--breadcrumps-->
          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-large hide-for-small" id="bread-for-large">
                <li><a href="../main/index.php">Αρχική</a></li>
                <li class="disabled">Βιβλιοθήκες</li>
              </ul>
          </nav>

          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-small hide-for-large" >
                <li><a href="../main/index.php">Αρχική</a></li>
                <li class="disabled">Βιβλιοθήκες</li>
                
              </ul>
          </nav>
          <!-- apo dw kai katw -->



<div id = "all_libraries_large" class="show-for-large hide-for-small">
	<h2>Βιβλιοθήκες Πανεπιστημιού Αθηνών<h2>
		<?php include '../libraries/libraries_php.php';?>

</div>

<div id = "all_libraries_small" class="show-for-small hide-for-large">
	<h2>Βιβλιοθήκες Πανεπιστημιού Αθηνών<h2>
		<?php include '../libraries/libraries_php.php';?>
</div>

<?php 	include '../main/footer.php';?>