<?php
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	$query="SELECT * FROM `prf_admin`";
	$result=mysqli_query($conn,$query);
	
	
	
?>


<?php  
	if(isset($_POST['save'])) {
		$nm =$_POST['un'];
		$pass =$_POST['pass'];
		
		$query="SELECT * FROM `prf_admin`"; // for show un n pass
		$result=mysqli_query($conn,$query);
		
		$sql="SELECT * FROM `prf_admin` where `prf_admn_un`='$nm' and `prf_admn_pass`='$pass'";
		$res=mysqli_query($conn,$sql);
		if((mysqli_num_rows($res))<=0){
			
			$res=mysqli_query($conn,"INSERT INTO  `db_betar`.`prf_admin` (
			`prf_admn_un` ,
			`prf_admn_pass`
			)
			VALUES ('$nm','$pass');");
			
			if($res){
				$msg="New Account is created";
			}
			else
			$msg="Something is wrong";
			
			
			
			}else{
			$msg="Error same username or password try different username or password";
			
		}
		
	}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>User Management</title>
		<?php include  "inc/head.php";?>
		
	</head>
	<body>
		<div class="well">
			<div style="height:20px"></div>
			<div class="row"><div class="col-sm-4">&nbsp;</div>
				
				
			<div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br><h4>Add User</h4> </div><div class="col-sm-4">&nbsp;</div></div>
			
			<div style="height:10px"></div>
			
			<div class="container">
				<h5>
					<a href="dashboard.php">Dashboard</a>
					&nbsp;&nbsp;
					<i class="fa fa-angle-right"></i>
					<a href="user_create.php"> &nbsp;&nbsp;Add User</a>
				</h5>
				<br>
				<form action="" method="post" enctype="multipart/form-data">
					<h4 style="text-align:center;"><?php if(isset($msg)) echo $msg; ?></h4>
					<p>
					Username</p>&nbsp;<input type="text" name="un" required/>   <br><br>
					<p>
					Password</p>&nbsp;<input type="password" name="pass" required/>  
					<button type="submit" name="save">Add</button> 
				</form> <br><br><br>
				
				
				<table class="table table-striped table-advance table-hover" border="3">
					<tr>
						<th>Username</th>
						<th>Password</th>
					</tr>
					<?php
						while($row=mysqli_fetch_array($result)){
						?>						
						<tr>
							<td><?php echo $row['prf_admn_un'];?></td>
							<td><?php echo $row['prf_admn_pass'];?></td>
						</tr>
						<?php
							
						}
						
						
					?>
				</table>
				
				
			</div>
			
			<div style="height:140px"></div>
			<!--    footer-->
			<div class="row" style="height:100px;margin-top:90px; text-align:center;">
				<?php include "inc/footer.php";?>
                
			</div>
		</div>
		
	</body>
</html>
