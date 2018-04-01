<!DOCTYPE html>
<html>
<head>
	<title>Student information system</title>
	<link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
	<div class="main">
		<div class="header">
		<h1>Admin Home page</h1>
		</div>
		<div class="topbut">
			<a href="adminlogin.html"><button class="logbut">Logout</button></a>
		</div>
		<!-- <img id="back-img" src="backg.jpeg" /> -->
		<div >

			<script type="text/javascript">
				function next1() {
						document.getElementById('active').style.display="none";
                         document.getElementById('reject').style.display="none";
						 document.getElementById('feedback').style.display="none";
                         document.getElementById('wait').style.display="block";
									// body...
				}
				function next2(){

                         document.getElementById('reject').style.display="none";
						 document.getElementById('feedback').style.display="none";
                        document.getElementById('wait').style.display="none";
                         document.getElementById('active').style.display="block";
				}

				function next3(){
					document.getElementById('active').style.display="none";
                         document.getElementById('reject').style.display="none";
					document.getElementById('wait').style.display="none";
                         document.getElementById('feedback').style.display="block";
				}

				function next4(){
					 document.getElementById('feedback').style.display="none";
                        document.getElementById('wait').style.display="none";
                         document.getElementById('active').style.display="none";
                         document.getElementById('reject').style.display="block";
				}
			</script>
		<table class="table3" id="wait" style="display: block;">
			<tr><td colspan="7" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Candidates to be approved</td></tr>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>

				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from users LIMIT 8";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{$v=$row["id"];
							echo"<tr><td>".$row["id"],"</td><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							?>
							<form method="post" action="server.php" >
						<td> <input type="submit" value="Accept | <?php echo $v ?>" class="accept" name="Accept">  </td>
						<td><input type="submit" value="Reject | <?php echo $v ?>" class="reject" name="Reject">
						</td> 
					</form>
					</tr>

					<?php

				
				
						}
				
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>


<table id="active" style="display: none;position: absolute;left: 350px;">
	<tr><td colspan="5" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Approved Candidates</td></tr>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>

				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from activeusers LIMIT 5";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							echo"<tr><td>".$row["id"],"</td><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							?>
							
					</tr>

					<?php

				
				
						}
					//echo "</table>";
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>



<table id="reject" style="display: none;position: absolute;left: 400px;">
	<tr><td colspan="5" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Rejected Candidates</td></tr>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>

				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from rejectedusers LIMIT 5";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							echo"<tr><td>".$row["id"],"</td><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							?>
							
					</tr>

					<?php

				
				
						}
					//echo "</table>";
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>




			<table  style="display: none;position: absolute;left: 300px;" id="feedback">

				<tr><td colspan="4" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Feedback</td></tr>
				<tr >
					<th>id</th>
					<th>name</th>
					<th>email</th>
					<th>Feedback</th>

				</tr>
			 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from feedback LIMIT 5";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["feedback"]."</td>";
							?>
					</tr>

					<?php

				
				
						}
					//echo "</table>";
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>

			<div class="bar">
			<ul>
				
				<li><a href="#" onclick="next1()"> Home</a></li>
				<li><a href="#" onclick="next2()">Active Users </a></li>
				<li><a href="#" onclick="next4()">Rejected Users</a></li>
				<li><a href="#" onclick="next3()">Feedback</a></li>
			</ul>
		</div>
		</div>
	</div>
</body>
</htm