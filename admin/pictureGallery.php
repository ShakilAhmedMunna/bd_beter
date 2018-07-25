<?php
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	$query="SELECT * FROM `prf_admin`";
	$result=mysqli_query($conn,$query);
	
	
	if(isset($_POST['employee_submit']))
	{  
		
		$name = stripslashes($_POST['name']);
	 
		$image_variable = null;  
		
		
		$uploaddir = 'uploads/';
		
		$image_variable =  date('dmYHis').str_replace(" ", "", basename($_FILES["image"]["name"]));
		
		
		
		$uploadfile = $uploaddir . basename($image_variable);
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
			
		} 
		
		$employee_insertQuery="INSERT INTO `gellary` ( `title`, `image`) VALUES ('$name', '$image_variable')";
		
		
		if($conn->query($employee_insertQuery)==true){
			
			}else {
			die($conn->error);
			$_SESSION['error'] = "404 Error"; 
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
				
				
			<div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br>  </div><div class="col-sm-4">&nbsp;</div></div>
			
		 
			
			<div id="notification_sk" style=" text-align: center; background: #03A9F4; color: white; ">
				<?php  if(isset($_SESSION['Successfull'])){  echo $_SESSION['Successfull'];  unset($_SESSION['Successfull']); } ?>  
			</div>
			
			<div id="notification_sk" style=" text-align: center; background: red; color: white; ">
				<?php  if(isset($_SESSION['error'])){  echo $_SESSION['error'];  unset($_SESSION['error']); } ?>  
			</div>
			
			<div class="container">
				
				<div class="row">
					<h5>
						<a href="dashboard.php">Dashboard</a>   	<!--  	 	designation	 	image	status	serial -->
						&nbsp;&nbsp;
						<i class="fa fa-angle-right"></i>
						<a href="user_create.php"> &nbsp;&nbsp;Add User</a>
					</h5>
					<br>
					
					
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">নাম  </label>
							<input type="text" class="form-control" name = "name" id="exampleInputEmail1" placeholder="নাম" required>
						</div>
						 
						<div class="form-group">
							<label for="exampleInputFile">  ছবি  </label>
							<input type="file" name="image" id="exampleInputFile" required>
							
						</div>
						
						
						<button type="submit" class="btn btn-primary" name="employee_submit" >Submit</button>
					</form>
				</div>
				 
				
				<br />
				<br />
				<br />
				
				
				<div class="row">
					<br><br>
					<?php 	
						
						
						$selectQuery="SELECT * FROM `gellary` ORDER BY `gellary`.`id` DESC";
						$result_data=$conn->query($selectQuery);
						
						if($result_data->num_rows>0)
						{
							while ($row=$result_data->fetch_assoc()) {
								
								
							?>
							
							<div class="col-sm-3">
								<div class="about-team">
									<img src="http://localhost/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/uploads/<?php echo $row['image']; ?>" style=" width: 100px; height: 100px; " alt="pic" class="img-circle">  
									
									<h3> <?php echo $row['title']; ?></h3>  
									
									<br />
									<a href="employeeEdit.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> 
									 <a href="employeeDelete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> 
									 
									
									<div class="bordr-bttm-team">
									</div>
									
								</div>
							</div>
							
							<?php
							}
						}
					?>			
					
				</div>
				
				
				
				
			</div>
			
			<div style="height:140px"></div>
			<!--    footer-->
			<div class="row" style="height:100px;margin-top:90px; text-align:center;">
				<?php include "inc/footer.php";?>
				
			</div>
		</div>
		
	</body>
</html>
