<?php  
	include("eventreg.php");
	$eventid = $_POST['excel'];
	?>
	
	<?php
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }


  $filename = $eventid . date('dmY') . ".xls";
  error_reporting( 0 );

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

 $sql = "SELECT eventid, eventname, fullname,htno,teammember1,teammember2,teamname from eventregister Where eventid = '$eventid' ";

$flag='';
$result = mysqli_query($db,$sql);
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;  
 ?>  
 
