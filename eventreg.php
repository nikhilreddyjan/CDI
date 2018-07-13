<?php
include('top1.php');
$eventid="";
$eventname="";
$fullname = "";
$eventid = $_POST['eventid'];
$eventname = $_POST['eventname'];
     $htno = "";
	 $teammember1="";
     $teammember2 = ""; 
     $teamname= ""; 
	 $a="";
	 $db = mysqli_connect('localhost', 'root', '', 'cdi');
	if (isset($_POST['submit1'])) {
  // receive all input values from the form
       $eventid   =  $_POST['eventid'];
        $eventname      =  $_POST['eventname'];
		$fullname =  $_POST['fullname'];	
        $htno  =  $_POST['htno'];
		$teammember1 = $_POST['teammember1'];	
	    $teammember2 = $_POST['teammember2'];
		$teamname      =  $_POST['teamname'];
	
	 $user_check_query = "SELECT * FROM eventregister WHERE htno='".$_SESSION['htno']."' AND eventid='".$eventid."'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result); 
  if($row['htno']==NULL){
  	$query = "INSERT INTO eventregister (eventid,eventname,fullname,htno,teammember1,teammember2,teamname,phno,email) VALUES ('$eventid','$eventname','$fullname','$htno','$teammember1','$teammember2','$teamname','".$_SESSION['phno']."','".$_SESSION['email']."')";
  	mysqli_query($db, $query);
  echo "<script>alert('Registered for the event');</script>";
  echo "<script>window.location= '../CDI MANAGEMENT/studentviewevents.php'</script>";
	}
	else{
		echo "<script>alert('event is already registered');</script>";
		echo "<script>window.location= '../CDI MANAGEMENT/studentviewevents.php'</script>";
	}
	}
?>
<html>
<head>
</head>
<body>
<center>
<form action="eventreg.php" method="post">
<label>
<label>Event Id :</label>&nbsp;&nbsp;
<input type="text" name="eventid" placeholder="eventid" <?php echo "readonly"; ?> value="<?php echo $eventid; ?>"><br><br>
<label>Event Name :</label>&nbsp;&nbsp;
		<input type="text" name="eventname" placeholder="eventname" <?php echo "readonly"; ?> value="<?php echo $eventname; ?>"><br><br>
<label>Full Name :</label>&nbsp;&nbsp;
        <input type="text" name="fullname" action="post" placeholder="fullname" <?php echo "readonly"; ?> value="<?php echo $_SESSION['st_name']; ?>"><br><br>
<label>HallTIcket No :</label>&nbsp;&nbsp;
		<input type="text" name="htno" placeholder="htno" <?php echo "readonly"; ?> value="<?php echo $_SESSION['htno']; ?>"><br><br>
<label>Team Member (1) :</label>&nbsp;&nbsp;
		<input type="text" name="teammember1" placeholder="teammember1" value="<?php echo $teammember1; ?>"><br><br>
<label>Team Member (2) :</label>&nbsp;&nbsp;
		<input type="text" name="teammember2" placeholder="teammember2" value="<?php echo $teammember2; ?>"><br><br>
<label>Team Name :</label>&nbsp;&nbsp;
		<input type="text" name="teamname" placeholder="teamname" value="<?php echo $teamname; ?>"><br><br>
        <input type="submit" value="register" name="submit1">
		<center>
</body>
</html>