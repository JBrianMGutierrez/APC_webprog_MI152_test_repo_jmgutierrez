<?php
$username = "root";
$password = "xuxpK5fYppPzPewJ";
$hostname = "localhost";
$DbName = "mydatabase";

$NameResult = "";

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
  
  
  $sql = "SELECT * FROM myinput WHERE Name='$Search'";
	
  $result = $con->query($sql);
  if ($result->num_rows > 0) 
  {
		while($row = $result->fetch_assoc()) 
	{
        $NameResult = $row["Name"];
		$NicknameResult = $row["Nickname"];
		$EmailResult = $row["Email"];
		$HomeAddressResult = $row["Home Address"];
		$CommentResult = $row["Comment"];
		$GenderResult = $row["Gender"];
		$CellphoneResult = $row["Cellphone"];
    }
?>
		
<html>
<body background="Pictures\Background.jpg">
<head>
<style>
.nav
{
    border:1px solid #ccc;
    border-width:1px 0;
    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
	background-color: #333;
}
.nav li
{
    display:inline;
}
.nav a
{
    display:inline-block;
    padding:10px;
	color: white;
}
.nav a:hover:not(.active) 
{
    background-color: red;
}
.active 
{
    background-color: red;
}
.box1 
{
    background-color: gray;
    width: 75%;
    padding: 25px;
	border: 1px solid black;
    margin: 25px;
	box-shadow: 5px 5px 5px #000000;
	text-shadow: -1px 6px 3px rgba(163, 150, 150, 0.82);
	margin-left: auto;
	margin-right: auto;
}
.error 
{
	color: #FF0000;
}
form
{
    margin-left:0px;
    width: 400px;
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
	text-align: left;
}
form div + div 
{
    margin-top: 1em;
	text-align: left;
}
textarea
{
    font: 1em sans-serif;
    width: 250px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #999;
}
input:focus, textarea:focus 
{  
    border-color: #000;
}
textarea 
{
    vertical-align: top;
    height: 5em;
    resize: vertical;
}
label 
{
    display: inline-block;
    width: 90px;
    text-align: right;
}
.div1
{
   position: absolute;
   left: 57%;
   top: 27%;
}
textarea 
{
    resize: none;
}
</style>
</head>
<body> 


<center><h1><strong><font color="red">WELCOME TO MY PAGE</font></strong></h1></center>
<hr>
<font size="3.5">
<ul class="nav">
  <li><a href="MyPage.html">Home</a></li>
  <li><a href="MyTrivia.html">Trivia</a></li>
  <li><a href="MyForm.html">Form</a></li>
  <li style="float:center"><a class="active" href="test.php">Search</a></li>
</ul>
</ul> 
<div class ="box1">
<center>
<form action="SelectData.php" method="post">
 <label for="search"></label> <input type="text" name="search" value = "<?php echo $Search ?>"> <input type="submit" name="search_btn" value="Search">
<br><br>
<br><br>
 <label for="name">Name :</label> <input type="text" name="name" id = "1" value="<?php echo $NameResult ?>" disabled>
 <br><br>
 <label for="nickname">Nickname :</label> <input type="text" name="nickname" id = "2" value="<?php echo $NicknameResult ?>" disabled>
 <br><br>
 <label for="email">Email :</label> <input type="text" name="email" id = "3" value="<?php echo $EmailResult ?>" disabled>
 <br><br>
 <label for="home address">Home Address :</label> <input type="text" name="homeaddress" id = "4" value="<?php echo $HomeAddressResult ?>" disabled>
 <br><br>
 <label for="comment">Comment :</label> <textarea wrap="hard" name="comment" rows="5" cols="40" id = "5" disabled ><?php echo $CommentResult?></textarea>
  <br><br>
 <label for="gender">Gender :</label> <input type="text" name="gender" id = "6" value="<?php echo $GenderResult ?>" disabled>
 <br><br>
 <label for="cellphone">Cellphone :</label> <input type="text" name="cellphone" id = "7" value="<?php echo $CellphoneResult ?>" disabled>
 <br><br>
 <center><input type="submit" name="save_btn" value="Save" id = "8" formaction = 'Update.php' ><input type="submit" name="delete_btn" value="Delete"></center>
 </form>
 <center><button onclick = "Edit()">Edit</button></center>
</div>
</font>
<script>
function Edit()
{
	document.getElementById("1").disabled = false;
	document.getElementById("2").disabled = false;
	document.getElementById("3").disabled = false;
	document.getElementById("4").disabled = false;
	document.getElementById("5").disabled = false;
	document.getElementById("6").disabled = false;
	document.getElementById("7").disabled = false;

}
</script>
<hr>
<h2><p><center><font color="red"><font size="5px"><strong>Thanks for viewing my page for that have some Japanese girl</strong></font></center></p></h2>
<center><img src="Pictures\Rena Yamazaki.gif" width="304px" height="228px"></center>
</body>
</html>	
	
<?php
  }
 else 
	{
	}
 
?>
