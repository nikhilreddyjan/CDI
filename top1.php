<?php 
include("server.php");

   

  if (!isset($_SESSION['htno'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: home.php');
	
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['htno']);
  	header("location: home.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
body, html { 
    overflow-x: hidden; 
    overflow-y: hidden;
}
</style>
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
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav >
 
    <div class="nav navbar-center">
     
      
<br><class="navbar-center"; margin-left: 250px; ><center><img src="logo.png" style="max-width:100%; float: left; height:auto;"></center>
<div class="container-fluid" style="font-size:10vw; color:#116EB0; max-width:100%; "><center>
<h1>Center For Digital Innovation</h1></center>
    </div>

</head>
<!--
<img data-logo="true" draggable="false" style="padding: 5px 20px;" width="324" src="logo.png">
<h2 style="padding-top:20px;float:right;padding-right:410px;"><b>Center For Digital Innovation</b></h2>-->
<div class="navbar" style="background-color:#116EB0;width:inherit;height:2px;">
<ul style="float:left;padding:10px 25px;"><p style="color:white;font-size:18px">Welcome <strong><?php echo $_SESSION['htno']; ?></strong></p></ul>
<ul style="float:right;padding:10px 25px;"><a href="student.php?logout='1'"><p style="color:white;font-size:18px;" > logout </p></a></ul></div>