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
	  <title></title>
	  <meta charset="utf-8" >
 <link rel="stylesheet" href="search.css" />
	</head>

	<body>
		<div id="header">
		
		<div id="logo"><img src="index.jpg" /></div>
		<h1><strong> SMART CARS</strong></h1>
			<div id="nav">
			  <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="about.php">about</a></li>
			  <li><a href="contact.php">contact</a></li>
			  </ul>
			  </div>
		  </div>

        <div id="home">
            <form>
                <table border="1px">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>type</th>
                        <th>price_per_day</th>
                        <th>Color</th>
                    </tr>

                    <?php
                    foreach($rows as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['type']."</td>"."<td>".$row['price']."</td>"."<td>".$row['color']."</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </form>
            <div id="pic">
                <?php
                foreach($rows as $row)
                {
                    echo "<img src='c".$row['id'].".jpg' title='car1'\>";
                }
                ?>
            </div>
        </div>
        <div id="footer">@M_AbuElfadl 2018
            <br>FCI Assiut university copyright2018

        </div>
	       

	</body>

</html>
