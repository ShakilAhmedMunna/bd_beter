<?php
	include "inc/config.php";
	include("checklogin.php");
	check_login();
	
    $sql="SELECT * 
	FROM  `prf_artist` WHERE `prf_status_active_dactive`=0";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
    if(isset($_SESSION['msg'])){
		$msg=$_SESSION['msg'];
		
	}
?>
<?php
	
	//o new
	//1 approve
	// 2 cancel
	
	if(isset($_GET['action']))
	{
		$can_msg="";
		if(($_GET['action'])=='active'){
			$_SESSION['id']=$_GET['id'];
			
			Header('Location: prf_data.php' );
			
		}
		else if(($_GET['action'])=='cancel'){
			$id=$_GET['id'];
			$sql="UPDATE `prf_artist` SET   `prf_status_active_dactive`=2 WHERE `id`='$id'";
			$res=mysqli_query($conn,$sql); 
			if($res){
				$can_msg="Profile's are Canceled";
			}
			
			Header( 'Location: prf_new.php' );  
			
		}
		
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>New Profile</title>
		
		<?php include "inc/head.php";?>
	</head>
	
	<body>
		<div class="container" style="margin-top:40px;">
			
			<h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="prf_new.php">New</a> </h5>
			
			<div class="row">
				
				
				
				<div class="col-md-12">
					<div class="content-panel">
						<table class="table table-striped table-advance table-hover">
							<h4><i class="fa fa-angle-right"></i> New Profile</h4>
							<h5 style="text-align:center;"><?php if(isset($msg)) echo $msg; unset($_SESSION['msg']); ?></h5>
							<h5 style="text-align:center;"><?php if(isset($can_msg)) echo $can_msg;?></h5>
							<hr>
							
							<?php if($num>0) {
							?>
							<tr>
								<th>Sl. no.</th>
								<th >First Name</th>
								<th> Last Name</th>
								<th> Mobile Number</th>
								<th>Address</th>
								<th>Action</th>
								
							</tr>
							<?php
								$id=1;
								while($row=mysqli_fetch_array($res))  {
								?>
								<tr>
									<td> <?php echo $id++; ?></td>
									<td><?php echo $row['prf_fst_name']; ?></td>
									<td><?php echo $row['prf_lst_name']; ?></td>
									<td><?php echo $row['prf_mob_num']; ?></td>
									<td><?php echo $row['prf_add']; ?></td>
									<td><a href="prf_data.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs">Activate</a>&nbsp;&nbsp;<a href="prf_new.php?id=<?php echo $row['id'];?>& action=cancel" class="btn btn-primary btn-xs">Cancel</a></td>
								</tr>
								
								
								<?php
									
									
								} }else{?>
								<h5 style="text-align:center;">
									<?php
										echo "<strong>"."There has no new request"."</strong>";
										
										
										
										
										
									}
									
									
									
								?>
							</h5>
							
						</table>
					</div>
				</div>
			</div>
			
			<div style="height:240px"></div>
			<!--    footer-->
			<div class="row" style="height:100px;margin-top:90px; text-align:center;">
				<?php include "inc/footer.php";?>
			
			</div>
			
			</div>
			</body>
			</html>			