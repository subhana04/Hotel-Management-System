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
					<li><a href="#">HOME</a></li>
					<li><a href="#">CONTACT US</a></li>
					<li><a href="#">BOOK MY STAY</a></li>
					<li><a href="#">OUR HOTEL</a></li>
					<li><a href="#">HELP</a></li>
				</ul>
			</div>
		</div>
			<div><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<center><div style="background:rgba(255,255,255,.5); width:80%; height:200px;">
			<form action="" method="post">
			<center><font color="black"><b><table>
				<tr>
					<td width="50%" height="50px">Username</td>
					<td width="50%" height="50px"><input type="text" name="un" 					placeholder="Enter_Username" title="Enter Username"</td>
				</tr>
				<tr>
					<td width="50%" height="50px">Password</td>
					<td width="50%" height="50px"><input type="password" name="ps" 					placeholder="Enter_Password" title="Enter Password"</td>
				</tr>
				<td>
					<td colspan="2"><input type="submit" name="sub" value="Login"></td>
				</td>
			</table></b></font></center></form>
			<?php
				if(isset($_POST['sub']))
				{
					$un=$_POST['un'];
					$ps=$_POST['ps'];
					$q1="select * from admin";
					$run=mysqli_query($a,$q1);
					$row=mysqli_fetch_array($run);
					$u=$row['un'];
					$p=$row['ps'];
					if($un==$u && $ps==$p)
					{
						header("Location:ahome.php");
					}
					else
					{
						header("Location:index.php?wrong user");
					}
				}
			?>
				
			</div></center>
			</div>
	</div>
	</div>
</body>
</html>
