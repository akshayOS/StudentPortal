 
<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					session_start();
					$regno=$_SESSION['regno'] ;
					$password=$_SESSION['password'] ;
					$sql="SELECT * FROM users WHERE regno='$regno' AND password='$password'";
					// $sql="SELECT * from users where id=1";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							// echo"<tr><td>".$row["id"],"</td><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							$var1=$row["name"];
							$var2=$row["dob"];
							$var3=$row["gender"];
							$var4=$row["regno"];
							$var5=$row["rollno"];
							$var6=$row["degree"];
							$var7=$row["branch"];
							$var8=$row["email"];
							$var9=$row["contactno"];

							
						}
					}
							?>

<!DOCTYPE html>
<html>
<head>
	<title>Student information system</title>
	<link type="text/css" href="style.css" rel="stylesheet">
</head>
<body style="background-color: #d0cdcd59;">
	<div class="main">
		<div class="header">
		<h1>Student information system</h1>
		</div>
		<div class="topbut">
			<a href="login.html"><button class="logbut" onclick="<?php session_destroy(); ?>">Logout</button></a>
		</div>
		<div class="insidebar">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Edit Details</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</div>
		<table class="table2">
			<tr><td>Name  </td><td>:</td><td class="td2"><?php echo $var1;?></td></tr>
			<tr><td>Date of Birth  </td><td>:</td><td class="td2"><?php echo $var2;?></td></tr>
			<tr><td>Gender </td><td>:</td><td class="td2"><?php echo $var3;?></td></tr>
			<tr><td>Registration Number  </td><td>:</td><td class="td2"><?php echo $var4;?></td></tr>
			<tr><td>Roll No  </td><td>:</td><td class="td2"><?php echo $var5;?></td></tr>
			<tr><td>Degree  </td><td>:</td><td class="td2"><?php echo $var6;?></td></tr>
			<tr><td>Branch  </td><td>:</td><td class="td2"><?php echo $var7;?></td></tr>
			<tr><td>Email-Id  </td><td>:</td><td class="td2"><?php echo $var8;?></td></tr>
			<tr><td>Contact No  </td><td>:</td><td class="td2"><?php echo $var9;?></td></tr>
			
		</table>
		<!-- <img id="back-img" src="backg.jpeg" /> -->
		
	</div>
</body>
</htm