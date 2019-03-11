<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
?>
<html>
<body>
<div style="margin-left:1180px;width:200px;height:60px;float:left;">
<h3>Welcome <?php echo $_SESSION["ad"] ?> </h3>
</div>
<div style="margin-left:10px;margin-top:20px;width:50px;height:20px;float:left">
<a href="middle.php"><input type="button" name="logout" value="Logout"></a></div>
<div style="margin-top:100px;margin-left:500px;border:2px solid blue;width:400px;height:250px;float:left">
<center><h2>Select subject</h2>
<a href="cresult.php">C</a><br>
<a href="bresult.php">Basics</a><br>
<a href="msresult.php">MSOffice</a></center><br>
<center><a href="administrator.php"><input type="button" name="back" value="Back"></button></a></center>
</div>
</body>
</html>

