<?php
$server="localhost";
$user="root";
$pwd="";
$db="burger";
$con = new mysqli($server,$user,$pwd,$db);
if ($con->connect_error)
  {
 die('Could not connect: ' .$con->connect_error);
  }
  else
  {
  echo "Connected";
  }
if(isset($_POST['register']))  
{ 
$sql="INSERT INTO customer(firstname,lastname,email,password,phone) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[phone]')";

$qry=$con->query($sql) ;
if($qry == TRUE)

  {
	  echo "congratulations u ar a part of a member";
        header('Location:blogin.php');
    }
	else
	{
		echo "Error";
	}
$con->close();}
?>