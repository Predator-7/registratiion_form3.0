<?php
session_start();
?>

<?php
echo "Welcome! ";
echo $_SESSION["username"];


?>

<html>

<head>

<link rel="stylesheet" href="preview.css">
  

</head>

<body>
<div class = "mydiv">
<h1 ><a href="./download.php"> Download your form</a> </h1>
<h1> <a href="./main.html">  Go for registration</a> </h1>

</div>


</body>


</html>
