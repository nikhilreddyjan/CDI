<?php
include("top1.php");
$eid='';
$ename='';
$etype='';
$edesc='';
$eid=$_POST['eventid'];
$ename=$_POST['eventname'];
$etype=$_POST['eventtype'];
$edesc=$_POST['eventdesc'];
$db = mysqli_connect('localhost', 'root', '', 'cdi');
$sql = "SELECT * FROM addevent WHERE eventid = '$eid'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
?>
<style>
   
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<center>
<table id = "customers" style = "width:75%;height:80px;">
<tr><th colspan = "2" style = "text-align:center;"> Event Registration </th></tr>
<tr>
<td>
Event Id
</td>
<td><?php echo $eid; ?></td>
</tr>
<tr>
<td>
Event Name
</td>
<td><?php echo $ename; ?></td>
</tr>
<tr>
<td>
Event Type
</td>
<td><?php echo $etype; ?></td>
</tr>
<tr>
<td>
Event Description
</td>
<td><?php echo $edesc; ?></td>
</tr>
</table>
</center>
<br><br>
<center>
<form name = "Register" method = "POST" action = "eventreg.php">
<input type = "hidden" name = "eventid" id = "eventid" value = "<?php echo $eid; ?>" >
<input type = "hidden" name = "eventname" id = "eventname" value = "<?php echo $ename; ?>">
<input type = "submit" name = "Register" id = "Register" value = "Register">
</form>
</center>

<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top:0px;
}
</style>

<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $row['expirydate']; ?> 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Registrations Closed";
	document.getElementById("Register").hidden = "true";
  }
}, 1000);
</script>