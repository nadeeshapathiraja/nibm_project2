<?php 
session_start();

echo "Hello , ".$_SESSION["un"]."<br/><br/>";

if($_SESSION["type"]=="admin"){
	echo "<a href=viewData.php>View Data</a><br/>";
	echo "<a href=addData.php>Add Data</a><br/>"	;
	echo "<a href=logout.php>Logout</a><br/>";
}
else if($_SESSION["type"]=="user"){
	echo "<a href=viewData.php>View Data</a><br/>";
	echo "<a href=logout.php>Logout</a><br/>";	
}
	

?>

<html >
<head>

<title>welcome Admin page</title>
</head>

<body>
<h1>Welcome</h1>

</body>
</html>
