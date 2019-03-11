<?php
session_start();
if (!isset($_SESSION["ad"])){
    header('Location:register.php');
  }
?>
<html>
<body>
<div style="width:160px;height:450px;float:left;">
<br><center><img src="cap.jpg" width="60px" height="60px"></center><br>
<a href="students.php"><button name="b1" style="width:160px" value="click"><h2>Students Registered</h2></button></a><br>
<a href="scores.php"><button name="b1" style="width:160px" value="click"><h2>Results</h2></button></a><br>
<a href="aboutus1.php"><button name="b1" style="width:160px" value="click"><h2>AboutUs</h2></button></a><br>
<a href="contactus1.php"><button name="b1" style="width:160px" value="click"><h2>Contact</h2></button></a><br>
<a href="middle.php"><button name="b1" style="width:160px" value="click"><h2>Logout</h2></button></a>
</div>
<div style="margin-left:100px;width:500px;height:60px;float:left;">
<h1><center>Administrator</center></h1>
</div>
<div style="margin-left:300px;width:180px;height:60px;float:left">
<h3>Welcome <?php echo $_SESSION["ad"] ?></h3>
</div>
<div style="margin-left:5px;border:2px solid blue;width:1330px;height:390px;float:left;">
<br><br><br><br><br><br><br>
<marquee><h2>SVEC Online Examination System</h2></marquee>
<br><br><br>
<center><a href="insert.php"><button name="insert">Questions</button></a></center>
</div>
</body>
</html>
