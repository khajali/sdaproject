<html>
<body bgcolor="LightGray">
<form action="middle.php" method="POST">
<table border="0" width="100%" height="70%" cellpadding="20">
<tr>
<td>
<div style="margin-left:40px;border:2px;width:400px;height:380px;float:left;">
<img src="exam.png" width="450" height="400">
</div>
</td>
<td>
<div style="margin-left:70px;border:2px dashed black;width:400px;height:380px;float:left;">
<center><h3>Already a member?Login</h3>
<h4>Username:</h4>
<input type="text" name="un" size="30" required>
<h4>Password:</h4>
<input type="password" name="pwd" size="30" required><br><br>
<input type="submit" name="login" value="Login"></a></center>
</td>
<td>
<div style="margin-left:40px;border:2px solid black;border-radiuswidth:5px;width:400px;height:380px;float:left;">
<center><h3>New User?Register now</h3>
<h4>To start the test,click here to register.</h4>
<a href="register.php">Register</a><br><br>
<center><h3>Administrator?</h3>
<a href="adminlogin.php"  width="50">Administrator</a></center>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['login']))
{
  $un=$_POST['un'];
  $pwd=$_POST['pwd'];
  $con=new mysqli("localhost","root","","mydb");
  $sql="select * from register where Username='$un' and Password='$pwd'";
  $ans=$con->query($sql);
  if($ans->num_rows==1)
  { 
      $row=$ans->fetch_assoc();
	  $_SESSION["user"]=$row['Name'];
	  $_SESSION["un"]=$row['Username'];
      header('Location: first1.php');
  }
  else
  {
    echo "Invalid User";
  }
  $con->close();
}
?>
   


