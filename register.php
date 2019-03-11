<html>
<body bgcolor="LightGray">
<form action="register.php" method="POST">
<div style="margin-top:20px;margin-left:550px;border:2px dashed blue;width:400px;height:370px;float:left;">
<center><h3>Create An Account</h3>
<table>
<tr>
<td><h4>Name:</h4></td>
<td><input type="text" name="fn" size="30" required></td>
</tr>
<tr>
<td><h4>Username:</h4></td>
<td><input type="text" name="un" size="30" required></td>
</tr>
<tr>
<td><h4>Password:</h4></td>
<td><input type="password" name="pwd" size="30" required></td>
</tr>
<tr>
<td><h4>MailId:</h4></td>
<td><input type="email" name="mail" size="30" required></td>
</tr>
<tr>
<td><h4>Contact No:</h4></td>
<td><input type="number" name="mobile" size="30" required></td>
</tr>
</table>
<input type="submit" name="register" value="Register" required><br>
<a href="middle.php">Home</a></center>
</div>
</form>
</body>
</html>


<?php
if(isset($_POST['register']))
{
	$fn=$_POST['fn'];
	$un=$_POST['un'];
	$pwd=$_POST['pwd'];
	$mail=$_POST['mail'];
	$mobile=$_POST['mobile'];
	$con=new mysqli("localhost","root","","mydb");
	$sql="insert into register(Name,Username,Password,Mail,Mobile)values('$fn','$un','$pwd','$mail','$mobile');";
	if($con->query($sql)==true)
	{
		echo "Registered successfully";
	}
	else
		echo"Error:".$sql."<br>".$con->error;
	$con->close();
}
?>