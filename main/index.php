
<?php include 'head.php'; ?>

<script type="text/javascript">
window.onload = function(){ 
  //Get submit button
  var submitbutton = document.getElementById("tfq");
  var submitbutton2 = document.getElementById("tfq2");
  //Add listener to submit button
  if(submitbutton.addEventListener){
    submitbutton.addEventListener("click", function() {
      if (submitbutton.value == 'Knowledge is Power'){
        submitbutton.value = '';
      }
    });
  }
  if(submitbutton2.addEventListener){
    submitbutton2.addEventListener("click", function() {
      if (submitbutton2.value == 'Knowledge is Power'){
        submitbutton2.value = '';
      }
    });
  }
}
</script>


<!-- CSS styles for standard search box -->
<style type="text/css">
ul{
	font-family: serif;
}
  #tfheader{
    background-color:#2C3E50;
 font-family: serif;
  }
  #tfnewsearch{
    float:left;
    padding:20px;
  }
  .tftextinput{
  	padding: 5px 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    border:1px solid #0076a3; border-right:0px;
    border-top-right-radius: 250px 100px;
    border-bottom-right-radius: 5px 5px;
    border-top-left-radius: 5px 5px;
    border-bottom-left-radius: 150px 150px;
    width: 60vw;
    height: 28px;
    position: relative;
    display: inline-block;
  }
  .tfbutton {
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    color: #000000;  
    border: solid 1px #000000; border-right:0px;
    background: #0095cd;
    background: -webkit-gradient(linear, left top, left bottom, from(#99a0a0), to(#80a0a0));
    background: -moz-linear-gradient(top,  #99a0a0,  #80a0a0);
    border-top-right-radius: 5px 5px;
    border-bottom-right-radius: 150px 150px;
    border-top-left-radius: 250px 100px;
    border-bottom-left-radius: 5px 5px;
    width: 15vw;
    height: 28px;
    position: relative;
    display: inline-block;
    bottom:0px;
    left: -3px; 

  }
  .tfbutton:hover {
    text-decoration: none;
    background: #007ead;
    background: -webkit-gradient(linear, left top, left bottom, from(#800000), to(#4d0000));
    background: -moz-linear-gradient(top,  #800000,  #4d0000);
  }
  .tfclear{
    clear:both;
  }

  .tftextinput2{
  	padding: 5px 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    border:1px solid #0076a3; border-right:0px;
    border-top-right-radius: 250px 100px;
    border-bottom-right-radius: 5px 5px;
    border-top-left-radius: 5px 5px;
    border-bottom-left-radius: 150px 150px;
    width: 50vw;
    height: 28px;
    position: relative;
    display: inline-block;
  }

  .mtheader{
    background-color:#2C3E50;
    float:left;
    font-family: serif;
  }

  .mt{
  	padding: 20px 20px;
  	text-decoration: underline;
    font-family: Arial, Helvetica, sans-serif;
    font-size:20px;
    width: 100vw;
    height: 100vh;
    position: absolute;
    top: 74px;
    left: 0px;
  }

  .mt3{
  	padding: 20px 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:15px;
    width: 100vw;
    height: 100vh;
    position: absolute;
    top: 180px;
    left: 0px;
  }

  .mt2{
  	padding: 20px 20px;
  	text-decoration: underline;
    width: 100vw;
    height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    font-size:20px;
    position: absolute;
    top: 74px;
    left: 20%;
  }
   .mt4{
  	padding: 20px 20px;
    width: 100vw;
    height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    font-size:15px;
    position: absolute;
    top: 130px;
    left: 20%;
  }

</style>



<body>

  <div id="tfheader" class="show-for-small hide-for-large"> 
    <form id="tfnewsearch" method="get" action="http://www.google.com">
            <input type="text" id="tfq" class="tftextinput" name="q" size="40" maxlength="120"  value="Αναζήτηση Υλικού (εισάγετε τίτλο)">
            <input type="submit" value="Αναζήτηση" class="tfbutton">
    </form>
  <div class="tfclear"></div>
  </div>

  <div id="tfheader" class="show-for-large hide-for-small">
    <form id="tfnewsearch" method="post" action="../search/main_search.php" style="margin-left:20%;">
            <input type="text" id="tfq2" class="tftextinput2" name="title" size="40" maxlength="120"  value="Αναζήτηση Υλικού (εισάγετε τίτλο)">
            <input type="submit" value="Αναζήτηση" class="tfbutton">
    </form>
  <div class="tfclear"></div>
  </div> 

  <strong class="show-for-small hide-for-large">
	  <div id="mtheader" class="mt" style="color:#2C3E50">

	  		<h3><b> Καλώς Ορίσατε στις Υπηρεσίες Βιβλιοθηκών του Πανεπιστημίου Αθηνών </b> </h3>
	  </div>

	  <div id="mtheader" class="mt3" style="color:#2C3E50">
	  		<ul> <h3>Εδώ μπορείτε να αναζητήσετε:</h3> 
	  			<li>Βιβλία , άρθρα , περιοδικά κ.α. </li> 
	  			<li>Βιβλιοθήκες κοντά στη περιοχή σας</li> 
	  		</ul> 
	  		<h3>Καθώς και να πλοηγηθείτε στο υλικό των βιβλιοθηκών</h3> 
	  </div>
	</strong>

	<strong class="show-for-large hide-for-small">
	   <div id="mtheader" class="mt2" style="color:#2C3E50">
	  		
	  		<h3><b>Καλώς Ορίσατε στις Υπηρεσίες Βιβλιοθηκών του Πανεπιστημίου Αθηνών </b> </h3>
	  </div>

	  <div id="mtheader" class="mt4" style="color:#2C3E50">
	  		<ul>  <h3>Εδώ μπορείτε να αναζητήσετε:</h3> 
	  			<li>Βιβλία , άρθρα , περιοδικά κ.α. </li> 
	  			<li>Βιβλιοθήκες κοντά στη περιοχή σας</li>
	  		</ul> <h4>Καθώς και να πλοηγηθείτε στο υλικό των βιβλιοθηκών</h4> 
	  </div>
  </strong>



</body>
</html>

<?php include 'footer.php';	 ?>
