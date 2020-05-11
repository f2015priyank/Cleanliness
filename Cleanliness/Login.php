<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();
include("config.php"); 

if(isset($_SESSION['LoggedUser']))
{
	if($_SESSION['LoggedUserRole']=="Admin")
	{
			header("Location:mainuser/adminhome.php");
	}
	else if($_SESSION['LoggedUserRole']=="coordinator")
	{
			header("Location:mainuser/coordinatorhome.php");	
	}
	else if($_SESSION['LoggedUserRole']=="user")
	{
			header("Location:userhome.php");	
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from app.utu.ac.in/UTUSIS/SIS/Login.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2018 04:22:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head id="Head1"><title>
	Cleanliness
</title><link rel="Shortcut Icon" href="favicon.ico" />
    <style type="text/css">
        body {
            font-family: Verdana;
            font-size: 0.75em;
            color: #fff;
            background-color: #606060;
            margin: 0px;
        }

        .panel {
            clear: both;
            padding-top: 27em;
            display: block;
            margin: 0px auto;
            background-image: url('Images/ICard.png');
            background-repeat: no-repeat;
            background-position: center top;
            background-color: transparent;
        }

        p {
            line-height: 2.2em;
            padding: 0px;
            margin: 0px;
            clear: both;
        }

        fieldset {
            clear: both;
            float: left;
            padding-left: 110px;
            border-width: 0px;
        }

        legend {
            color: #FFFFFF;
            font-weight: bold;
            font-size: 1.2em;
        }

        .login {
            height: 25px;
            vertical-align: bottom;
            display: block;
            width: 220px;
        }

        label {
            float: left;
            line-height: 2em;
            text-align: right;
            width: 75px;
            vertical-align: middle;
            padding-right: 5px;
        }

        .btn {
            border: 1px solid #F484BF;
            background-image: url('Images/btn.gif');
            font-weight: bold;
            color: #444;
        }

        .txt {
            background-color: #454544;
            border: 1px Solid #D2D0B5;
            color: White;
            width: 135px;
        }
    </style>
</head>
<body>
    <form method="post" name="frm">

         <div id="pnlLogin" class="panel" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;btnSignIn&#39;)" style="height:230px;width:420px;">
	<fieldset>
		<legend>
			LOGIN
		</legend>
            <p>
                <label for="txtUserId" id="lblUserId">User ID :</label>
                <input name="txtUserId" type="email" id="txtUserId" class="txt" required/>
                <span id="rfvUserId" title="Please enter user name." style="color:Red;display:none;">*</span>
            </p>
            <p>
                <label for="txtPassword" id="lblPassword">Password :</label>
                <input name="txtPassword" type="password" id="txtPassword" class="txt"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                <span id="rfvPassword" title="Please enter password." style="color:Red;display:none;">*</span>
            </p>
            <p style="padding-top: 10px; text-align: center">
                <input type="submit" name="btnSignIn" value="Sign In"  id="btnSignIn" class="btn" />
            </p>
			
            <p>
                <span id="lblLoginError" style="color:Red;"></span>
            </p>
            <p style="width: 220px; padding-top: 35px;">
                <span style="font-size: 0.75em; line-height: 1.5em;">If you forgot your password, please contact administrator. </span>
            </p>
			<?php
					if(isset($_POST['btnSignIn']))
					{
						
						$res=@mysql_query("Select * From userregister Where email='$_POST[txtUserId]' And password='$_POST[txtPassword]'");
						if(@mysql_num_rows($res)>0)
						{
							$ressingle=@mysql_fetch_assoc($res);						
							$_SESSION['LoggedUser']=$_POST['txtUserId'];
							$_SESSION['LoggedUserRole']="user";
							$_SESSION['LoggedUserID']=$ressingle['user_id'];
							$_SESSION['LoggedName']=$ressingle['username'];
							header("Location:userhome.php");
						}
						else{
							?>
							<div class="ErrorMessage">
									<center>
										<font color="red">Invalid Email Address or Password</font>
									</center>									
								</div>
							<?php
						}
						
						
						$res=@mysql_query("Select * From admin Where email='$_POST[txtUserId]' And password='$_POST[txtPassword]'");
						if(@mysql_num_rows($res)>0)
							{
								
							$ressingle=@mysql_fetch_assoc($res);							
							$_SESSION['LoggedUser']=$_POST['txtUserId'];
							$_SESSION['LoggedUserRole']="Admin";
							$_SESSION['LoggedUserID']=$ressingle['id'];
							$_SESSION['LoggedName']=$ressingle['adminname'];
							header("Location:mainuser/adminhome.php");
							}
						$res=@mysql_query("Select * From coordinator Where email='$_POST[txtUserId]' And password='$_POST[txtPassword]'");
						if(@mysql_num_rows($res)>0)
						{
							$ressingle=@mysql_fetch_assoc($res);
							if($ressingle["status"]=="Active")
							{							
							$_SESSION['LoggedUser']=$_POST['txtUserId'];
							$_SESSION['LoggedUserRole']="coordinator";
							$_SESSION['LoggedUserID']=$ressingle['id'];
							//$_SESSION['LoggedName']=$ressingle['username'];
							header("Location:mainuser/coordinatorhome.php");	
						   }
						   else if($ressingle["status"]=="Pending")
							{
							$_SESSION['LoggedUser']=$_POST['txtUserId'];
							$_SESSION['LoggedUserRole']="coordinator";
							$_SESSION['LoggedUserID']=$ressingle['id'];
							//$_SESSION['LoggedName']=$ressingle['username'];
							header("Location:mainuser/coordinatorregister.php");
							
						}
						}
						
						
					}				
				?>
            <div id="vs" style="color:#EA94BB;display:none;">

		</div>
        
	</fieldset>
</div>
</form>
</body>

<!-- Mirrored from app.utu.ac.in/UTUSIS/SIS/Login.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Feb 2018 04:22:40 GMT -->
</html>
