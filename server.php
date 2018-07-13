<?php
session_start();

// initializing variables
     $fullname = "";
     $htno = "";
	 $branch="";
     $phno  = ""; 
     $email = ""; 
     $pwd   = "";  
	 $a="";
	$errors   = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cdi');

// REGISTER USER
if (isset($_POST['submit1'])) {
  // receive all input values from the form
       $fullname    =  $_POST['fullname'];
        $htno      =  $_POST['htno'];
		$branch =  $_POST['branch'];	
        $phno  =  $_POST['phno'];
		$email       =  $_POST['email'];
                 $pwd      =  $_POST['pwd'];
		 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "Fullname is required"); }
  if (empty($htno)) { array_push($errors, "Hall Ticket Number is required"); }
  if (empty($branch)) { array_push($errors, "Branch is required"); }
  if (empty($phno)) { array_push($errors, "PHNO is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($pwd)) { array_push($errors, "Password is required"); }
 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE htno='$htno' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['htno'] === $htno) {
      array_push($errors, "htno already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$pwd = md5($pwd);//encrypt the password before saving in the database

  	$query = "INSERT INTO register (fullname,htno,branch,phno,email,pwd) VALUES ('$fullname','$htno','$branch','$phno','$email','$pwd')";
  	mysqli_query($db, $query);
  	$_SESSION['htno'] = $htno;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: studentlogin.php');
  }
}

	
if (isset($_POST['login']))
	{
  $htno =   mysqli_real_escape_string($db,$_POST['htno']);
  $pwd =   mysqli_real_escape_string($db,$_POST['pwd']);
  


  if (count($errors) == 0) 
  {
  	//$password = md5($password);
  	$query = "SELECT * FROM register WHERE htno='$htno' AND pwd='$pwd'"; 
  	$results = mysqli_query($db, $query);
	$row = mysqli_fetch_array($results);
	if (mysqli_num_rows($results) == 1)
		{ 
	  $_SESSION['st_name'] = $row['fullname'];
	  $_SESSION['branch'] = $row['branch'];
  	  $_SESSION['htno'] = $htno;
	  $_SESSION['email'] = $row['email'];
	  $_SESSION['phno'] = $row['phno'];
  	  $_SESSION['success'] = "You are now logged in";
	  	  header('location: studentlogin.php');
       }
	else
		{
  		$a="Wrong username/password combination";
  	    }
  }
}

?>


