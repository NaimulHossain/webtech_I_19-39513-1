<!DOCTYPE html>
<html>
<head>
<style>

body {
  background-color:#00ff00;
 
}
#p5 {background-color:#ff00ff;
</style>
</head>
<title>Welcome</title>
</head>
<body>
<?php 


session_start();

if (isset($_SESSION['user_name'])){ require 'top1.php';}
else
{
	require 'top.php';
}

 ?>

<h1 style="text-align: center;
  margin: 15% 0;">WELCOME TO N.H WORLD AND THANKS FOR LOGIN</h1>  	
<?php require 'footer.php';?>
</body>
</html>