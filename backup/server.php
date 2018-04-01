<?php 
$con=mysqli_connect('127.0.0.1','root','','student_information_system');
if (!$con) {
	echo "not connected to server";
}
session_start();

//registration
if(isset($_POST['Register']))
{
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$regno = $_POST['regno'];
$rollno = $_POST['rollno'];
$degree = $_POST['degree'];
$branch = $_POST['branch'];
$yr_of_passing = $_POST['yr_of_passing'];
$email = $_POST['email'];
$contactno=$_POST['contactno'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$security_ques = $_POST['security_ques'];
$answer = $_POST['answer'];

$confirmpassword=md5($confirmpassword);
$password=md5($password);

$sql="INSERT INTO users(`name`,`dob`,`gender`,`regno`,`rollno`,`degree`,`branch`,`yr_of_passing`,`email`,`contactno`,`password`,`confirmpassword`,`security_ques`,`answer`)VALUES('$name','$dob','$gender','$regno','$rollno','$degree','$branch','$yr_of_passing','$email','$contactno','$password','$confirmpassword','$security_ques','$answer')";

if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please refill the registration form....!');
window.location.href='register.html';
</script>";
}				  
else{
echo "<script>
alert('Successfully Registered. Please login');
window.location.href='login.html';
</script>";
}
}


//login
if(isset($_POST['LOGIN']))
{
$regno = mysqli_real_escape_string($con, $_POST['regno']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);
		$query = "SELECT * FROM activeusers WHERE regno='$regno' AND password='$password'";
		$results = mysqli_query($con, $query);

		if (mysqli_num_rows($results) == 1) {
			session_start();
		     $_SESSION['regno'] = $regno;
		     $_SESSION['password']=$password;
			//$_SESSION['success'] = "You are now logged in";
			header('location: homepage.php');
		}else {
		
			echo "<script>
alert('Invalid username or password');
window.location.href='login.html';
</script>";
		}
}


//adminlogin
if(isset($_POST['adminlogin']))
{
$username = mysqli_real_escape_string($con, $_POST['username']);
$password1 = mysqli_real_escape_string($con, $_POST['password']);

		$query1 = "SELECT * FROM admin WHERE username='$username' AND password='$password1'";
		$results1 = mysqli_query($con, $query1);

		if (mysqli_num_rows($results1) == 1) {
			// $_SESSION['username'] = $username;
			//$_SESSION['success'] = "admin you are now logged in....!";
			header('location: adminhomepage.php');
		}else {
			echo "<script>
alert('Invalid username or password');
window.location.href='adminlogin.html';
</script>";
			
		}
}


//feedback
if(isset($_POST['feedback']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql="INSERT INTO feedback(`name`,`email`,`feedback`) 
				  VALUES('$name','$email','$message')";

if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please refill the feedback form....!');
window.location.href='feedback.html';
</script>";
}				  
else{
	echo "<script>
alert('Thank you for the feedback');
window.location.href='login.html';
</script>";
	//header('location:login.html');
}
}




if(isset($_POST['Reject']))
{
	list($value1,$value3) = explode('|', $_POST['Reject']);
$sql ="INSERT INTO rejectedusers SELECT * FROM users where id='$value3'";
$sql1="DELETE FROM users where id='$value3'";
if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
window.location.href='adminhomepage.php';
</script>";
}
if(!mysqli_query($con,$sql1)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
window.location.href='adminhomepage.php';
</script>";
}

}




if(isset($_POST['Accept']))
{
list($value1,$value2) = explode('|', $_POST['Accept']);
$sql ="INSERT INTO activeusers SELECT * FROM users where id='$value2'";
$sql1="DELETE FROM users where id='$value2'";
if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{
echo "<script>
alert('Successfully Approved. Please approve another');
window.location.href='adminhomepage.php';
</script>";
}

if(!mysqli_query($con,$sql1)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{
echo "<script>
alert('Successfully Approved. Please approve another');
window.location.href='adminhomepage.php';
</script>";
}
}


?>


