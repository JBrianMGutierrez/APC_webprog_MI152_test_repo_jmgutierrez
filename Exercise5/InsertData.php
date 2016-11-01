<?php
$username = "root";
$password = "xuxpK5fYppPzPewJ";
$hostname = "localhost";
$DbName = "mydatabase";

//connection to the database
$con = mysqli_connect($hostname, $username, $password);
  
  if(!$con)
  {
	  echo 'Not connected to server';
  }
  if(!mysqli_select_db($con, 'mydatabase'))
  {
	  echo 'Database Not Selected';
  }
  
  $Name = $_POST['name'];
  $Nickname = $_POST['nickname'];
  $Email = $_POST['email'];
  $Home_Address = $_POST['homeaddress'];
  $Comment = $_POST['comment'];
  $Gender = $_POST['gender'];
  $Cellphone = $_POST['cellphone'];
  
  $sql = "INSERT INTO myinput VALUES ('$Name', '$Nickname', '$Email', '$Home_Address', '$Comment', '$Gender', '$Cellphone')";

  if(!mysqli_query($con,$sql))
  {
	  echo 'Not Inserted';
  }
  else
  {
	  echo 'Inserted';
  }
header("refresh:2; url=MyForm.html");
?>
