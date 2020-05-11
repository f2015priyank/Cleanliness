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
<div>
<h2>Posted</h2><font color="gray">by</font><font color="blue">@Cleanliness_UTU</font>
</div>
<hr>
<iframe src="http://instaembedder.com/gallery-v2.php?width=125&cols=6&rows=19&margin=8&color=gray&likes=1&share_buttons=1&comments=1&date=1&link=1&display_username=1&caption=1&frame=1&image_border=8&frame_color=transparent&cid=7592&" 
frameborder="0" width="100%" height="1473" ></iframe>
<?php include("footer.php")?>