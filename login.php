<?php

	if(isset($_POST["uname"])){
		$un=$_POST["uname"];
		$password=$_POST["password"];
		$type=$_POST["type"];
		
	$hostname= "localhost";
	$username="pdnc";
	$password="123";
	
	$con = mysqli_connect($hostname,$username,$password);
	
	$dbconect=mysqli_select_db($con,"tbluser");
	
	$sql="SELECT * FROM user WHERE uname='$_POST[uname]' and password='$password' and type='$type' ";
	echo $sql;

	$result= mysqli_query($con,$sql);
	
	if($row=mysqli_fetch_array($result)){
		session_start();
		$_SESSION["uname"]=$un;
		$_SESSION["type"]=$type;
		header("Location:welcome.php");	
	}	
	else{
		echo "Invalid UserName Or Password!!";
	}
	mysqli_close($con);
	}

?>
<html>
<head>
<title>LogIn</title>
</head>

<body>
<h1>LogIn</h1>
	
    <form name="form" action="#" method="post">
    
    	User Name:<input type="text" name="uname" /><br/>
        Password:<input type="password" name="password" /><br/>
        Type: <select name="type">
        		<option>admin</option>
                <option>user</option>
        	  </select><br/>
              
         <input type="submit" name="submit" value="LogIn" />
    
    </form>

</body>
</html>
