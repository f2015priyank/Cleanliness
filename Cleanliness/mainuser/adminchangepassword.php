<?php include("adminheader.php");?>
<hr>
	<!--//banner -->
	<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">Change Your Password</h2>
				<div class="sign-up-row widget-shadow">
				<form method="post" name="frm">
				<?php
					if(isset($_POST['btnsubmit']))
					{
						$res=@mysql_query("Select * From admin Where email='$_SESSION[LoggedUser]' And password='$_POST[old]'");
						if(@mysql_num_rows($res)>0)
						{
							@mysql_query("Update admin Set password='$_POST[new]' Where email='$_SESSION[LoggedUser]'") or die(mysql_error());
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
					<div class="sign-u">
						<input type="password" name="old" id="old" placeholder="Enter Old Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="password" name="new" id="new" placeholder="Enter New Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						</div>
						<div class="clearfix"> </div>
						<div class="sign-u">
								<input type="password" name="rnew" id="rnew" placeholder="Enter Re-Type New Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						</div>
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="btnsubmit" onclick="return ValidateForm()">
						<div class="clearfix"> </div>
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