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
		<!-- /inner_content -->
	<div class="banner-bottom">
		<div class="container">
			<div class="inner_sec_info_agileits_w3">
              <h2 class="heading-agileinfo">Mail Us<span>We offer extensive medical procedures to outbound and inbound patients.</span></h2>
				<div class="contact-form">
					     <form method="post" action="#">
							 <div class="left_form">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" required=""></span>
						    </div>
						    <div>
						     	<span><label>Fax</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" required=""></span>
						    </div>
					    </div>
					    <div class="right_form">
								<div>					    	
									<span><label>Message</label></span>
									<span><textarea name="Message" required=""> </textarea></span>
								</div>
							   <div>
									<span><input type="submit" value="Submit" class="myButton"></span>
							  </div>
					    </div>
					    <div class="clearfix"></div>
						</form>
				  </div>
			</div>
		

		</div>
	</div>
		<!-- /map -->
			<div class="map_w3layouts_agile">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14892.36383740636!2d73.133224!3d21.069029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf96e044991e337e9!2sUka+Tarsadia+University!5e0!3m2!1sen!2sin!4v1517905086850" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
		<!-- //map -->

	<?php include("footer.php")?>
</body>

</html>