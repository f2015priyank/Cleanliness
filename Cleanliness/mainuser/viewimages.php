<?php include("adminheader.php")?>
<?php
$result=@mysql_query("select * from complaint where id=$_REQUEST[pid]") or die(mysql_error());
$resultrow=@mysql_fetch_assoc($result);
$filepath=$resultrow['photo'];
$filelist=explode(",",$resultrow['photo']);
?>
<center>
	<div id="page-wrapper">
	   <div class="main-page">
		  <form method="POST" name="frm" enctype="multipart/form-data">
		  	<br />
		  	<br />			
			<table width="100%">
				<tr>
				<?php
					$cnt=0;
					for($i=0;$i<count($filelist);$i++)
					{
						$cnt++;
					?>
						<td align="center" style="padding-right:10px;">
							<img src="../uploadedphotos/<?php echo $filelist[$i];?>" height="400" width="500" />
							<br /><br />
						</td>	
					<?php
						if($cnt==2)
						{
							echo "</tr><tr>";
							$cnt=0;
						}
					}
					?>
				</tr>	
			</table>
		  </form>	
		</div>
	</div>
</center>	  
<?php include("footer.php")?>