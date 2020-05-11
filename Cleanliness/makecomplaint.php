<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	include("userheader.php");
?>
<link href="dcalendar.picker.css" rel="stylesheet" type="text/css">
<style>
.datepick { margin:150px auto 30px auto; max-width:300px;}
</style>
	<!-- banner -->
<hr>
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Register New Complaint</h1>
	</div>
	<?php
	$fname="";
?>
		<div class="container_1">
			<div class="heading">
				<h2>Please Enter Complaint Details</h2>
				<p>Fill the form below we will contact you as soon as possible.</p>
			</div>
			<div class="agile-form">
				<form method="POST" name="frm" enctype="multipart/form-data">
				<?php
				$result=@mysql_query("select username,department from userregister where user_id=$_SESSION[LoggedUserID]") or die(mysql_error());
										$resultrow=@mysql_fetch_assoc($result);
										$department=$resultrow['department'];
										$username=$resultrow['username'];
								if(isset($_POST['btnsubmit']))
								{
								//Get The Random Number to get unique file name
								$sid = session_id();
								$sid=substr($sid,2,10);
								$filelist="";
								
										foreach($_FILES['photo']['tmp_name'] as $key => $tmp_name )
										{
											$file_name = $key.$_FILES['photo']['name'][$key];
											$sid=str_shuffle($sid);
											$f1 = explode(".",$file_name);
											$fname = $sid . "." .$f1[1];
											move_uploaded_file($_FILES['photo']['tmp_name'][$key],"uploadedphotos/$fname") or die ("Couldn't copy");
											$filelist=$filelist . $fname . ",";
											$cnt=+1;
										}
										$filelist=rtrim($filelist,",");
										$today=date("y/m/d");
										@mysql_query("Insert Into complaint(complaintdate,user_id,userdepartment,Username,crimedate,
										accused,department,area,email,description,photo,status)
										Values ('$today',$_SESSION[LoggedUserID],'$_POST[userdepartment]','$_POST[uname]',
										'$_POST[cridate]','$_POST[accused]','$_POST[department]',
										'$_POST[area]','$_SESSION[LoggedUser]','$_POST[description]',
										'$filelist','Active')") or die(mysql_error());
										
										?>
										<div id="message" align="center">
							<h4><font color="green"><b>Thank You for Register New Complaint.</b></font></h4> 
						</div>
										<?php
								}
							?>
				<br>
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Complaint Date
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="cdate" id="cdate" disabled="disabled" value="<?php echo date("y/m/d");?>" />
							</div>
						</li>
						<li>
							<label class="form-label"> 
								User Name
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="uname" id="uname" readonly="true" value="<?php if(isset($username)){echo $username;}?>"/>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								User Department
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="userdepartment" id="userdepartment" readonly="true" value="<?php if(isset($department)){echo $department;}?>"/>
							</div>
						</li>
						<li>
							<label class="form-label">
							   Crime Date
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="cridate" id="cridate"  placeholder="Select Crime Date" required>
								<script src="jquery-1.11.3.min.js"></script>
								<script src="dcalendar.picker.js"></script>
								<script>
									$('#cridate').dcalendarpicker();
								</script>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								No. Of Accused :  
								<span class="form-required"></span>
							</label>
							<div class="form-input">
								<input type="text" name="accused" id="accused" placeholder="Enter total No. Of Accused" pattern="[0-9]+" title="Enter Only Numbers">
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Complaint for Department
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="department" id="department" required>
									<option value="">Select College Department </option>
									<option value="Bhulabhai Vanmalibhai Patel Institute of Business Management, Computer & Information Technology">Bhulabhai Vanmalibhai Patel Institute of Business Management, Computer & Information Technology</option>
									<option value="Department of Mathematics">Department of Mathematics</option>
									<option value="Maliba Pharmacy College">Maliba Pharmacy College</option>
									<option value="Shrimad Rajchandra School of Sports">Shrimad Rajchandra School of Sports</option>
									<option value="Babu Madhav Institute of Information Technology">Babu Madhav Institute of Information Technology</option>
									<option value="Department of Physics">Department of Physics</option>
									<option value="Maniba Bhula Nursing College">Maniba Bhula Nursing College</option>
									<option value="Shrimad Rajchandra College of Physiotherapy">Shrimad Rajchandra College of Physiotherapy</option>
									<option value="C. G. Bhakta Institute of Biotechnology">C. G. Bhakta Institute of Biotechnology</option>
									<option value="Department of Chemistry">Department of Chemistry</option>
									<option value="Raman Bhakta School of Architecture">Raman Bhakta School of Architecture</option>
									<option value="JAYMIN SCHOOL OF FASHION DESIGN & TECHNOLOGY">JAYMIN SCHOOL OF FASHION DESIGN & TECHNOLOGY</option>
									<option value="Chhotubhai Gopalbhai Patel Institute of Technology">Chhotubhai Gopalbhai Patel Institute of Technology</option>
									<option value="Department of Commerce">Department of Commerce</option>
									<option value="Shrimad Rajchandra Institute of Management and Computer Application">Shrimad Rajchandra Institute of Management and Computer Application</option>
									<option value="Godavariba School of Interior Design">Godavariba School of Interior Design</option>
									<option value="Department of Computer Science and Technology">Department of Computer Science and Technology</option>
									<option value="Diwaliba Polytechnic">Diwaliba Polytechnic</option>
									<option value="SRIMCA MBA">SRIMCA- MBA</option>
									<option value="Center of Humanities and Development">Center of Humanities and Development</option>
									<option value="Department of English">Department of English</option>
								</select>
							</div>
						</li>
						<li>
							<label class="form-label">
							  Department Area
							   <span class="form-required"> * </span>
							</label>
								<div class="form-input">
									<input type="text" name="area" id="area" placeholder="Enter Your Department Area" required>
								</div>
						</li>
						<li> 
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" id="email" autocomplete="off" disabled="disabled" value="<?php echo $_SESSION['LoggedUser'];?>"placeholder="myname@example.com" required>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Crime Description
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" rows="6" name="description" id="description" placeholder="Enter Your Description" required>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Photo
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="file" accept="image/*" name="photo[]" multiple="true" id="photo" required>
							</div>
						</li>
					</ul>
					<input type="submit" value="Register Complaint" name="btnsubmit">
				</div>
				</form>	
				<script language="javascript" type="text/javascript">
				$("#message").show();
				setTimeout(function() { $("#message").hide(); }, 5000);
			</script>
			</div>
		</div>
</div>

<?php include("footer.php") ?>