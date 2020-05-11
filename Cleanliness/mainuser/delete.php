<?php
	include("config.php");
	if($_REQUEST['tblname']=='complaint')
	{
		@mysql_query("update complaint set status='Delete' where id=$_REQUEST[did]") or die(mysql_error());
		header("Location:newcomplaints.php");
	}
	?>