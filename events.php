<?php

	include('top.php');
	
	$search_result='';
	
	

if(isset($_POST['search']))
{
    $eventid = $_POST['eventid'];
      $query = "SELECT * FROM eventregister WHERE eventid = '$eventid'";
    $search_result = filterTable($query);
    
}
 else {
	 error_reporting( 0 );
   
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "cdi");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
		<script>
		function preventBack() { window.history.backward(); }
		setTimeout("preventBack()", 0);
		window.onload = function () { null };
		
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

        <style>
            #stud_table
            {
                border: 1px solid black;
            }
           
        </style>
        <style>
      @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.main-menu {
    margin-top: 0%;
background:#212121;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:30%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#fff;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}



.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}



.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
}
.area {
float: left;
background: #e2e2e2;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
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
</head>
<body>
  <table style = "width:100%;">
  <tr>
 <td style="padding:8px;padding-bottom:100px;width:20%;border-right:1px solid black;">
<?php include("left.php");?>
</td>
<td style="width:200%;" colspan="2">
<form action="events.php" method="post" align="center" style="width:100%;">
    <input type="text" Placeholder="Enter event id" name="eventid" class="auto-style1" style="width: 230px; height: 25px">

	
            <input type="submit" name="search" id="search" value="Go" align="center" onclick="disp()" style="height:28px;width:70px;"><br><br>
			
             <div class="table-responsive" id="student_table">
            <table class="table table-bordered" id="stud_table">
                <tr>
                <td>Event id</td>
<td>Event Name</td>
<td>Full Name</td>
<td>Hall Ticket Number</td>
<td>Team Member1</td>
<td>Team Member2</td>
<td>Team Name</td>
</tr>   
                    
                

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)){?>
               <tr>
<td><?php echo $row['eventid'];?></td>
<td><?php echo $row['eventname'];?></td>
<td><?php echo $row['fullname'];?></td>
<td><?php echo $row['htno'];?></td>
<td><?php echo $row['teammember1'];?></td>
<td><?php echo $row['teammember2'];?></td>
<td><?php echo $row['teamname'];?></td>
</tr>
                <?php }
                 ?>
            </table>
			</div>
			 
			 </form>
			 <script>var excel_data = $('#student_table').html();</script>
 <?php $data="<script>document.write(excel_data);</script>";?>
		<form method = "GET" action = "excel2.php">
				<input type="hidden" name="excel" value="<?php echo $_POST['eventid']; ?>">
				<div align="center">  
                     <button name="create_excel" id="create_excel" class="btn btn-success" onclick="excel()">Create Excel File</button>  
                </div> 
				</form>
</td>
  </tr>
  </table>
  
    
		<!--<script>  
$(document).ready(function(){  
     $('#create_excel').click(function(){  
		  var excel_data = $('#student_table').html();
          var page = "excel.php?data=" + excel_data;  
          location.href = "http://www.cnn.com";
      });  
});  
 </script>  -->
 
 
 <script>
/*	function excel()
	{
		var excel_data = $('#student_table').html();
		
	}*/
 </script>
 <label></label>
  <script>
			
	
	var input = document.querySelector('submit');

submit.addEventListener(function 'disp()'{
  var stud_table = document.getElementByName('stud_table');
  if(stud_table.style.display== "none"){
    stud_table.style.display ="linear";
  }
  else{
    stud_table.style.display = "none";
  }

})
			</script>

        
</body>
</html>
