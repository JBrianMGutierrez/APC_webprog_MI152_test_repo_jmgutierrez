<!DOCTYPE HTML>  
<html>
<body background="BB-WP-12.jpg">
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
    width: 500px;
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
<center><h1><strong><font color="red"><font size="5px">WELCOME TO MY PAGE</font></font></strong></h1></center>
<hr>
<font size="2">
<ul class="nav">
  <li><a href="MyPage.html">Home</a></li>
  <li><a href="MyTrivia.html">Trivia</a></li>
  <li style="float:center"><a class="active" href="PHPFORM.php">Form</a></li>
  <li><a href="#about">About</a></li>
</ul>
</ul> 
<?php
$nameErr = $nicknameErr = $emailErr = $genderErr = $cellphoneErr = $homeaddressErr = "";
$name = $nickname = $email = $gender = $cellphone = $comment = $homeaddress = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/[^0-9a-z\s-]/i",$name)) 
	{
      $nameErr = "Only letters and numbers allowed";
    }
  }

  
  if (empty($_POST["nickname"])) 
  {
    $nicknameErr = "Nickname is required";
  } 
  else 
  {
    $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/[^a-z\s-]/i",$nickname)) 
	{
      $nicknameErr = "Only letters allowed";
    }
  }
  
  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr = "Invalid email format";
    }
  }
  
  
 if (empty($_POST["homeaddress"])) 
  {
    $homeaddressErr = "Home Address is required";
  } 
  else 
  {
    $homeaddress = test_input($_POST["homeaddress"]);
    if (!preg_match("/^[a-z0-9 .\-]+$/i",$homeaddress)) 
	{
      $homeaddressErr = "Only letters and numbers allowed";
    }
  }

  
  if (empty($_POST["comment"])) 
  {
    $comment = "";
  }
  else
  {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) 
  {
    $genderErr = "Gender is required";
  }
  else 
  {
    $gender = test_input($_POST["gender"]);
  }
  
  
  if (empty($_POST["cellphone"])) 
  {
    $cellphoneErr = "Cellphone is required";
  } 
  else 
  {
    $cellphone = test_input($_POST["cellphone"]);
    if (!preg_match("/^[1-9][0-9]*$/",$cellphone)) 
	{
      $cellphoneErr = "Only letters and numbers allowed";
    }
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class ="box1">
<h2>If you are a cute-looking girl I suggest to submit a Form if not, you can still submit!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="test.php">  
  <label for="name">Name:</label> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  
  <br><br>
  <label for="name">Nickname:</label> <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  
  <br><br>
  <label for="email">Email:</label> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  
  <br><br>
  <label for="homeaddress">Home Address:</label> <input type="text" name="homeaddress" value="<?php echo $homeaddress;?>">
  <span class="error"><?php echo $homeaddressErr;?></span>
  
  <br><br>
  <label for="comment">Comment:</label> <textarea wrap="hard" name="comment" rows="5" cols="40" ><?php echo $comment;?></textarea>
  <br><br>
  <label for="gender">Gender:</label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <label for="cellphone">Cellphone #:</label> <input type="text" name="cellphone"  value="<?php echo $cellphone;?>" >
  <span class="error"><?php echo $cellphoneErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<div class="div1">
	<?php
	echo "<h2>Your Input:</h2>";
	echo "<b>Name: </b>",$name;
	echo "<br><br>";
	echo "<b>Email: </b>",$email;
	echo "<br><br>";
	echo "<b>Home Address: </b>",$homeaddress;
	echo "<br><br>";
	echo "<b>Comment: </b><br>", nl2br($comment);
	echo "<br><br>";
	echo "<b>Gender: </b>",$gender;
	echo "<br><br>";
	echo "<b>Cellphone #: </b>",$cellphone;
	?>
</div>
</div>
</font>
<hr>
<h2><p><center><font color="red"><font size="5px"><strong>Thanks for viewing my page for that have some Korean girls</strong></font></center></p></h2>
<center><img src="Cutieyerin.gif" width="304px" height="228px"></center>
</body>
</html>
