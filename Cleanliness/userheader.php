<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();
include("config.php");
if(isset($_SESSION['LoggedUser']))
{
	if($_SESSION['LoggedUserRole']!="user")
	{
			header("Location:Authorize.php");
	}
}
else
{
	header("Location:Authorize.php");
}
?>
<html>
<head>
<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:center;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}
.sidenav a, .dropdown-btn {
	padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    background: none;
    text-align: left;
    cursor: pointer;
    outline: none;
   
}

.sidenav a:hover,.dropdown-btn:hover{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 15px;
    margin-left: 50px;
}
.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: green;
    color: white;
}
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
	<title>Cleanliness</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
	
</head>

<body>
	<!-- header -->
	<div class="header" id="home" >
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> Mahuva Road, Tarsadi, Bardoli</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+(91) 2625 290074</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:ceo@utu.ac.in">ceo@utu.ac.in</a></li>
					<li><b><?php echo "Welcome  $_SESSION[LoggedName]";?></b></i>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					<li><a href="logout.php" class="fa"><font color="white"><b>Logout</b></font></a></li>&nbsp;&nbsp;&nbsp;
					<li>
					<div id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <a href="changepassword.php">Change Password</a>
				  <a class="dropdown-btn">Complaints 
					<i class="fa fa-caret-down"></i>
				  </a>
				  <div class="dropdown-container">
					<a href="makecomplaint.php">Register A Complaint</a>
					<a href="#">Link 2</a>
					<a href="#">Link 3</a>
				  </div>
				  <br>
				  
				  <a href="#">Services</a>
				  <a href="#">Clients</a>
				  <a href="#">Contact</a>
				</div>
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open</span>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "30%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
					</li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				
						<a class="navbar-brand" href="userhome.php">
							<h1><span aria-hidden="true"></span>Cleanliness</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="userhome.php" class="active">Home</a></li>
								<li><a href="about.php">About</a></li>
								
								<li><a href="departments.php">Departments</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="insta.php">Instagram</a></li>
										<li class="divider"></li>
										<li><a href="Twitter.php">Twitter</a></li>
										<li class="divider"></li>	
									</ul>
								</li>
								<li><a href="mail.php">Mail Us</a></li>
								<li><div id="google_translate_element"></div>
								<script type="text/javascript">
								function googleTranslateElementInit() {
								  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
								}
								</script>
								<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>