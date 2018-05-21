<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('blogin.php');
		exit();
	}
$server="localhost";
$user="root";
$pwd="";
$db="burger";
$conn = new mysqli($server,$user,$pwd,$db);
	$query=mysqli_query($conn,"select * from customer where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>

<html>
<head>
<title>Setting Up Cookie on User Login</title>
</head>
<body>
	<h2>Login Success</h2>
	<?php echo $row['email']; ?>
	<br>
	<a href="logout.php">Logout</a>
</body>
</html>