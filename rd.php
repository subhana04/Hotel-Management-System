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
	     <div id="bg" style="background-image:url('/hotel1/admin/img/b3.jpg'); background-size:100% 		width:100%;height:800px;">
             <div id="header">
			<div id="logo">
   				<h1>F2S WELCOMES YOU</h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="ahome.php">HOME</a></li>
					<li><a href="room.php">ROOM UPDATE</a></li>
					<li><a href="booking.php">BOOKING</a></li>
					<li><a href="rd.php">ROOM DETAILS</a></li>
					<li><a href="contact.php">HELP</a></li>
				</ul>
			</div>
		</div>
			<div><br><br><br><br><br><br><br><br><br>
				<center><div style="background:rgba(255,255,255,.5); width:30%; height:500px;">
					<h1 align:center style="color:black">WELCOME ADMIN</h1>
					<table>
						<tr>
							<th width="25%" height="50px"><u>rno</u></th>
							<th width="25%" height="50px"><u>type</u></th>
							<th width="25%" height="50px"><u>price</u></th>
							<th width="25%" height="50px"><u>status</u></th>
							
						</tr>
						<?php
							$q1="select * from room";
							$run=mysqli_query($a,$q1);
							while($row=mysqli_fetch_array($run))
							{
								$rno=$row['rno'];
								$type=$row['type'];
								$price=$row['price'];
								$status=$row['status'];
							
						?>
						<tr>
						     <td width="25%" height="50px"><center><?php echo $rno;?></center></td>
						    <td width="25%" height="50px"><center><?php echo $type;?> </center></td>
						      <td width="25%" height="50px"><center><?php echo $price;?></center></td>
							<td width="25%" height="50px"><center><?php echo $status;?>  							</center></td>
							
						</tr>	
						<?php
							}
						?>			
					</table>
			</div></center>
			</div>
	</div>
	</div>
</body>
</html>
