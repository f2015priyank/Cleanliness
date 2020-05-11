<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php 
include("header.php")
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
		<h1>Register New User</h1>
	</div>
		<div class="container_1">
			<div class="heading">
				<h2>Please Enter User Details</h2>
				<p>Fill the form below we will contact you as soon as possible.</p>
			</div>
			<div class="agile-form">
				<form method="POST" name="frm">
				<?php
					if(isset($_POST['btnsubmit']))
					{
						$sql="INSERT INTO userregister
						(fullname,username,usertype,gender,mobile,dob,address,city,state,country,zipcode,email,password,department,que,ans,status) VALUES 
						('$_POST[name]','$_POST[username]','$_POST[usertype]','$_POST[gender]','$_POST[mobileno]','$_POST[dob]','$_POST[address]','$_POST[city]',
						 '$_POST[state]','$_POST[country]','$_POST[zipcode]','$_POST[email]','$_POST[pass]','$_POST[department]','$_POST[que]',
						 '$_POST[ans]','Active')";
						$result=@mysql_query($sql) or die (@mysql_error());
						?>
						<div id="message" class="form-control">
							<font color="green"><b><i><h4>Thank You for Registration Now You Can Login.</h4></i></b></font> 
						</div>
						<?php
					}
				?>
				<br>
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Full Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="name" id="name" placeholder="Enter Full Name" required pattern="[a-zA-Z\s]+" title="Enter Only Character"/>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								User Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="username" id="username" placeholder="Enter User Name" required pattern="[a-zA-Z0-9\s]+" title="Enter Only Character and Numbers">
							</div>
						</li>
						<li>
							<label class="form-label"> 
								User Type 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="usertype" id="usertype" required>
									<option value="">Please Select User Type</option>
									<option value="Student"> Student </option>
									<option value="Teaching Staff"> Teaching Staff </option>
									<option value="Non Teaching Staff">Non-Teaching Staff</option>
								</select>
							</div>
						</li>
						<li>
							<label class="form-label">
							   Gender
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" id="gender" required>
									<option value="">Please Select Gender</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="mobileno" id="mobileno" placeholder="Mobile Number" required pattern="[6-9]{1}[0-9]{9}" title="Enter Atlist 10 Digits Number and Mobile number Start with 6-9 and remaing 9 digit with 0-9">
							</div>
						</li>
						<li>
							<label class="form-label">
							   Date of Birth
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="dob" id="dob"  placeholder="Select Your Birth Date" required>
								<script src="jquery-1.11.3.min.js"></script>
								<script src="dcalendar.picker.js"></script>
								<script>
									$('#dob').dcalendarpicker();
								</script>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
								<div class="form-input">
									<input type="text" name="address" id="address" placeholder="Enter Your Address" required>
		
								</div>
						</li>
						<li> 
							<label class="form-label">
							   City
							   <span class="form-required"> * </span>
							</label>
								<div class="form-input">
									<input type="text" name="city" id="city" placeholder="Enter Your City" required pattern="[A-Za-z]+" title="Enter Only Character">
		
								</div>
						</li>
						<li> 
							<label class="form-label">
							   State
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="state" id="state" placeholder="Enter State" required pattern="[A-Za-z]+" title="Enter Only Character">
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Country
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="country" id="country" placeholder="Enter Your country" required pattern="[A-Za-z]+" title="Enter Only Character">
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Zip Code
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="zipcode" id="zipcode" placeholder="Enter ZipCode" required pattern="[0-9]{6}" title="Six digit zip code">
							</div>
						</li>
						<li> 
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" id="email" autocomplete="off" placeholder="myname@example.com" required>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Password
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="pass" id="pass" autocomplete="off" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Department
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="department" id="department" required>
									<option value="">Select Your College Department </option>
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
							   Select Your Secrate Question
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="que" id="que" required>
									<option value="">Please Select Your Question </option>
									<option value="What is Your Childhood Name?"> What is Your Childhood Name?</option>
									<option value="What is your School Teacher Name?">What is your School Teacher Name?</option>
									<option value="What is your Favourite Food?"> What is your Favourite Food? </option>
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Answer
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="ans" id="ans" placeholder="Enter Your Answer" required>
							</div>
						</li>
					</ul>
					<input type="submit" value="Register" name="btnsubmit">Already Account?&nbsp;<a href="Login.php" class="fa"><font color="Green">Login</font></a>
				</div>
				</form>	
				<script language="javascript" type="text/javascript">
				$("#message").show();
				setTimeout(function() { $("#message").hide(); }, 5000);
			</script>
			</div>
		</div>
</div>


	<?php include("footer.php")?>