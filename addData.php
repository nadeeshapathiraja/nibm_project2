<?php

	$hostname= "localhost";
	$username="pdnc";
	$password="123";
	
	$con = mysqli_connect($hostname,$username,$password);
	
	$dbconect=mysqli_select_db($con,"tbluser");
	
	$sql="SELECT * FROM user";

	$result= mysqli_query($con,$sql);
	echo "
	<table border=1>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Type</th>
		</tr>
	";
	
		
		while($row=mysqli_fetch_array($result)){
		echo "
		<tr>
			
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
			
		</tr>
		";
	}
		
	echo "</table>";
?>
<?php

	$hostname= "localhost";
	$username="pdnc";
	$password="123";
	
	$con = mysqli_connect($hostname,$username,$password);
	
	$dbconect=mysqli_select_db($con,"tbluser");

	if(isset($uid)){
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$type=$_POST['type'];
	
	}
	
	$query="INSERT INTO user(uid,uname,password,type) VALUES('$uid','$uname','$password','$type')";
	
	$result=mysqli_query($con,$query);
	
	mysqli_close($con);

?>

<html>
<head>
<title>adduser</title>
</head>

<body>
<h1>Add User</h1>
	
    <form name="form" action="#" method="post">
    
    	User Id:<input type="text" name="uid" /><br/>
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
