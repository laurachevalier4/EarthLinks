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
  $userID = mysql_escape_string($_POST['userID']);
  $userName = $_POST['userName'];
  $query = mysql_query("insert into $tableName(FBID, Name) values ('$userID', '$userName')");

  echo "User added successfully";
  mysql_close($con); // Connection Closed

?>
