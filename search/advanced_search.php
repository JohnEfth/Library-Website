<?php include '../main/head.php'; ?>
<nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-large  hide-for-small" id="bread-for-large">
                <li><a href="../main/index.php">Αρχική</a></li>
                <li class="disabled">Αναζήτηση</li>
              </ul>
          </nav>

          <nav aria-label="You are here:" role="navigation">
              <ul class="breadcrumbs show-for-small  hide-for-large" >
                <li><a href="../main/index.php">Αρχική</a></li>
                <li class="disabled">Αναζήτηση</li>
                
              </ul>
          </nav>  

<div id ="wa" style="width:50%; margin-left:25%;">

<h2 style="text-align:center;"> Αναζητήστε ανάμεσα σε βιβλιοθήκες και υλικό </h2>

<ul class="tabs" data-tabs id="example-tabs">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Αναζήτηση Βιβλιοθηκών</a></li>
  <li class="tabs-title"><a href="#panel2">Αναζήτη Υλικού</a></li>
</ul>

<div class="tabs-content" data-tabs-content="example-tabs">
  <div class="tabs-panel is-active" id="panel1">
    
  <form role="form" action="../search/libraries_search_res.php" method="post">
                            <div class="form-group">
                                <h3>Επιλέξτε Κριτήριο αναζήτησης</h3>
                                  Όνομα<input type="radio" name="radio" value="Όνομα"> 
                                  Τμήμα<input type="radio" name="radio" value="Τμήμα">
                                  Περιοχή<input type="radio" name="radio" value ="Περιοχή">
                                  id<input type="radio" name="radio" value ="id">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Εισάγετε λέξη κλειδί" name="key">
                            </div>
                           
                            <input type="submit" class="btn btn-primary btn-block" value="Υποβολή">
            </form>



  </div>



  <div class="tabs-panel" id="panel2">
<form role="form" action="../search/doc_search_result.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Εισάγετε τίτλου εγγράφου " name="title">
                            </div>
                           <div class="form-group">
                                <h3>Επιλέξτε Τύπο εγγράφου</h3>
                                Όλα: <input type="radio" name="radio" value="Όλα">
                                Βιβλία<input type="radio" name="radio" value="Βιβλία"> 
                                Διπλωματικές<input type="radio" name="radio"  value="Διπλωματικές">
                                Άρθρα<input type="radio" name="radio" value="Άρθρα">
                                Περιοδικά<input type="radio" name="radio" value="Περιοδικά">
                            </div>
                            <div class="form-group">
                              <h4>Επιλέξτε Ημερομηνία δημοσιέυσης</h4>
                              <p>Πρίν απο :<input type="date" class="form-control"  name="date"></p>
                            </div>
                            <input type="submit" class="btn btn-primary btn-block" value="Υποβολή">
            </form>

   
  </div>
</div>
</div>
<?php include '../main/footer.php'; ?>
