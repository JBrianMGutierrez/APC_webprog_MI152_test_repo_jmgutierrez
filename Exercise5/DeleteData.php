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
  
  $Search = $_POST['search'];
  
  $sql = "DELETE FROM myinput WHERE Name='$Search'";

  if(!mysqli_query($con,$sql)) 
  {
	   
	   echo "<script>
		alert('Deletion Failed!');
		window.location.href='MyReadEditDelete.html';
	   </script>";
  }
  else
  {
	   echo "<script>
		alert('Deletion Success!');
		window.location.href='MyReadEditDelete.html';
	   </script>";
  }
  mysqli_close($con);
?>