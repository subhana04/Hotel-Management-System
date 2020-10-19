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
				<center><div style="background:rgba(255,255,255,.5); width:80%; height:500px;">
					<h1 align:center style="color:black">WELCOME ADMIN</h1>
					<table>
						<tr>
							<th width="10%" height="10px"><u>Idno</u></th>
							<th width="10%" height="10px"><u>Name</u></th>
							<th width="10%" height="10px"><u>Addre</u></th>
							<th width="10%" height="10px"><u>City</u></th>
							<th width="10%" height="10px"><u>Dis</u></th>
							<th width="10%" height="10px"><u>State</u></th>
							<th width="10%" height="10px"><u>Email</u></th>
							<th width="10%" height="10px"><u>Cidate</u></th>
							<th width="10%" height="10px"><u>Codate</u></th>
							<th width="10%" height="10px"><u>Members</u></th>
						</tr>
						<?php
							$q1="select * from form";
							$run=mysqli_query($a,$q1);
							while($row=mysqli_fetch_array($run))
							{
								$idno=$row['idno'];
								$name=$row['name'];
								$addre=$row['addre'];
								$city=$row['city'];
								$dis=$row['dis'];
								$state=$row['state'];
								$email=$row['email'];
								$cindate=$row['cindate'];
								$coutdate=$row['coutdate'];
								$members=$row['members'];
							
						?>
						<tr>
							<td width="10%" height="10px"><center><?php echo $idno;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $name;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $addre;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $city;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $dis;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $state;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $email;?> 							</center></td>
							<td width="10%" height="10px"><center><?php echo $cindate;?> 							</center></td>
							<td width="10%" height="10px"><?php echo $coutdate; ?> </center></td>
							<td width="10%" height="10px"><center><?php echo $members;?> 							</center></td>
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
