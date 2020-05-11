<?php include("adminheader.php")?>
<div id="page-wrapper" >
<div class="main-page">
<center>
<form name="frm" method="POST">
			<?php 
				$newlist=mysql_query("Select * From complaint where id=$_REQUEST[fid]"); 
				while($newlistdata=mysql_fetch_array($newlist))
					{
			?>
<table width="100%" border="5">
<div align="center">
<h3><font color="gold"><b>Complainant Full Details</b></font></h3>
</div>
<hr>
					<tr>
						<td align="left">
							<b>Complainant Date :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['complaintdate'];?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>User Name :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['Username']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>User Department :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['userdepartment']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>Crime Date :</b>
						</td>
						<td align="left">
							<?php $dtfir=new DateTime($newlistdata['crimedate']);	echo $dtfir->format('d-m-Y'); ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>No Of. Accused :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['accused']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>Complaint for Department:</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['department']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>Department Area :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['area']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>User Email :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['email']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>Description :</b>
						</td>
						<td align="left">
							<?php echo $newlistdata['description']; ?>		
						</td>
					</tr>
					<tr>
						<td align="left">
							<b>Photo :</b>
						</td>
						<td align="left">
							<a href="viewimages.php?pid=<?php echo $newlistdata['id'];?>">View</a>
						</td>
					</tr>
					</table>
					<?php		
					}
			?>
			</form>	
					</center>
					</div>
					</div>
<?php include("footer.php")?>