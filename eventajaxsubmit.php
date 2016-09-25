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
  // 2) Post data to database
  //--------------------------------------------------------------------------
  $title = $_POST['title'];
  $startTime = $_POST['startTime'];
  $endTime = $_POST['endTime'];
  $query = mysql_query("insert into $tableName(title, startTime, endTime) values ('$title', '$startTime', '$endTime')");

  echo "Form Submitted Succesfully";
  mysql_close($con); // Connection Closed

?>
