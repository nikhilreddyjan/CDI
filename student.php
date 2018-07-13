<?php 
include('server.php') 

?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script>
function disputeIframe()
{
	setTimeout(function (){self.document.open();self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");                    
	self.document.close();},200);} try {if (self!=top){disputeIframe();}}catch(e)
{
	disputeIframe();
}
</script>
<link href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/bootstrap3.min.css?v=1.1" rel="stylesheet">
<link rel="stylesheet" href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/font-awesome.min4.css">
<link href="//d33rxv6e3thba6.cloudfront.net/asset/sites/css/hover-min.css" rel="stylesheet">
<link href="/static/css/style.css?v=2.3.70" rel="stylesheet">
<link href="/static/css/blocks.css?v=2.3.70" rel="stylesheet">
<link href="/static/css/theme-css/theme9.css?v=2.3.70" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hind:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oxygen:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic">
<style type="text/css" data="Page Custom CSS"></style>
<script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script> 
if (!window.jQuery) { 
document.write('<script src="//d33rxv6e3thba6.cloudfront.net/asset/sites/js/jquery.js"></scr' + 'ipt>'); }
</script>
<meta name="page-source" site="//sites.simbla.com/1823d8e5-b5d7-5819-93b1-bbfeb186ba1d" page="home" site-id="5b3cfac31e7491001af1c672" page-id="5b3cfaca1e7491001af1c675" master-page-id="">
<link rel="canonical" href="//sites.simbla.com/1823d8e5-b5d7-5819-93b1-bbfeb186ba1d/">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" class="simbla-page static-page">
<div id="windowDiv">
<div id="MarginsTop" style="height: 0px;" class="row">
</div><div id="bodyContainer" style="width:100%">
<div class="simblaEL simblaBlock headerBlock containerHolder" data-drag="P0" id="P0" style="">
<div class="container" style="width: 100%; border-radius: 0px;" data-title="Container" data-border-type="All">
<div class="simblaEL containerHolder" data-drag="P4" id="P4">
<div class="container" style="" data-title="Container">
<div class="row simblaEL rDivider" data-drag="P6" id="P6" style="padding:0px 0px 0px 0px" data-title="Row">
<div class="sDivider col-md-2 index0" data-colsize="2" data-title="Column">
<div class="simblaEL simblaImg" data-drag="P8" id="P8" style="position: relative;">
<img data-logo="true" draggable="false" class="" alt="" data-id="" title="" style="padding: 5px 20px;" width="396" src="https://s3.amazonaws.com/simbla-static/2018/6/5b3cfac31e7491001af1c672/26-18revwf.6piz.png"></div></div>
<div class="sDivider col-md-10 index1" data-colsize="10" style="" data-title="Column">
<nav class="simblaEL menuHolder2 navbar navbar-default" data-drag="P10" id="P10" data-type="rounded" data-font="Arial" data-font-size="22" data-align="right" data-group-type="horizontal" data-font-weight="Bold" data-font-weight-hover="Bold" data-font-weight-current="Bold" data-font-color="" data-font-color-hover="" data-font-color-current="" data-ind-color="" data-ind-color-hover="" data-ind-color-current="" style="position: relative; margin-top: 30px;float:right;" data-menu-id="5b3cfaca1e7491001af1c673" data-icon-color="" data-icon-color-hover="" data-icon-color-current="">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="[data-drag=&quot;P10&quot;] .navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button></div>
<div class="collapse navbar-collapse" style="float:right;background-color:rgb(235, 235, 235);">
<ul class="nav navbar-nav">
<li>
<a style="font-family:Arial;font-weight:Boldpx;font-size:22px;line-height:22px;" class=" current" href="home.php">
<span>Home</span>
</a></li><li>
<a style="font-family:Arial;font-weight:Boldpx;font-size:22px;line-height:22px;" class="" href="student.php">
<span>Student Login</span></a></li><li>
<a style="font-family:Arial;font-weight:Boldpx;font-size:22px;line-height:22px;" class="" href="admin.php">
<span>Admin Login</span>
</a></li></ul>
</div>
</div></nav></div></div></div></div></div></div>
<form action="student.php" method="post">
<div class="simblaEL containerHolder" data-drag="P0" id="P0" style="">
<a class="simblaEL anchorElm" data-drag="divCounter" name="Intro0" id="Intro0"></a>
<div class="container-fluid minHeight60 active main" data-border-type="All" style="min-height: 416.4px; background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: rgb(235, 235, 235); border-radius: 0px;" data-title="Container">
<div class="simblaEL containerHolder" data-drag="P12" id="P12">
<div class="container" style="" data-title="Container">
<div class="row simblaEL rDivider" data-drag="P14" id="P14" style="position: relative; padding-top: 100px;" data-title="Row">
<div class="sDivider col-md-7 index0" data-colsize="7" data-title="Column">
<div class="simblaEL tcH" data-drag="P16" id="P16">
<div class="textContainer H1" style="cursor: text;"><h1>
<font style="font-size: 48px;">Center For Digital Innovation</font></h1></div></div>
<div class="simblaEL tcH" data-drag="P18" id="P18">
<div class="textContainer H2" style="cursor: text;">
<h2><div style="text-align: left;">
<span style="line-height: 1.1; background-color: initial;">
</span></div></h2></div></div>
<div class="simblaEL tcH" data-drag="P20" id="P20" style="position: relative;">
<div class="textContainer H3" style="cursor: text; padding-bottom: 30px;">
<h3><font face="Arial">CDI is an opportunity for students majoring in&#xA0; Computer Science, Information Technology, or any other IT related subjects to demonstrate their skills in programming and problem solving skills.
</font></h3></div></div></div>
<div class="sDivider col-md-1 index1" data-colsize="1" data-title="Column"></div>
<div class="sDivider col-md-4 index2" data-colsize="4" data-title="Column">
<div class="row simblaEL rDivider" data-drag="P22" id="P22" data-border-type="All" style="position: relative; padding: 35px 15px 25px; border-radius: 5px; background-color: rgb(255, 255, 255); top:0px;" data-title="Row">
<div class="sDivider col-md-12 index0" data-colsize="12" data-title="Column">
<h3><center><b>Student Login</b></center></h3>
<div class="simblaEL form-group" data-drag="P26" id="P26">
<label for="P26" style="display: none;"></label>
<input type="text" class="form-control" name="htno" id="P25" placeholder="HallTicket Number" required> </div>
<div class="simblaEL form-group" data-drag="P34" id="P34" style="position: relative; padding-bottom: 20px;">
<input type="password" class="form-control" name="pwd" id="P33" placeholder="Password" required> </div>
<button type="submit" class="simblaEL btn btn-block" name="login"data-drag="P36" id="P36">Login</button></div></div></div></div></div></div></div></div>
</form>
<div class="simblaEL  simblaBlock footerBlock footer4 containerHolder" data-drag="P37" id="P37" style="position: relative;">
<div class="container main" style="width: 100%; padding-top: 0px; background-color: rgb(125, 120, 120); border-radius: 0px;" data-border-type="All">
<div style="color:white; max-width:100%;font-size:18px; background-color:#grey; text-align:center; position: relative;bottom:0px;  padding:26px;margin-top:2px;">&copy;Anurag Group of Institutions, 2018 || <strong>Courtesy</strong>: Dept. of Information Technology
</div>
<div class="simblaEL tc" data-drag="P47" id="P47" style=""></div></div>
<div class="sDivider col-md-6 index1" data-colsize="6" style="">
</div></div></div></div></div></div></div></div>
</body>
</html>