<?php
$username = "root";
$password = "xuxpK5fYppPzPewJ";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
  
$selected = mysql_select_db("mydatabase",$dbhandle)
  or die("Could not select mydatabase");
  
echo "Connected to MySQL<br>";
?>



