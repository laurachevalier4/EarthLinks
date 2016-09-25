<?php

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
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
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $userid = mysql_escape_string($_GET['userid']);
  $result = mysql_query("SELECT Points FROM $tableName WHERE ID = '".intval($userid)."'");          //query
  $array = mysql_fetch_row($result);                          //fetch result

  //--------------------------------------------------------------------------
  // 3) echo result as json
  //--------------------------------------------------------------------------
  echo json_encode($array);

?>
