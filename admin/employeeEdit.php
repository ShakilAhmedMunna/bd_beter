

<?php include "inc/config.php"; 
	$edit = null;
	$currentSerial = null;
	$assignSerial = null;
	
	$currentId = null;
	
	$nextSerial = null;
	 
	if(isset($_REQUEST['edit'])){
		
		$edit = $_REQUEST['edit'];
		
		$query = $conn->query("SELECT * FROM `employe` WHERE `id` = '$edit'");
		$data = $query->fetch_array();
		
		
	} 
	
	
	/*----------------------------------------------*/
	/*  Update 
	/*----------------------------------------------*/
	
	if(isset($_REQUEST['employee_edit'])){
	
	
		$name = stripslashes($_POST['name']);
		$email = stripslashes($_POST['email']);
		$serial = stripslashes($_POST['serial']);
		
	 
		//$updateQuery="UPDATE `employe` SET `serial` = '$serial' WHERE `employe`.`id` = '$edit'";
		//$conn->query($updateQuery);	
	 
		
		$selectQuery="SELECT * FROM `employe` ORDER BY `employe`.`serial` ASC";
		$result_data=$conn->query($selectQuery);
		
		if($result_data->num_rows>0) {
			while ($row=$result_data->fetch_assoc()) {		
			 
			
			 
			 if($row['serial'] ==$serial ){
				  
				  		$queryId = $conn->query("SELECT `id` FROM `employe` WHERE `serial` = '$serial'");
						$dataId = $queryId->fetch_array();
						
						echo $dataId['id'];
				  
				  
			}
			
			}
		}
		
		 
		 
		 
		
		 
	 
		
	}
	
		//$updateQuery="UPDATE `employe` SET `name` = '$name',`email` = '$email', `serial` = '$serial' WHERE `employe`.`id` = '$edit'";
		/* 
		if($conn->query($updateQuery)==true){
			
			$dir = "http://".$_SERVER['SERVER_NAME']."/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/employee.php"
			
		?>
		<script type="text/javascript">location.href = '<?php echo $dir; ?>';</script>
		<?php 
			
			$_SESSION['Successfully'] = "Successfully Update";
			}else {
			die($conn->error);
		}
		 */
		
	 
	
	
	
	
	/*----------------------------------------------*/
	
	
	
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
			
			
			
			<div class="container">
				
				<div class="row">
					<div class=" col-sm-4 col-sm-offset-5">
						
						<img src="http://localhost/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/uploads/<?php echo $data['image']; ?>" style=" width: 150px; height: 150px; " alt="pic" class="img-circle">  
					</div>	
				</div>
				
				<div class="row">
					<h5>
						<a href="dashboard.php">Dashboard</a>    
						&nbsp;&nbsp;
						<i class="fa fa-angle-right"></i>
						<a href="user_create.php"> &nbsp;&nbsp;Add User</a>
					</h5>
					<br>
					
					
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">নাম  </label>
							<input type="text" class="form-control" name = "name" value="<?php echo $data['name'];?>" id="exampleInputEmail1" placeholder="নাম" required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">ইমেইল  </label>
							<input type="email" class="form-control" name="email" value="<?php echo $data['email'];?>" id="exampleInputEmail1" placeholder="ইমেইল" required>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">ছবির অবস্থান  </label>
							<input type="text" class="form-control" name = "serial" value="<?php echo $data['serial'];?>" id="exampleInputEmail1" placeholder="ছবির অবস্থান " required>
						</div>
						
						
						
						<button type="submit" class="btn btn-primary" name="employee_edit" >Submit</button>
					</form>
				</div>
				
			</div>						