<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
 
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['LoggedUser']))
{
	if($_SESSION['LoggedUserRole']=="user")
	{
			include("userheader.php");
	}
}
	else
	{
	include("header.php");
	}
?>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	<!-- departments -->
	<div class="services">
<div class="container">
		<h3 class="heading-agileinfo">Departments<span>We offer extensive medical procedures to outbound and inbound patients.</span></h3>
	
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-heartbeat" aria-hidden="true"></i>
					<h4>Cardiology</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<h4>Traumotology</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
					<h4>For disabled</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-top-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-medkit" aria-hidden="true"></i>
					<h4>Pulmonary</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-hospital-o" aria-hidden="true"></i>
					<h4>Gynaecology</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-ambulance" aria-hidden="true"></i>
					<h4>Dental</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-plus-square" aria-hidden="true"></i>
					<h4>X-ray</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-stethoscope" aria-hidden="true"></i>
					<h4>Nephrology</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid1">
					<i class="fa fa-user-md" aria-hidden="true"></i>
					<h4>Neurology</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //departments -->
	<?php include("footer.php")?>
</body>

</html>