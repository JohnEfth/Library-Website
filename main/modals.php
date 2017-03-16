<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  
  	<script src="../database/script.js"></script>	
</head>
<body>

<script > 

function checkAvailability() {
	$("#load").show();
	jQuery.ajax({
	url: "../database/check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#load").hide();
	},
	error:function (){}
	});
}



  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Δεν έχετε εισάγει όνομα χρήστη!");
      form.username.focus();
      return false;
    }
      if(form.password.value != "" && form.password.value == form.password_val.value) {  
     	
    } else {
      alert("Δεν έχετε εισάγει κωδικό ή οι κωδικοί δεν ταιριάζουν!");
      form.password.focus();
      return false;
    }
    
       if(form.surname.value == "") {
      alert("Δεν έχετε εισάγει επίθετο!");
      form.surname.focus();
      return false;
    
    }
    if(form.name.value == "") {
      alert("Δεν έχετε εισάγει όνομα!");
      form.name.focus();
      return false;
    }
   
    
  
     if(form.email.value == "") {
      alert("Δεν έχετε εισάγει email!");
      form.email.focus();
      return false;
    }
      if(form.department.value == "") {
      alert("Δεν έχετε εισάγει τμήμα!");
      form.department.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Μή επιτρεπόμενοι χαράκτηρες στον όνομα χρήστη!");
      form.username.focus();
      return false;
    }
  
    return true;
  }

</script>
<style>
#frmCheckUsername {border-top:#F0F0F0 2px solid;background:lightblue;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}


#form_el{
	width: 70%;

}
html, body, ul, ol, li, form, fieldset, legend{
	margin: 0;
	padding: 0;
}

body{
	background: #CCC repeat;
	font-family: 'Vollkorn', serif, Arial;
	font-size: 15px;
	line-height: 1.5;
}

h1, h2, h3, h4, h5, h6, p { 
	margin: 0; 
}
		
p{
	margin-bottom:15px;
}
		
a{
	color:#0073BF;
	text-decoration:none;
}
		
#container{			
	width:600px;
	margin:0 auto;
	background:#ffffff;
	padding:20px;
}

#header{
	text-align:center;
	margin:20px 0 40px;
}
		
#footer{
	text-align:center;
	margin-top:40px;
}

/*#register {
	margin-left:100px;	
}*/
#register label{
	margin-right:5px;
}
#register input {
	padding:5px 7px;
	border:1px solid #d5d9da;
	box-shadow: 0 0 5px #e8e9eb inset;
	width:70%;
	font-size:1em;
	outline:0;
}



#register .short{
	color:#FF0000;
}

#register .weak{
	color:#E66C2C;
}

#register .good{
	color:#2D98F3;
}

#register .strong{
	color:#006400;
}
</style>

<?php
		


		echo '<!-- MODAL FOR SIGN UP -->
		<div class="container">
		    <div class="modal fade" id="sign_up_modal">
		        <div class="modal-dialog modal-lg">
		            <div class="modal-content">

  					<!-- header -->
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal">&times;</button>
		                    <h3 class="modal-title">Εγγραφή</h3>
		                </div>

		                <!-- body (form) -->
		                <div class="modal-body">
		                    <form role="form" action="../database/check_sign_up.php" method="POST" id="register" onsubmit="return checkForm(this);">
		                       
		                        <div class="form-group"  id="form_el">

		                            <input type="username" class="form-control" placeholder="Όνομα Χρήστη" name="username" id="username" onBlur="checkAvailability()">
		                            <span id="user-availability-status"></span>  
		                            
		                        </div>


		                        <div class="form-group" id="form_el">
		                            <input id="password" type="password" class="form-control" placeholder="Κωδικός" name="password">
		                        </div>	<span id="result"></span>


		                        <div class="form-group"  id="form_el">
		                            <input type="password" class="form-control" placeholder="Επαλήθευση Κωδικού" name="password_val">
		                        </div>
		                        <div class="form-group" id="form_el">
		                            <input type="surname" class="form-control" placeholder="Επίθετο" name="surname">
		                        </div>
		                        <div class="form-group" id="form_el">
		                            <input type="name" class="form-control" placeholder="Όνομα" name="name">
		                        </div>
		                        <div class="form-group" id="form_el">
		                            <input type="email" class="form-control" placeholder="Email" name="email">
		                        </div>
		                        <div class="form-group" id="form_el">
		                            <input type="department" class="form-control" placeholder="Τμήμα" name="department">
		                        </div>

		                        <input type="submit" class="btn btn-primary btn-block" value="Υποβολή" >
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>';


 


 if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')){

  	echo '	             

<!-- MODAL FOR LOG IN -->
		<div class="container">
		    <div class="modal fade" id="popUpWindow">
		        <div class="modal-dialog modal-lg">
		            <div class="modal-content">

  					<!-- header -->
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
		                            <input type="password" class="form-control" placeholder="Κωδικός" name="password">
		                        </div>
		                        <input type="submit" class="btn btn-primary btn-block" value="Υποβολή">
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>';
	}	

?>
 				


		
</body>
</html>