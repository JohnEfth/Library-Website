<?php
require_once("../database/dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM users WHERE userName='" . $_POST["username"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Το όνομα χρήστη δεν είναι διαθέσιμο.</span>";
  }else{
      echo "<span class='status-available'> Όνομα χρήστη διαθέσιμο.</span>";
  }
}
?>	