
<!DOCTYPE HTML>  
<html>
<head>
<style>
.box1 
{
    background-color: gray;
    width: 75%;
    padding: 25px;
	border: 1px solid black;
    margin: 25px;
	box-shadow: 5px 5px 5px #000000;
	text-shadow: -1px 6px 3px rgba(163, 150, 150, 0.82);
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
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $nickname = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["nickname"])) 
  {
    $nicknameErr = "Nickname is required";
  } 
  else 
  {
    $nickname = test_input($_POST["nickname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) 
	{
      $nicknameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class ="box1">
<h2>If you are a cute-looking girl I suggest to submit a Form if not, you can still submit!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label for="name">Name:</label> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <label for="name">Nickname:</label> <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
  <label for="email">Email:</label> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label for="website">Website:</label> <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <label for="comment">Comment:</label> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <label for="gender">Gender:</label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</div>
</body>
</html>
