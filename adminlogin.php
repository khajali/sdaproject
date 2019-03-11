<html>
<body>
<body bgcolor="LightGray">
<form action="adminlogin.php" method="POST">
<div style="margin-top:100px;margin-left:500px;border:2px solid blue;width:400px;height:300px;float:left">
<center><h4>Username:</h4>
<input type="text" name="un" size="30" required>
<h4>Password:</h4>
<input type="password" name="pwd" size="30" required><br><br>
<input type="submit" name="login" value="Login"></center>
</div>
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
  $sql="select * from admin where Username='$un' and Password='$pwd'";
  $ans=$con->query($sql);
  if($ans->num_rows==1)
  { 
      $row=$ans->fetch_assoc();
	  $_SESSION["ad"]=$row['Username'];
      header('Location: administrator.php');
  }
  else
  {
    echo "Invalid User";
  }
  $con->close();
}
?>
   