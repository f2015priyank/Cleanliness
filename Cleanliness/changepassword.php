<?php include("userheader.php");?>
<hr>
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Change Your Password</h1>
	</div>
		<div class="container_1">
			<div class="heading">
				<h2>Please Enter Your Password Details</h2>
				<p>Then After Your Paasword Will be Change.</p>
			</div>
			<div class="agile-form">
				<form method="POST" name="frm">
				<?php
					if(isset($_POST['btnsubmit']))
					{
						$res=@mysql_query("Select * From userregister Where email='$_SESSION[LoggedUser]' And password='$_POST[old]'");
						if(@mysql_num_rows($res)>0)
						{
							@mysql_query("Update userregister Set password='$_POST[new]' Where email='$_SESSION[LoggedUser]'") or die(mysql_error());
									?>
								<div id="message" align="center">
								<h4><font color="green"><b>Password Changed Successfully.</b></font></h4> 								
								</div>
								<?php
						}
						else
						{
							?>
							<div id="message" align="center">
							<h4><font color="red"><b>Invalid Old Password</b></font></h4> 
						</div>
							<?php
						}
					}
				?>
				<br>
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Old Password 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="old" id="old" placeholder="Enter Old Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
							</div>
						</li>
						<li>
							<label class="form-label"> 
								New Password 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="new" id="new" placeholder="Enter New Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
							</div>
						</li>
						<li>
							<label class="form-label"> 
								Re-Type New Password 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="rnew" id="rnew" placeholder="Enter Re-Type New Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
							</div>
						</li>
					</ul>
					<input type="submit" value="Change Your Password" name="btnsubmit" onclick="return ValidateForm()">
				</div>
				</form>
			<script language="javascript" type="text/javascript">
				$("#message").show();
				setTimeout(function() { $("#message").hide(); }, 5000);
			</script>				
		<script language="javascript" type="text/javascript">
		function ValidateForm()
		{
			var password = document.forms["frm"]["new"].value;
			var rpassword = document.forms["frm"]["rnew"].value;
			if(password != rpassword)
			{
				alert("Password Mismatch");
				return false;
			}
			else
			{
				return true;
			}
		} 	

		</script>
				
			</div>
		</div>
</div>
<?php include("footer.php")?>