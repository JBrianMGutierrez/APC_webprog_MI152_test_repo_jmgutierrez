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
  $Name = $_POST['name'];
  $Nickname = $_POST['nickname'];
  $Email = $_POST['email'];
  $Home_Address = $_POST['homeaddress'];
  $Comment = $_POST['comment'];
  $Gender = $_POST['gender'];
  $Cellphone = $_POST['cellphone'];
  
  $sql = "UPDATE myinput SET Name='$Name' WHERE Name='$Search'";

  if(!mysqli_query($con,$sql)) 
  {
	   
	   echo "<script>
		alert('Failed!');
		window.location.href='MyForm.html';
	   </script>";
  }
  else
  {
	   echo "<script>
		alert('Success!');
		window.location.href='MyForm.html';
	   </script>";
  }
  
?>