<?php

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "databaseinstance.cmpvv7vrynza.us-west-2.rds.amazonaws.com";
  $user = "arregoitiaJ1";
  $pass = "Iamiamiam123";

  $databaseName = "earthlinks";
  $tableName = "Events";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $zipcode = mysql_escape_string($_GET['ZipCode']);
  $result = mysql_query("SELECT * FROM $tableName WHERE ZipCode = $zipcode");          //query
  $array = mysql_fetch_row($result);                          //fetch result

  //--------------------------------------------------------------------------
  // 3) echo result as json
  //--------------------------------------------------------------------------
  echo json_encode($array);

?>
