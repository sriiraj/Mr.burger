<?php
$server="localhost";
$user="root";
$pwd="";
$db="burger";
$con = new mysqli($server,$user,$pwd,$db);
if ($con->connect_error)
  {die('Could not connect: ' .$con->connect_error); }
  else
  { echo "Connected"; }
if(isset($_POST['login']))
{
    session_start();
$email=$_POST['email'];
$password = $_POST['password']; 
    if(!empty($_POST['email'])) 
    {
        $query ="SELECT * FROM customer where email = '$email' AND password = '$password'";
            $result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:blogin.php');
		}
		else{
			$row=mysqli_fetch_array($result);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("email", $row['email'], time() + (86400 * 30)); 
				setcookie("password", $row['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id']=$row['userid'];
			header('location:success.php');
		}
	}
	else{
		header('location:blogin.php');
		$_SESSION['message']="Please Login!";
	}}
?>



