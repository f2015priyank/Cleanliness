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
<style>
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
</style>
<!-- //about -->
<!-- emergency_cases -->
	<div class="emergency_cases_w3ls">
		<div class="emergency_cases_bt">
			<div class="container">
				<div class="emergency_cases_top">
					<div class="col-md-6 emergency_cases_w3ls_left">
						<h4>History Of <br>Uka Tarsadia University</h4>
						<font color="white"> <p>Bardoli Pradesh Kelavani Mandal is a group of devoted veterans in the field of education. It was established in 1960 with the objective of imparting higher education to the tribal and rural areas surrounding Bardoli. </p>
						  <p>During the last five decades, Bardoli Pradesh Kelavani Mandal has proved its merit by successfully running many under graduate and post-graduate courses. Today, BPKM continues with tradition of training young minds and finding solutions to addressing challenges of the future. </p>
						<p>  Bardoli has acquired an important place in the history of India. It has a rare distinction of nurturing many pioneers in social, agricultural, educational and industrial fields. It is a sought-after destination by the followers of Mahatma Gandhiji and Sardar Vallabhbhai Patel. </p>
						   </font>
					</div>
					<div class="col-md-6 emergency_cases_w3ls_right">
						<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/History1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="images/History2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="images/History3.jpg" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


					</div>
					<font color="white">
					<p>The Bardoli Satyagraha was initiated and spearheaded by 
						   Sardar Patel and lead to the ignition of mass agitation 
						   across the entire state of Gujarat and in different parts 
						   of the country against steep tax hike by the British Government 
						   in 1927. It was the immense strength and sacrifices of 87000 peasants
						   with their families under the leadership of Sardar Patel, who generated 
						   the unified fighting force and exuding courage and hope that compelled 
						   withdrawal of tax hike and announcement of restoration of all confiscated 
						   properties by the British Government. This was the historic transformation 
						   of the leader Sardar as addressed by the father of the nation, Gandhiji, 
						   thereafter. Today, the place still haunts with tales of the brave peasants 
						   who suffered and stood against injustice. In memory of this historic event
						   the Swaraj Ashram has been built and is a major tourism destination of the state. </p>
					</font>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<!-- //emergency_cases -->
<!-- team -->
<?php include("footer.php")?>