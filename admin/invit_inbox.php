<?php
	include "inc/config.php";
	include("checklogin.php");
	check_login();
	
	
    $sql=" 
	select * from schedule_prf INNER JOIN  prf_artist ON schedule_prf.`schedule_prf_id` = prf_artist.`prf_code` and `schedule_agree_cancel`=1";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
	
?>

<?php
	if(isset($_REQUEST['action']))
	{
		if(($_REQUEST['action'])=="print"){
			//for print page
			
			
			$scd_id=$_GET['id'];  //schedule id
			
			$pf_id=$_GET['pid'];  //schedule id
			
			$print=mysqli_query($conn,"SELECT * 
			FROM  `schedule_prf` where id='$scd_id'");
			
			$p_info=mysqli_query($conn,"SELECT * FROM `prf_artist` WHERE prf_code='$pf_id'");
			$sign=mysqli_query($conn,"SELECT * 
			FROM  `admin_signature`");
			$row1=mysqli_fetch_array($print);
			$row2=mysqli_fetch_array($p_info);
			$row3=mysqli_fetch_array($sign);
			$_SESSION['rt']=$row1['schedule_prf_recording_time'];
			$_SESSION['tt']=$row1['schedule_prf_telecst_time'];
			$_SESSION['h']=$row1['schedule_hon'];
			$_SESSION['d']=$row1['schedule_prf_prg_duration'];
			$_SESSION['n']=$row2['prf_fst_name']." ".$row2['prf_lst_name'];
			$_SESSION['add']=$row2['prf_add'];
			//$_session['sign']=    
			
			
			Header( 'Location: print.php' ); 
			
			
			
		}}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>All Invitation</title>
		
		<?php include "inc/head.php";?>
	</head>
	
	<body>
		<div class="container"  style="margin-top:40px;">
			
			<h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="invit_inbox.php">All Invitation</a> </h5>
			
			<div class="row">
				
				
				
				<div class="col-md-12">
					<div class="content-panel">
						<table class="table table-striped table-advance table-hover">
							<h4><i class="fa fa-angle-right"></i> All Invitation (Accept) </h4>
							
							<hr>
							
							<?php if($num>0) {
							?>
							<tr>
								<th>Sno.</th>
								<th >Name</th>
								<th>Mobile Number </th>
								<th>Programme Duration</th>
								<th>Reharsel Date</th>
								
								<th>Recording Date</th>
								<th>Recording Time</th>
								<th>Telecast Date</th>
								<th>Telecast Time</th>
								<th>Invitation Date</th>
								<th>Agreement Date</th>
								<th>Agreement Time</th>
								<th>Honourium</th>
								<th>Print Copy</th>
								
								
							</tr>
							<?php
								$id=1;
								while($row=mysqli_fetch_array($res))  {
								?>
								<tr><td><?php echo $id++; ?></td><td><?php echo $row['prf_fst_name']." ".$row['prf_lst_name']; ?></td><td><?php echo $row['prf_mob_num']; ?></td> <td><?php echo $row['schedule_prf_prg_duration']; ?>&nbsp;min</td>
									<td><?php echo $row['schedule_mohora']; ?></td>
									<td><?php echo $row['schedule_recording_date']; ?></td><td><?php echo $row['schedule_prf_recording_time']; ?></td>
									<td><?php echo $row['schedule_telecast_date']; ?></td><td><?php echo $row['schedule_prf_telecst_time']; ?></td>
									
									
									<td><?php echo $row['schedule_invitation_date']; ?></td>
									<td><?php echo $row['schedule_agree_date']; ?></td>
									<td><?php echo $row['schedule_agreement_time']; ?></td>
									
									<td><?php echo $row['schedule_hon']; ?></td>
								<td><a href="invit_inbox.php?id=<?php echo $row['id'];?>&pid=<?php echo $row['prf_code'];?>&action=print">Print</a></td></tr>
								
								
								<?php
									
									
								} }else{?>
								<h5 style="text-align:center;">
									<?php
										echo "<strong>"."There has no data"."</strong>";
										
										
										
										
										
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