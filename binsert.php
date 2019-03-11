<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
if(isset($_POST['insert']))
{
	$num=$_POST['num'];
	$que=$_POST['desc'];
	$opt1=$_POST['opt1'];
	$opt2=$_POST['opt2'];
	$opt3=$_POST['opt3'];
	$opt4=$_POST['opt4'];
	$corr=$_POST['corr'];
	$con=new mysqli("localhost","root","","mydb");
	$sql="insert into basics(que_id,que_desc,ans1,ans2,ans3,ans4,true_ans)values('$num','$que','$opt1','$opt2','$opt3','$opt4','$corr');";
	if($con->query($sql)==true)
	{
		echo "Inserted successfully";
	}
	else
		echo"Error:".$sql."<br>".$con->error;
	$con->close();
}

?>
<html>
<body>
<form action="binsert.php" method="POST">
<div style="margin-top:30px;margin-left:400px;border:2px solid blue;width:700px;height:450px;float:left">
<center><table>
<caption><h2>Insert Questions in Basics</h2></caption>
<tr><td><h4>Que.No:</h4></td>
<td><input type="text" name="num" size="80" required></td>
</tr>
<tr><td><h4>Que.Desc:</h4></td>
<td><input type="text" name="desc" size="80" required></td>
</tr>
<tr><td><h4>Option1:</h4></td>
<td><input type="text" name="opt1" size="80" required></td>
</tr>
<tr><td><h4>Option2:</h4></td>
<td><input type="text" name="opt2" size="80" required></td>
</tr>
<tr><td><h4>Option3:</h4></td>
<td><input type="text" name="opt3" size="80" required></td>
</tr>
<tr><td><h4>Option4:</h4></td>
<td><input type="text" name="opt4" size="80" required></td>
</tr>
<tr><td><h4>Correct:</h4></td>
<td><input type="text" name="corr" size="80" required></td>
</tr>
<tr><td></td><td><center><input type="submit" name="insert" value="Submit"></center></td></tr>
<tr><td></td><td><center><a href="administrator.php"><input type="button" name="back" value="Back"></button></a></center></td>
</table>
</div>
<div style="margin-left:60px;width:180px;height:60px;float:left;">
<h3>Welcome <?php echo $_SESSION["ad"] ?> </h3>
</div>
<div style="margin-left:10px;margin-top:20px;width:50px;height:20px;float:left">
<a href="middle.php"><input type="button" name="logout" value="Logout"></a></div>
</form>
</body>
</html>



