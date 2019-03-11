<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
?>
<html>
<body>
<div style=";margin-left:10px;width:1000px;height:40px;float:left;">
<table>
<tr><td>
<img src="svec.png" width="120" height="120"></td>
<td><h1><center>Sree Vidyanikethan Engineering College</center></h1></td>
</tr>
</table>
</div>
<div style="margin-left:1100px;width:180px;height:60px;float:left">
<h3>Welcome <?php echo $_SESSION["ad"] ?></h3>
</div>
<div style="margin-top:40px;margin-left:400px;border:2px solid blue;width:600px;height:270px;float:left">
<center><h2>Contact through:</h2>
<h1>Mail:svecexam@gmail.com</h1>
<h1>MobileNo:987654321</h1></center>
<center><a href="administrator.php"><input type="button" name="back" value="Back"></button></center>
</div>
</body>
</html>