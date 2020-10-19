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
		<form action="r1.php" method="post">
			<font color="white"><b><table>
				
						<tr>
					<td> status</td>
					<td><input type="text" name="status" placeholder="Status" value="available" disabled="disabled" title="status"></td>
				</tr><tr></tr>

				<tr>
					<td>idno</td>
					<td><input type="text" name="idno" placeholder="Enter ID" title="ID"></td>
				</tr><tr></tr>


				<tr>
					<td>name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="name"></td>
				</tr><tr></tr>


				<tr>
					<td>addre</td>
					<td><input type="text" name="addre" placeholder="Enter Address" 								title="address"></td>
				</tr><tr></tr>

				
				<tr>
					<td>city</td>
					<td>
						<select name="city">
							<option>--SELECT--</option>
							<option>MUMBAI</option>
							<option>DELHI</option>
							<option>BANGALORE</option>
							
						</select>
					</td>
				</tr><tr></tr>


				<tr>
					<td>dis</td>
					<td>
						<select name="dis">
							<option>--SELECT--</option>
							<option>MUMBAI</option>
							<option>DELHI</option>
							<option>BANGALORE</option>
							
						</select>
					</td>
				</tr><tr></tr>


				<tr>
					<td>state</td>
					<td>
					<select name="state">
							<option>--SELECT--</option>
							<option>MAHARASHTRA</option>
							<option>DELHI</option>
							<option>BANGALORE</option>
							
				        </select>
					</td>
				</tr><tr></tr>


				<tr>
					<td>email</td>
					<td><input type="text" name="email" placeholder="Enter EMAIL" title="email" ></td>
				</tr><tr></tr>


				<tr>
					<td>cindate</td>
					<td><input type="date" name="cindate"  title="checkin"></td>
				</tr><tr></tr>


				<tr>
					<td>coutdate</td>
					<td><input type="date" name="coutdate"  title="checkout"></td>
				</tr><tr></tr>


				<tr>
					<td>members</td>
					<td><input type="text" name="members" placeholder="Enter Members" 								title="members"></td>
				</tr><tr></tr><tr></tr>
				<td>
					<td><input style="width:120px; height:30px; border-radius:20px; opacity:0.5;" 							type="submit" name="submit" value="SUBMIT"></td>
				</td>

				
	
				
			</table></b></font>
		<?php
			if(isset($_POST["submit"]))
			{
				$idno=$_POST['idno'];	
				$name=$_POST['name'];	
				$addre=$_POST['addre'];
				$city=$_POST['city'];	
				$dis=$_POST['dis'];	
				$state=$_POST['state'];	
				$email=$_POST['email'];	
				$cindate=$_POST['cindate'];	
				$coutdate=$_POST['coutdate'];	
				$members=$_POST['members'];
				
				if(mysqli_query($a,"insert into form(idno,name,addre,city,dis,state,email,cindate,coutdate,members) value('$idno','$name','$addre','$city','$dis','$state','$email','$cindate','$coutdate','$members')"))
				{
					echo "Data Inserted";
					
				}
			
				else
				{	
					echo "Data Not Insert";	
				}
			}
			
		?>
		</form>
		</div>
	</div>		
		
</body>
</html>
