<?php
	include "inc/config.php";
?>


<?php
	//sign up
	if(isset($_REQUEST['signup'])){
		
		$msg="";
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mob=$_POST['mob'];
		$add=$_POST['add'];
		$un=$_POST['un'];
		$pass=$_POST['pass'];
		//sign up match same username and password
		$res=mysqli_query($conn,"SELECT * FROM `prf_artist` WHERE `prf_un`='$un' and `prf_pass`='$pass'");
		
		$res4=mysqli_query($conn,"SELECT * FROM `prf_artist` WHERE `prf_mob_num` ='$mob';");
		$cheakUP=(string)mysqli_num_rows($res);
		$mNum=mysqli_num_rows($res4);
		if($cheakUP>0){
			$msg="Sorry This username and password already taken. Try new one";			
		}
		//sign up match same mobile number
		else if($mNum>0){
			$msg="Sorry This number was taken";			
		}
		
		else{
			//prf code
			$res = mysqli_query($conn,"SELECT MAX(prf_code) FROM `prf_artist`");
			$row=mysqli_fetch_array($res);
			$prf_code=(string)$row['MAX(prf_code)'] +1;
			
			$success=mysqli_query($conn,"INSERT INTO  `db_betar`.`prf_artist`(
			
			`prf_fst_name`,
			`prf_lst_name`,
			prf_mob_num,
			
			`prf_add`,
			`prf_status_active_dactive` ,
			`prf_un` ,
			`prf_pass` ,
			`prf_code`)
			VALUES ('$fname', '$lname', '$mob','$add',0,'$un',  '$pass','$prf_code')");
			
			
			
			
			if($success)
			{
				$msg="Successfully Registered";
				
				
			}
			
			
		}
		
	}
?>









<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		
		<?php include "inc/head.php";?> 
	</head>
	
	<body class="login">
		<div>
			
			<div class="login_wrapper">
				
				
				<div id="register" class="animate form login_form">
					<section class="login_content">
						<form action="" method="post">
							
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-6">
									
									<h1 class="text-center">Create Account</h1>
									<h5><a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i><a href="signup.php"> &nbsp;&nbsp;Sign Up</a></h5>  
									<?php if(isset($msg)) echo $msg."<br>"."<br>"; ?><br><br>
									
									<div class="form-group">
										<input type="text" class="form-control" name="fname" placeholder="First Name" required=""/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Last Name" name="lname"  required="" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="mob" placeholder="Mobile Number" required="" pattern="[0-9]{11,14}" title="Ex: 01700000000"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control"  name="add" placeholder="Address" required="" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username" required="" name="un" required pattern="[A-Za-z0-9]{0,8}" title="Ex: shayed12 & It's not more than 8 characters" />
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password" name="pass"  required  pattern="[0-9]{0,8}" title="Ex: 23145115 & It's not more than 8 characters"/>
									</div><br><br>
									<div class="form-group">
										<input type="submit" class="btn btn-success submit" name="signup"  value="Sign Up" />
									</div></div>
									<div class="col-sm-3"></div>
									
							</div>
							<div class="clearfix"></div>
							
							<div class="separator">
								
								
								<div class="clearfix"></div>
								<br />
								
								<div>  
								</div>
							</div>
						</form>
					</section>
				</div>
				
				
			</div>
		</div>
	</body>
</html>
