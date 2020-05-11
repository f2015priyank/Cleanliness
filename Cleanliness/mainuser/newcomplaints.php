<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	ob_start();
}
include("adminheader.php");
?>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {padding: 12px 28px;}
</style>
<div id="page-wrapper" >
<div class="main-page">
		<form name="frm" method="POST">
			<div >
			<div>
				<select  name="txtcases">
									<option value="">Search By Department </option>
									<option value="Bhulabhai Vanmalibhai Patel Institute of Business Management, Computer & Information Technology" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Bhulabhai Vanmalibhai Patel Institute of Business Management, Computer & Information Technology"){ echo " selected";}}?>>Bhulabhai Vanmalibhai Patel Institute of Business Management, Computer & Information Technology</option>
									<option value="Department of Mathematics" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Department of Mathematics"){ echo " selected";}}?>>Department of Mathematics</option>
									<option value="Maliba Pharmacy College" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Maliba Pharmacy College"){ echo " selected";}}?>>Maliba Pharmacy College</option>
									<option value="Shrimad Rajchandra School of Sports" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Shrimad Rajchandra School of Sports"){ echo " selected";}}?>>Shrimad Rajchandra School of Sports</option>
									<option value="Babu Madhav Institute of Information Technology" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Babu Madhav Institute of Information Technology"){ echo " selected";}}?>>Babu Madhav Institute of Information Technology</option>
									<option value="Department of Physics" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Department of Physics"){ echo " selected";}}?>>Department of Physics</option>
									<option value="Maniba Bhula Nursing College" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Maniba Bhula Nursing College"){ echo " selected";}}?>>Maniba Bhula Nursing College</option>
									<option value="Shrimad Rajchandra College of Physiotherapy" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Shrimad Rajchandra College of Physiotherapy"){ echo " selected";}}?>>Shrimad Rajchandra College of Physiotherapy</option>
									<option value="C. G. Bhakta Institute of Biotechnology" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="C. G. Bhakta Institute of Biotechnology"){ echo " selected";}}?>>C. G. Bhakta Institute of Biotechnology</option>
									<option value="Department of Chemistry" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Department of Chemistry"){ echo " selected";}}?>>Department of Chemistry</option>
									<option value="Raman Bhakta School of Architecture" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Raman Bhakta School of Architecture"){ echo " selected";}}?>>Raman Bhakta School of Architecture</option>
									<option value="JAYMIN SCHOOL OF FASHION DESIGN & TECHNOLOGY" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="JAYMIN SCHOOL OF FASHION DESIGN & TECHNOLOGY"){ echo " selected";}}?>>JAYMIN SCHOOL OF FASHION DESIGN & TECHNOLOGY</option>
									<option value="Chhotubhai Gopalbhai Patel Institute of Technology" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Chhotubhai Gopalbhai Patel Institute of Technology"){ echo " selected";}}?>>Chhotubhai Gopalbhai Patel Institute of Technology</option>
									<option value="Department of Commerce" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Department of Commerce"){ echo " selected";}}?>>Department of Commerce</option>
									<option value="Shrimad Rajchandra Institute of Management and Computer Application"<?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Shrimad Rajchandra Institute of Management and Computer Application"){ echo " selected";}}?>>Shrimad Rajchandra Institute of Management and Computer Application</option>
									<option value="Godavariba School of Interior Design" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Godavariba School of Interior Design"){ echo " selected";}}?>>Godavariba School of Interior Design</option>
									<option value="Department of Computer Science and Technology" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Department of Computer Science and Technology"){ echo " selected";}}?>>Department of Computer Science and Technology</option>
									<option value="Diwaliba Polytechnic" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Diwaliba Polytechnic"){ echo " selected";}}?>>Diwaliba Polytechnic</option>
									<option value="SRIMCA MBA" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="SRIMCA MBA"){ echo " selected";}}?>>SRIMCA- MBA</option>
									<option value="Center of Humanities and Development" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Center of Humanities and Development"){ echo " selected";}}?>>Center of Humanities and Development</option>
									<option value="Department of English" <?php if(isset($_POST['txtcases'])){ if($_POST['txtcases']=="Department of English"){ echo " selected";}}?>>Department of English</option>					
					</select>
							<button class="button button2" name="btnsearch">Search</button>
					</div>			
				</div>
					</div>
					<hr>
				<table width="100%">
			<?php
			//Rows Per Page
				$rowsPerPage=3;
				// by default we show first page
				$pageNum = 1;

				// if $_GET['page'] defined, use it as page number
				if(isset($_GET['page']))
				
				{
					$pageNum = $_GET['page'];
				}
				
				// counting the offset
				$offset = ($pageNum - 1) * $rowsPerPage;
				if($pageNum == 0)
				{
				 if(isset($_POST['btnsearch']))
				 {
				 	$newlist=@mysql_query("Select * From complaint Where department Like '%$_POST[txtcases]%' AND status='Active'") or die(mysql_error());
				 }
				 else
				 {
					$newlist=@mysql_query("Select * From complaint where  status='Active'") or die(mysql_error());
				 }
				}
				else{
					if(isset($_POST['btnsearch']))
					{
				 	$newlist=@mysql_query("Select * From complaint Where department Like '%$_POST[txtcases]%' AND status='Active' LIMIT $offset,$rowsPerPage") or die(mysql_error());
					}
					else
					{
					$newlist=@mysql_query("Select * From complaint where  status='Active' LIMIT $offset,$rowsPerPage") or die(mysql_error());
					}
				}
				if(@mysql_num_rows($newlist)>0)
				{
			?>	
				<tr>
					<th align="left" width="15%">
						Complaint Date
					</th>
					<th align="left" width="10%">
						User Name
					</th>
					<th align="left" width="10%">
						Crime Date	
					</th>
					<th align="center" width="25%">
						Complaint for Department 
					</th>
					<th align="center" width="20%">
						Description 
					</th>
					<th align="center" width="5%">
						Photo 
					</th>
					<th align="center" width="10%">
						View Details
					</th>
					<th align="center" width="5%">
						Delete 
					</th>
				</tr>
				<?php
					while($newlistdata=mysql_fetch_array($newlist))
					{
				?>
						<tr>
							<td colspan="6">
								<hr />
							</td>
						</tr>
						<tr>
							<td align="left">
								<?php echo $newlistdata['complaintdate']; ?>		
							</td>
							<td align="left">
								<?php echo $newlistdata['Username']; ?>
							</td>
							<td align="left">
								<?php echo $newlistdata['crimedate'];?>		
							</td>
							<td align="left">
								<?php echo $newlistdata['department']; ?>
							</td>
							<td align="left">
								<?php echo $newlistdata['description']; ?>
							</td>
							<td align="left">
								<?php
									$filelist=explode(",",$newlistdata['photo']);
									if(count($filelist)==1)
									{
								?>	
										<a href="../uploadedphotos/<?php echo $newlistdata['photo']; ?>">View</a>
								<?php
									}
									else
									{
								?>	
										<a href="viewimages.php?pid=<?php echo $newlistdata['id'];?>">View</a>
								<?php
									}
								?>	
							</td>
							<td align="center">
								<a href="complaintdetails.php?fid=<?php echo $newlistdata['id']; ?>">View Details</a>
								</td>
								<td align="center">
								<a href="delete.php?tblname=complaint&did=<?php echo $newlistdata['id']; ?>" onclick="return confirm('Sure Want To Delete?')">Delete</a>
							</td>
						</tr>
				<?php	
					}
				?>

			<?php
				}
				else
				{
			?>
				<tr>
					<td colspan="5" align="center">
						<h4>Sorry! No Complaints Found...</h4>
					</td>
				</tr>		
			<?php
				}
			?>	
		</table>
		<br>
		<br>
		<center>
			<?php
					$query="";
					if(isset($_POST['txtsearch']))
					 {
					 	$query="Select COUNT(*) AS numrows From complaint Where department Like '%$_POST[txtcases]%'";
					 }
					 else
					 {
						$query   = "SELECT COUNT(*) AS numrows FROM complaint";
					 }
				$result  = mysql_query($query) or die(mysql_error());
				$row     = mysql_fetch_array($result, MYSQL_ASSOC);
				$numrows = $row['numrows'];
				
				// how many pages we have when using paging?
				$maxPage = ceil($numrows/$rowsPerPage);
				
				
				// print the link to access each page
				$self = $_SERVER['PHP_SELF'];
				$nav = '';
				for($page = 1; $page <= $maxPage; $page++)
				{
					if ($page == $pageNum)
					{
						$nav .= "$page ";   // no need to create a link to current page
					}
					else
					{
						$nav .= " <a href=\"$self?page=$page\">  $page |  </a> ";
					}        
				}
				
				$viewall = "<a style=color:#660000 href=\"$self?page=0\">View all</a> ";
				// print the navigation link
				echo "<center><h4>$nav</h4></center>";
				//echo "<center>$viewall</center>";				
				?>      
		</center>
		<br />
		<br />		
		</form>
		</div>
</div>

<?php include("footer.php");?>