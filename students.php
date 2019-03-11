<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
$con=mysqli_connect("localhost","root","","mydb");
$sql="select * from register;";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{
	echo "<div style=margin-left:1180px;width:200px;height:60px;float:left;>";
    echo "<h3>Welcome ".$_SESSION["ad"]." </h3></div>";
	echo "<div style=margin-left:10px;margin-top:20px;width:50px;height:20px;float:left;>";
	echo "<a href=middle.php><input type=button name=logout value=Logout></a></div>";
	echo "<div style=margin-top:40px;margin-left:500px;width:600px;height:270px;float:left>";
	echo "<table border=2>";
	echo "<caption><h2> Students Registered </h2></caption>";
	echo "<tr><th>Name</th><th>Username</th><th>
	Mail</th><th>Mobile</th></tr>";
	while($row=$ans->fetch_assoc())
	{
		echo "<tr><td>".$row['Name']."</td><td>".$row['Username']."</td><td>"
        .$row['Mail']."</td><td>".$row['Mobile']."</td></tr>";
	}
	echo "</table><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href=administrator.php><input type=button name=back value=Back></button></a></div>";

}
else
{
	echo "No records found";
}
?>