<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> HOME (HOTEL MANAGEMENT)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="full">
	     <div id="bg" style="background-image:url('/hotel1/img/bed.jpg'); width:100%;height:800px;">
             <div id="header">
			<div id="logo">
   				<h1>F2S WELCOMES YOU</h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="#">BOOK MY STAY</a></li>
					<li><a href="about.php">OUR HOTEL</a></li>
					<li><a href="contact.php">HELP</a></li>
				</ul>
			</div>
		</div>
		<form action="room.php" method="post">
			<font color="white"><b><table>
				<tr>
					<td>rno</td>
					<td><input type="text" name="rno" placeholder="Enter room no" title="Enter 							room no"></td>
				</tr><tr></tr>


				<tr>
					<td>type</td>
					<td><input type="text" name="type" placeholder="Enter room type " title="Enter room 					type"></td>
				</tr><tr></tr>

				<tr>
					<td>price</td>
					<td><input type="text" name="price" placeholder="Enter room price " title="Enter room 						price"></td>
				</tr><tr></tr>
				
				<td>
					<td><input style="width:120px; height:30px; border-radius:20px; opacity:0.5;" 							type="submit" name="submit" value="SUBMIT"></td>
				</td>


				</table></b></font>
		<?php
			if(isset($_POST["submit"]))
			{
				$rno=$_POST['rno'];	
				$type=$_POST['type'];	
				$price=$_POST['price'];	
				if(mysqli_query($a,"insert into room(rno,type,price) value('$rno','$type','$price')"))
				{
					echo "data inserted";
				}
			
				else
				{
					echo "data not inserted";
				}
			


			}
			
		?>
		</form>
		
		
		</div>
	</div>		
		
</body>
</html>
