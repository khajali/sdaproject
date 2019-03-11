<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
if(isset($_POST['exam']))
{
$s=$_POST['s'];
if($s=='C')
	 header('Location: cexam.php');
else if($s=='Basics')
	 header('Location: bxam.php');
else if($s=='MSOffice')
	 header('Location: msexam.php');
}
if(isset($_POST['b1']))
{
		 header('Location: aboutus.php');
}
if(isset($_POST['b2']))
{
		 header('Location: contactus.php');
}
if(isset($_POST['b3']))
{
		 header('Location: middle.php');
}

?>


