<?php  

	include("server.php");
	$branch = $_GET['excel'];
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }


  $filename = $branch . date('dmY') . ".xls";
  error_reporting( 0 );

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

 $sql = "SELECT fullname, htno, branch, phno, email from register Where branch = '$branch' ";

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
 
