
<?PHP
if (session_status() == PHP_SESSION_NONE) {    
    session_start();
}

?>


<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="../main/css/foundation.css" />
    <link rel="stylesheet" href="../main/css/app.css" />
  
    <link rel='stylesheet' href="../main/main.css"/>
    <link rel="stylesheet" href="../profile/profile.css" />
    <link rel="stylesheet" href="../search.css" />
    <link rel="stylesheet" href="../libraries/libraries.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="main_sass.css" />
  </head>
  
<body style="background:lightgrey;">

  <div class="top-bar">
  
  <div class="top-bar-right">
    <button class="btn btn-link " type="button">
                  <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
                  Φωνητική Υποστήριξη
                </button>
                <button class="btn btn-link dropdown-toggle " aria-expanded="false" aria-haspopup="true" type="button" data-toggle="dropdown">
                   Languages 
                   <span class="caret"></span>
                </button>
  </div>
</div>

<div id="wat">
<img src = "../main/ddd (2).jpg"   id="head_image"/>




  <!--title bar -->
    <div class="primary title-bar " style="background:lightgrey;">
        <div class="title-bar-left ">
            <button class="menu-icon hide-for-large"   type="button" data-toggle="offCanvasLeft" ></button>
            <span class="title"><strong>Μενού</strong></span>
        </div>

        <div class="title-bar-right">
            <button class="menu-icon" type="button" data-toggle="offCanvasRight"></button>
            <span class="title"><strong>Προφίλ</strong></span>
        </div>
    </div>
     <!--title bar END -->

  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!--left side bar-->
        <div class="off-canvas position-left " id="offCanvasLeft" data-off-canvas>

            <div id="navbar-left">   
              <a href="../main/index.php"><img src="../main/Capture.png"/></a>

              <h6 style="margin-left:50px; color:white; letter-spacing:5px;"><strong>ΥΠΗΡΕΣΙΕΣ <br/>ΒΙΒΛΙΟΘΗΚΩΝ <br/>ΕΚΠΑ</strong><h6>

              <ul class="sidebar-nav">                 
                  <li ><a href="../main/ann.php">Ανακοινώσεις</a></li>
                  <li ><a href="../libraries/libraries.php">Βιβλιοθήκες</a></li>
                  <li ><a href="../search/advanced_search.php">Αναζήτηση</a></li>
                  <li><a herf="#">Βοήθεια</a></li>
              </ul>

              <div id="fb">
                <h6>Copyrights @ EamTeam 14</h6>
              </div>
            </div>
        </div>

         <!--right side bar-->
        <div class="off-canvas  position-right " id="offCanvasRight" data-off-canvas  data-position="right"> 
            <div id="navbar">
              
                <ul class="sidebar-nav"> 
                <?php 
                    if ((isset($_SESSION['login']))){
                      echo '<li><a href="../profile/Profiletemplate.php">Προφίλ</a></li>';
                      echo '<li><a href="../database/log_out.php">Έξοδος</a></li>';
                    } else{    
                    
                    echo '<li><a data-toggle="modal" data-target="#popUpWindow" >Είσοδος</a></li>';
                    echo '<li><a data-toggle="modal" data-target="#sign_up_modal">Εγγραφή</a></li>';
                    
                  }
                ?>
                </ul>

            </div>
        </div>

        <!-- main content-->
        <div class="off-canvas-content" data-off-canvas-content>

                    <div id="navbar-left2" class="show-for-large">   
                           <a href="../main/index.php"><img src="../main/Capture.png"/></a>

                          <h6 style="margin-left:50px; color:white; letter-spacing:5px;"><strong>ΥΠΗΡΕΣΙΕΣ <br/>ΒΙΒΛΙΟΘΗΚΩΝ <br/>ΕΚΠΑ</strong><h6>

                          <ul class="sidebar-nav">                 
                            <li ><a href="../main/ann.php">Ανακοινώσεις</a></li>
                            <li ><a href="../libraries/libraries.php">Βιβλιοθήκες</a></li>
                            <li ><a href="../search/advanced_search.php">Αναζήτηση</a></li>
                            <li><a herf="#">Βοήθεια</a></li>
                          </ul>

                         
                    </div>


        