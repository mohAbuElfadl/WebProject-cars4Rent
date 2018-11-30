

<?php
include ('database.php');

if(isset($_POST['submit']))
{
 $s=$_POST['name'];
 $rows=$db->getRows("SELECT * FROM car WHERE name LIKE '%$s%'",array());

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
	  <title>Contact</title>
	  <meta charset="utf-8" >
 <link rel="stylesheet" href="contact.css" />
	</head>

	<body>
		<div id="header">
		
		<div id="logo"><img src="index.jpg" /></div>
		<h1><strong> cars4Rent</strong></h1>
			<div id="nav">
			  <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="about.php">about</a></li>
			  <li><a href="#">contact</a></li>
			  </ul>
			  </div>
		  </div>
     
	 
	<div id="home">
	
	<table>
	<tr><td><img src="gmail.PNG"/></td><td><a href="#">E-mail : m.yousef11597@gmail.com</a></td></tr>
	<tr><td><img src="facebook.PNG"/></td><td><a href="#">Facebook : Mohamed Abu Elfadl</a></td></tr>
	<tr><td><img src="twitter.PNG"/></td><td><a href="#">Twitter : Mohamed Abu Elfadl</a></li></td></tr>
    </table>
	</div>

        <div id="footer">@M_AbuElfadl 2018
            <br>FCI Assiut university copyright2018

        </div>
	
	<script src="main.js"></script>	
	</body>

</html>


















 
