<?php
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	 
	
	if(isset($_POST['local_dir_submit']))
	{  
		
		$name = stripslashes($_POST['name']);
		$entry_date = stripslashes($_POST['entry_date']);
		$privious = stripslashes($_POST['privious']);
		$mobile = stripslashes($_POST['mobile']);
		$email = stripslashes($_POST['email']);
		$decription = stripslashes($_POST['decription']);
		$image_variable = null;  
		
		
		$uploaddir = 'uploads/';		
		$image_variable =  date('dmYHis').str_replace(" ", "", basename($_FILES["image"]["name"]));		
		$uploadfile = $uploaddir . basename($image_variable);
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {			
		} 
 	
		$employee_insertQuery="UPDATE `local_director` SET `name` = '$name', `entry_date` = '$entry_date', `image` = '$uploadfile', `privious` = '$privious', `mobile` = '$mobile', `email` = '$email', `decription` = '$decription' WHERE `local_director`.`id` = 1";
		
  
		
		
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
						<a href="dashboard.php">Dashboard</a>   	<!--  	 	privious	 	image	status	serial -->
						&nbsp;&nbsp;
						<i class="fa fa-angle-right"></i>
						<a href="user_create.php"> &nbsp;&nbsp;আঞ্চলিক পরিচালকের পরিচিতি</a>
					</h5>
					<br>
					
					
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputentry_date1">নাম  </label>
							<input type="text" class="form-control" name = "name" id="exampleInputentry_date1" placeholder="নাম" required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputentry_date1">যোগদানের তারিখ   </label>
							<input type="date" class="form-control" name="entry_date" id="exampleInputentry_date1" placeholder="যোগদানের তারিখ " required>
						</div>						
						
						<div class="form-group">
							<label for="exampleInputFile"> পূর্ববর্তী কর্মস্থল</label>
							<input type="text" class="form-control" name="privious" id="exampleInputentry_date1" placeholder="পূর্ববর্তী কর্মস্থল " required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">  মোবাইল নাম্বার  </label>
							<input type="text" class="form-control" name="mobile" id="exampleInputentry_date1" placeholder="মোবাইল নাম্বার" required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile">ই-মেইল  </label>
							<input type="email" class="form-control" name="email" id="exampleInputentry_date1" placeholder="ই-মেইল " required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile"> সংক্ষিপ্ত বিবরণ </label>
							<textarea class="form-control" name="decription" rows="5" id="comment" placeholder="সংক্ষিপ্ত বিবরণ "></textarea>
						</div>
						
						<div class="form-group">
							<label for="exampleInputFile"> কর্মকর্তার ছবি  </label>
							<input type="file" name="image" id="exampleInputFile" required>
							
						</div>
						
						
						<button type="submit" class="btn btn-primary" name="local_dir_submit" >Submit</button>
					</form>
				</div>
				
				
				
				<br />
				<br />
				<br />
				
				
				<div class="row">
					<br><br>
					<?php 	
						
						
						$selectQuery="SELECT * FROM `local_director` ORDER BY `local_director`.`id` DESC";
						$result_data=$conn->query($selectQuery);
						
						if($result_data->num_rows>0)
						{
							while ($row=$result_data->fetch_assoc()) {
								
								
							?>
							
							<div class="col-sm-3">
								<div class="about-team">
									<img src="http://localhost/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/<?php echo $row['image']; ?>" style=" width: 100px; height: 100px; " alt="pic" class="img-circle">  
									
									<h3> <?php echo $row['name']; ?></h3>
									<h5> <?php echo $row['privious']; ?></h5>
									
									<h4> <?php echo $row['entry_date']; ?></h4>
									
									 
									
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
