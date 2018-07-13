<?php
session_start();

// initializing variables
$logid = "";
$pwd   = "";
$a="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cdi');


if(isset($_POST['login']))
 {
  $logid = mysqli_real_escape_string($db, $_POST['logid']);
  $pwd = mysqli_real_escape_string($db, $_POST['pwd']);

 

  if (count($errors) == 0) 
  {
  	//$password = md5($password);
  	$query = "SELECT * FROM faclogin WHERE logid='$logid' AND pwd='$pwd'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1)
		{
  	  $_SESSION['logid'] = $logid;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: faclogin.php');
  	    }
	else {
  		$a="Wrong logid/password combination";
  	     }
  }
}
?>


