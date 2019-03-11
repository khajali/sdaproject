<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
?>
<html>
<body>
<center><h1>Thankyou for submitting Online Exam</h1>
<a href="middle.php"><button name="logout">Logout</button></a></center>
</body>
</html>