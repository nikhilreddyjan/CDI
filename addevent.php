<?php

	include('top.php');
	$eventid="";
	$eventname="";
	$eventtype="";
	$eventdesc="";
	$expirydate="";
	$branch="";
	$db = mysqli_connect('localhost', 'root', '', 'cdi');
	if (isset($_POST['submit1'])) {
  // receive all input values from the form
       $eventid   =  $_POST['eventid'];
        $eventname      =  $_POST['eventname'];
		$eventtype =  $_POST['eventtype'];	
        $eventdesc  =  $_POST['eventdesc'];
		$expirydate = $_POST['expirydate'];	
	    $branch = $_POST['branch'];
	 $user_check_query = "SELECT * FROM addevent WHERE eventid='$eventid'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  	$query = "INSERT INTO addevent (eventid,eventname,eventtype,eventdesc,expirydate,branch) VALUES ('$eventid','$eventname','$eventtype','$eventdesc','$expirydate','$branch')";
  	mysqli_query($db, $query);
	echo "<script>alert('event added successful');</script>";
	}
	?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/bootstrap3.min.css?v=1.1" rel="stylesheet">
<link rel="stylesheet" href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/font-awesome.min4.css">
<link href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/hover-min.css" rel="stylesheet">
<link href="/static/css/style.css?v=2.3.70" rel="stylesheet">
<link href="/static/css/blocks.css?v=2.3.70" rel="stylesheet">
<link href="/static/css/theme-css/theme9.css?v=2.3.70" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hind:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oxygen:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
<style type="text/css" data="Page Custom CSS">
.auto-style1 {
	margin-left: 0px;
}
</style>
</head>
<body style="padding-top:20px;">
<form action="addevent.php" method="post">
<table style = "width:100%;">
<tr>
<td style="padding:8px;width:20%;border-right:1px solid black;height:500px;padding-bottom:100px;"rowspan = "2">
<?php include("left.php");?>
</td>

<center>
<td colspan = "3" style="text-align:center;">
<label>Event Id :</label>&nbsp;&nbsp;&nbsp;<input type="text" name="eventid" placeholder="Event ID" value="<?php echo $eventid; ?>"><br><br>
<label>Event name :</label>&nbsp;<input type="text" name="eventname" placeholder="Event name" value="<?php echo $eventname; ?>"><br><br>
<label>Event type :</label>&nbsp;&nbsp;<input type="text" name="eventtype" placeholder="Event Type" value="<?php echo $eventtype; ?>"><br><br>
<label>Event Description :</label>&nbsp;&nbsp;<textarea name="eventdesc" placeholder="Event Description" width="500px" height="300px" value="<?php echo $eventdesc; ?>"> </textarea><br><br>
<label>End Date :</label>&nbsp;&nbsp;<input type="date" name="expirydate" placeholder = "expirydate" ><br><br>
<label>For Branches :</label>&nbsp;&nbsp;<input type="type" name = "branch" id = "branch" placeholder = "IT,CSE,ECE,EEE,MECH,CHEM,CIVIL"><br><br>

<button type="submit" name="submit1" >submit</button>
</td>
</center>
</tr>

</table>
</form>
</body>
</html>