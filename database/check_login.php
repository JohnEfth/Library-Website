

<html>
<head>
	    <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Foundation | Welcome</title>
      <link rel="stylesheet" href="../main/css/foundation.css" />
      <link rel="stylesheet" href="../main/css/app.css" />
      <link rel="stylesheet" href="../main/main.css" />
      <link rel="stylesheet" href="../search.css" />
      <link rel="stylesheet" href="../libraries/libraries.css" />
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <link rel="stylesheet" href="main_sass.css" />
      <script src="script.js"></script>



  <style>
  	#failed_log{height:40%;  width: 50%; margin-left: 25%; margin-top: 15%;}
  	h3,h5{text-align: center;}
  	a{font-size: 25px; text-decoration: none;}
  	a:hover{text-decoration: none;}
  </style>

</head>

<body>
<?php
session_start();

require_once("../database/dbcontroller.php");
$db = new DBController();

$username=test_input($_POST['username']);
$password=test_input($_POST['password']);

$sql="SELECT * from users where username = '$username' AND password='$password' ";

$res = mysql_query($sql);

$count = mysql_num_rows($res);
if($count == 0){
	echo '<div class="callout alert" id="failed_log">
  			<h3>Αποτυχία Σύνδεσης</h3>
  			
  			<h5>	Λάθος Όνομα Χρήστη ή Κωδικός</h5>
 			<a class="expanded button" href="../main/index.php">Επιστροφή στην Αρχική Σελίδα</a>
 			<a data-toggle="modal" data-target="#popUpWindow" class="expanded button" href="#">Είσοδος</a>

		  	<!-- header -->
		  	<div class="container">
			    <div class="modal fade" id="popUpWindow">
			        <div class="modal-dialog modal-lg">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			                    <h3 class="modal-title">Είσοδος</h3>

			                </div>

			                <!-- body (form) -->
			                <div class="modal-body">
			                    <form role="form" action="../database/check_login.php" method="post">
			                        <div class="form-group">
			                            <input type="username" class="form-control" placeholder="Όνομα Χρήστη" name="username">
			                        </div>
			                        <div class="form-group">
			                            <input id="password" type="password" class="form-control" placeholder="΄Κωδικός" name="password">
			                        </div>
			                        <input type="submit" class="btn btn-primary btn-block" value="Υποβολή">
			                    </form>

			                </div
			            </div>
			        </div>
			    </div>
			</div>
		</div>';
}else {
	
	$row=mysql_fetch_array($res);

	$_SESSION['login']=1;
	$_SESSION['id'] = $row['idUsers'];



	header('Location: ../profile/Profiletemplate.php'); 
}


function test_input($data) {
$data = stripslashes($data);
$data = mysql_real_escape_string($data);

  return $data;
 }
?>

</body>
</html>