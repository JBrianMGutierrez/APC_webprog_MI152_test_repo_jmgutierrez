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
  
  $sql = "UPDATE myinput SET Name='$Name', Nickname='$Nickname', Email='$Email',Home_Address='$Home_Address', Comment='$Comment', Gender='$Gender', Cellphone='$Cellphone' WHERE Name='$Search'";

  if(!mysqli_query($con,$sql)) 
  {
	   
	   echo "<script>
		alert('Updates Failed!');
		window.location.href='MyReadEditDelete.html';
	   </script>";
  }
  else
  {
	   echo "<script>
		alert('Update Success!');
		window.location.href='MyReadEditDelete.html';
	   </script>";
  }
  mysqli_close($con);
?>