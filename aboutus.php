<?php
session_start();
if (!isset($_SESSION["un"])){
    header('Location:register.php');
  }
?>
<html>
<body>
<div style="margin-top:10px;width:1000px;height:20px;float:left;">
<table>
<tr><td>
<img src="svec.png" width="120" height="120"></td>
<td><h1><center>Sree Vidyanikethan Engineering College</center></h1></td>
</tr>
</table>
</div>
<div style="margin-left:1100px;width:180px;height:60px;float:left">
<h3>Welcome <?php echo $_SESSION["user"] ?></h3>
</div>
<div style="margin-top:100px;margin-left:10px;border:2px solid blue;width:1500px;height:500px;float:left">
<center><h2>About SVEC</h2></center>
<p>Sree Vidyanikethan Engineering College was established in 1996 with an initial intake of 180 students to serve the cause of technical education in the backward region 
       of Rayalaseema. The intake has increased exponentially to 2112 in 2017-18. The College now offers 8 B.Tech programs.Today, Sree Vidyanikethan Engineering College 
	   is one of the largest, most admired and sought after Institutions in Andhra Pradesh. The College is located in a sprawling campus of about 30 acres, amidst sylvan 
	   surroundings with aesthetically built infrastructure. The College is approved by AICTE and affiliated to JNTU Ananthapuramu. The College has been accorded Autonomous 
	   Status by the UGC, New Delhi in 2010-11 which was extended for six years (from 2016-17 to 2021-22).</p>
<p>The College is known for its quality initiatives which is amply reflected in accreditations by National Board of Accreditation (NBA) for UG & PG programmes, 
  National Assessment and Accreditation Council (NAAC) with ‘A’ Grade and many multinational organizations such as TCS, WIPRO & IBM. The College is successfully 
  implementing TEQIP-II under Sub-component 1.1: Strengthening Institutions to improve Learning Outcomes and Employability of Graduates, funded by the Ministry of HRD,
  Govt. of India. The College has been accorded “UGC-Colleges with Potential for Excellence” status under CPE Scheme by UGC, New Delhi. It also has been accorded ‘PLATINUM’ 
  category by CII-AICTE Survey; and was conferred with ‘A’ Grade by Department of Higher Education, Andhra Pradesh. The college participated in National Institution Ranking
  Frame Work (NIRF), 2017 and stood within the Rank Bank: 151-200. SIEMENS established 6 State-of-the art t-SDI laboratories. The Vision and Mission of Sree Vidyanikethan 
  Engineering College enable the Management to develop the students holistically by providing them all inputs to enhance their employability.</p>
<p>Through multidimensional excellence, we value intellectual curiosity, pursuit of knowledge building and dissemination, academic freedom and integrity to
enable the students to realize their potential. We promote technical mastery of Progressive Technologies, understanding their ramifications in the future 
society and nurture the next generation of skilled professionals to compete in an increasingly complex world, which requires practical and critical understanding 
 of all aspects.</p>
<center><a href="first1.php"><input type="button" name="back" value="Back"></button></center>
</div>
</body>
</html>