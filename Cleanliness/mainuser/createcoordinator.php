<?php include("adminheader.php");?>
<hr>
	<!--//banner -->
	<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">Create User</h2>
				<div class="sign-up-row widget-shadow">
				<form method="post" name="frm">
				<?php
							if(isset($_POST['btnsubmit']))
							{
								$res=@mysql_query("Select * From coordinator Where email='$_POST[email]'");
								if(@mysql_num_rows($res)>0)
								{
									?>
									<div id="message" >
									<h4><font color="red"><b>The account with this email already exist. Please try another.</b></font></h4>  
									</div>
									<?php
								}
								else
								{
									@mysql_query("Insert Into coordinator(email, password,status) Values ('$_POST[email]','$_POST[pass]','Pending')") or die(mysql_error());
									?>
									<div id="message" align="center">
									<h4><font color="green"><b>Registration Successful.</b></font></h4>  
									</div>
									<?php
								}
							}
						?>
				<br>
					<div class="sign-u">
						<input type="email" name="email" id="email" placeholder="Enter Email" required />
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password" name="pass" id="pass" placeholder="Enter  Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						</div>
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnsubmit">
						<div class="clearfix"> </div>
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