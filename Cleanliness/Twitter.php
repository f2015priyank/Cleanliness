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
<hr>
<div height="700" width="100%">
        <a class="twitter-timeline"
           href="https://twitter.com/cleanliness_utu">  
        </a>
</div>
      <!--<a class="twitter-timeline" href="https://twitter.com/Parry_Patel021">Tweets by Parry_Patel021</a>--> 
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109032328-1"></script>
<?php include("footer.php")?>