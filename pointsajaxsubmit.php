<?php

  $host = "databaseinstance.cmpvv7vrynza.us-west-2.rds.amazonaws.com";
  $user = "arregoitiaJ1";
  $pass = "Iamiamiam123";

  $databaseName = "earthlinks";
  $tableName = "Users";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
  //--------------------------------------------------------------------------
  // 2) Post data to database
  //--------------------------------------------------------------------------
  $points = $_POST['points'];
  $userid = $_POST['userid'];
  $query = mysql_query("UPDATE $tableName set Points=Points + $points WHERE ID = '".intval($userid)."'");

  echo "Points added successfully";
  mysql_close($con); // Connection Closed

?>
