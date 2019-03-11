<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php#popup');
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<div style="margin-left:1130px;width:200px;height:60px;float:left">
<h3>Welcome <?php echo $_SESSION["user"] ?></h3>
</div>
<div style="margin-left:20px;margin-top:20px;width:50px;height:20px;float:left">
<a href="middle.php"><input type="button" name="logout" value="Logout"></a></div><br><br><br>
<?php
echo "<h1 class=head1> Review Test Question</h1>";
if(!isset($_SESSION["qn"]))
{
		$_SESSION["qn"]=0;
}
else if($_POST['submit']=='Next Question' )
{
	$_SESSION["qn"]=$_SESSION["qn"]+1;
	
}
else if($_POST['submit']=='Finish' )
{
	header('Location: last.php');
	unset($_SESSION["qn"]);
	exit;
}


$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from msoffice";
$rs=mysqli_query($con,$sql);
mysqli_data_seek($rs,$_SESSION["qn"]);
$row=mysqli_fetch_assoc($rs);
echo "<form name=myfm method=post action=msreview.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table align=center border=0>";
echo "<tr><td><span class=style2>Que ".$row['que_id'].":".$row['que_desc']."</style>";
echo "<tr><td class=".($row['true_ans']==1?'tans':'style4').">".$row['ans1'];
echo "<tr><td class=".($row['true_ans']==2?'tans':'style4').">".$row['ans2'];
echo "<tr><td class=".($row['true_ans']==3?'tans':'style4').">".$row['ans3'];
echo "<tr><td class=".($row['true_ans']==4?'tans':'style4').">".$row['ans4'];
if($_SESSION["qn"]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Finish'></form>";

echo "</table></table>";
?>
</body>
</html>