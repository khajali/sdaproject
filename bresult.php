<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from bresult;";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{
	echo "<div style=margin-left:1180px;width:200px;height:80px;float:left;>";
    echo "<h3>Welcome ".$_SESSION["ad"]." </h3></div>";
	echo "<div style=margin-left:10px;margin-top:20px;width:50px;height:20px;float:left;>";
    echo "<a href=middle.php><input type=button name=logout value=Logout></a></div>";
    echo "<div style=margin-top:40px;margin-left:600px;width:200px;height:270px;float:left;>";
	echo "<table border=2>";
	echo "<caption><h2> Basics_RESULT </h2></caption>";
	echo "<tr><th>UserID</th><th>Username</th><th>Maxmarks</th><th>Marks</th></tr>";
	while($row=$ans->fetch_assoc())
	{
		echo "<tr><td>".$row['login']."</td><td>".$row['user']."</td><td>".$row['maxmarks']."</td><td>"
        .$row['marks']."</td></tr>";
	}
	echo "</table><br>";
	echo "<center><a href=scores.php><input type=button name=back value=Back></button></a><center></div>";

}
else
{
	echo "No records found";
}
?>