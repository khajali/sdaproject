<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
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
<div style="margin-left:1150px;width:200px;height:30px;float:left">
<h3>Welcome <?php echo $_SESSION["user"] ?></h3>
</div>
<br><br><br>
<?php
$con=new mysqli("localhost","root","","mydb");
if(!isset($_SESSION["qn"]))
{
		$_SESSION["qn"]=0;
		$_SESSION["trueans"]=0;
}
else if($_POST['submit']=='Next Question' )
{
	$ans=$_POST['ans'];
	if($ans==$_SESSION["true"])
	{
		$_SESSION["trueans"]=$_SESSION["trueans"]+1;
	}
	$_SESSION["qn"]=$_SESSION["qn"]+1;
	
}
else if($_POST['submit']=='Finish' )
{
	$ans=$_POST['ans'];
	if($ans==$_SESSION["true"])
	{
		$_SESSION["trueans"]=$_SESSION["trueans"]+1;
	}
	echo "<h1 class=head1> Result</h1>";
	$_SESSION["qn"]=$_SESSION["qn"]+1;
	echo "<table align=center><tr class=tot><td>Total Question<td>". $_SESSION["qn"];
	echo "<tr class=tans><td>True Answer<td>".$_SESSION["trueans"];
	$w=$_SESSION["qn"]-$_SESSION["trueans"];
	echo "<tr class=fans><td>Wrong Answer<td> ". $w;
	echo "</table>";
	$user=$_SESSION["user"];
	$login=$_SESSION["un"];
	$true=$_SESSION["trueans"];
	$qn=$_SESSION["qn"];
	$act=("insert into cresult(login,user,maxmarks,marks) values('$login','$user','$qn','$true')");
	if($con->query($act)==true)
	{
		echo "<h1 align=center>Congratulations</h1>";
	}
	else 
		echo "No";
	echo "<h1 align=center><a href=creview.php> Review Question</a> </h1>";
    echo "<center><a href=middle.php><input type=button name=logout value=Logout></a></center></div>";
	unset($_SESSION["qn"]);
	unset($_SESSION["trueans"]);
	exit;
}

$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from ctable";
$rs=mysqli_query($con,$sql);
mysqli_data_seek($rs,$_SESSION["qn"]);
$row=mysqli_fetch_assoc($rs);
echo "<br><br>";
echo "<form name=myfm method=post action=cexam.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table align=center border=0>";
echo "<tr><td><span class=style2><h3>Que ".$row['que_id'].":".$row['que_desc']."</h3></style>";
echo "<tr><td class=style4><input type=radio name=ans value=1>".$row['ans1']."</td></tr>";
echo "<tr><td class=style4><input type=radio name=ans value=2>".$row['ans2']."</td></tr>";
echo "<tr><td class=style4><input type=radio name=ans value=3>".$row['ans3']."</td></tr>";
echo "<tr><td class=style4><input type=radio name=ans value=4>".$row['ans4']."</td></tr>";
$_SESSION["true"]=$row['true_ans'];
if($_SESSION["qn"]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Finish'></form>";
echo "</table></table>";
?>

</body>
</html>