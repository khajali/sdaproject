<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }

?>
<html>
<body>
<form action="select.php" method="POST">
<div style="width:160px;height:410px;float:left;">
<br><center><img src="cap.jpg" width="120px" height="120px"></center><br>
<a><button name="b1" style="width:160px" value="click"><h2>AboutUs</h2></button></a><br>
<a><button name="b2" style="width:160px" value="click"><h2>Contact</h2></button></a><br>
<button name="exam" style="width:160px" value="click"><h2>Start the exam</h2></button>
<a><button name="b3" style="width:160px" value="click"><h2>Logout</h2></button></a>
</div>
<div style="margin-left:100px;width:500px;height:50px;float:left;">
<h2><b>Online Examination System</b></h2>
</div>
<div style="margin-left:300px;width:200px;height:30px;float:left">
<h3>Welcome <?php echo $_SESSION["user"] ?></h3>
</div>
<div style="margin-left:10px;border:2px solid blue;width:1300px;height:380px;float:left;">
<center><table><tr>
<td><h2>Select Subject:</h2></td>
<td>
<select name="s">
<option value="C">C</option>
<option value="Basics">Basics</option>
<option value="MSOffice">MSOffice</option>
</select>
</td></tr>
</table>
<center><table>
<tr><td><h3>NOTE:</h3></td></tr> 
<tr><td><h3>1.Each exam contains 20 questions</h3></td></tr>
<tr><td><h3>2.Use Next button to display the next question</h3></td></tr>
<tr><td><h3>3.Result is dislpayed after all the questions are answered</h3></td></tr>
<tr><td><h3>4.Try to complete the exam in a limited time</h3></td></tr>
</table></center>
<center><h1>All The Best</h1></center>
</div>
</form>
</body>
</html>
