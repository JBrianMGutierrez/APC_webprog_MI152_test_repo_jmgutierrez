<!DOCTYPE HTML>  
<html>
<body background="Background.jpg">
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
  <li><a href="MyPage.php">Home</a></li>
  <li><a href="MyTrivia.php">Trivia</a></li>
  <li style="float:center"><a class="active" href="MyForm.php">Form</a></li>
  <li><a href="MyReadEditDelete.php">Search</a></li>
  
</ul>
</ul> 
<h2><center><font color = red>If you are a cute-looking girl I suggest to submit a Form if not, you can still submit!</center></font></h2>
<div class ="box1">
<center>


</center>
</div>
</font>
<hr>
<h2><p><center><font color="red"><font size="5px"><strong>Thanks for viewing my page for that have some Japanese girl</strong></font></center></p></h2>
<center><img src="Pictures\Rena Yamazaki.gif" width="304px" height="228px"></center>
</body>
</html>