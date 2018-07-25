<?php
	
	//refersh page
	$page = $_SERVER['PHP_SELF'];
	$sec = "5";
	header("Refresh: $sec; url=$page");
?>

<?php
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	$id=$_SESSION['id']; //artsit prf code
	
	
?>
<?php
	$res=mysqli_query($conn,"select schedule_prf.id, schedule_prf.`schedule_prf_recording_time`,schedule_prf
	.`schedule_prf_telecst_time`,schedule_prf.`schedule_prf_prg_duration`,
	schedule_prf.`schedule_hon` from schedule_prf INNER JOIN  prf_artist ON schedule_prf.`schedule_prf_id` = prf_artist.`prf_code` and prf_code='$id' and schedule_seen=0;");
	$re_time=mysqli_fetch_array($res);
	$res2=mysqli_query($conn,"select schedule_prf.id, schedule_prf.schedule_agree_cancel, schedule_prf.`schedule_prf_recording_time`,schedule_prf
	.`schedule_prf_telecst_time`,schedule_prf.`schedule_prf_prg_duration`,
	schedule_prf.`schedule_hon` from schedule_prf INNER JOIN  prf_artist ON schedule_prf.`schedule_prf_id` = prf_artist.`prf_code` and prf_code='$id' and schedule_seen=0;");
	
?>




<?php
	//Invitation from admin
	
	$msg="";
	if(isset($_REQUEST['action'])){
		if(($_REQUEST['action'])=="seen"){
			
			$res=mysqli_query($conn,"UPDATE `schedule_prf` SET  schedule_seen=1 WHERE `schedule_prf_id`='$id'");
			if($res){
				$msg="The Invitation was seen now it is saved into inbox";
			}
			
		}
		else if(($_REQUEST['action'])=="agree"){
			
			
			
			$date=date("d/m/y");
			$res=mysqli_query($conn,"UPDATE `schedule_prf` SET `schedule_agree_cancel` = '1' WHERE `schedule_prf`.`schedule_prf_id` = $id");
			
			$res="UPDATE `employe` SET `serial` = '$serial' WHERE `employe`.`id` = '$edit'";
			$conn->query($res);	
			
			if($res){
				$msg="You press"."<strong>"."  Agree  "."</strong>"."button and The message will go into operator";
			}
			
		}
		else if(($_REQUEST['action'])=="cancel"){
			$res=mysqli_query($conn,"UPDATE `schedule_prf` SET  `schedule_agree_cancel`=0 WHERE `schedule_prf_id`='$id'");
			if($res){
				$msg="You press"."<strong>"."  Cancel  "."</strong>"."button and The message will go into operator";
				
			}
		}
		
		else if(($_REQUEST['action'])=="print"){
			//for print page
			$print_id=$_GET['id'];  
			
			$print=mysqli_query($conn,"SELECT * FROM  `schedule_prf` where id='$print_id'");
			
			$p_info=mysqli_query($conn,"SELECT * FROM `prf_artist` WHERE prf_code='$id'");
			$sign=mysqli_query($conn,"SELECT * 
			FROM  `admin_signature`");
			$row1=mysqli_fetch_array($print);
			$row2=mysqli_fetch_array($p_info);
			$row3=mysqli_fetch_array($sign);
			$_SESSION['rt']=$row1['schedule_prf_recording_time'];
			$_SESSION['tt']=$row1['schedule_prf_telecst_time'];
			$_SESSION['h']=$row1['schedule_hon'];
			$_SESSION['d']=$row1['schedule_prf_prg_duration'];
			$_SESSION['schedule_mohora']=$row1['schedule_mohora'];
			$_SESSION['schedule_recording_date']=$row1['schedule_recording_date'];
			$_SESSION['schedule_telecast_date']=$row1['schedule_telecast_date'];
			$_SESSION['n']=$row2['prf_fst_name']." ".$row2['prf_lst_name'];
			$_SESSION['add']=$row2['prf_add'];
			//$_session['sign']=    
			
			
			Header( 'Location:print_art.php' ); 
			
			
			
			
			
			
			
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>New Message</title>
		<?php include "inc/head.php";?>
		
	</head>
	<body>
		<div class="well">
			<div style="height:30px"></div>
			<div class="row"><div class="col-sm-4">&nbsp;</div>
				
				
			<div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br><h4>New Message</h4> <br><p>*In this page show's Invitation from Bangladesh Betar's if you are interested press<strong> Agree</strong> and if you are not interest press <strong>Cancel</strong> if you see this press <strong>Seen</strong><br>*To Press seen it has saved to be <strong>Drafts</strong> and you not press into seen then it's show into New Message **If you press seen then you can not press <strong>agree or cancel</strong>  </p></div><div class="col-sm-4">&nbsp;</div></div>
			
			<h5><a href="art_dash.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="nm.php">New Message</a> </h5>
			<div class="row"><div class="col-sm-12" >
				<br><br>
				<?php  if(!($re_time['schedule_prf_recording_time']=="")){ ?>
					<table class="table">
						<tr> <td><?php if(isset($msg)) echo $msg;?></td></tr>       
						
						<tr><th>Sl. No</th><th>Reording Time</th><th>Telecast Time</th><th>Duration</th><th>Honourium</th><th>Status</th><th>Print</th>
						</tr>
						<?php
							$id=1;while($row=mysqli_fetch_array($res2)){?>
							
							
							<?php if($row['schedule_agree_cancel'] == 0){?>
								
								<tr><td><?php echo $id++; ?></td><td><?php echo $row['schedule_prf_recording_time'];?></td><td><?php echo $row['schedule_prf_telecst_time'];?></td><td><?php echo $row['schedule_prf_prg_duration'];?></td><td><?php echo $row['schedule_hon'];?>
									
									</td><td> 
									
									
									
									<a href="nm.php?action=seen">Seen</a>&nbsp;&nbsp;<a href="nm.php?action=agree">Agree</a> 
									
									
									
								&nbsp;&nbsp;<a href="nm.php? action=cancel">Cancel</a></td><td><a href="nm.php?id=<?php echo $row['id'];?>&action=print">Print</a></td></tr> <?php   } }   ?>
					</table>
					<?php }else {
					echo   "<strong>"."You has no new invitation"."</strong>";?>
					
					<div style="height:240px"></div>
					
					<?php    
					}?>
			</div>
			
			</div>
			
			<!--    footer-->
			<div class="row" style="height:100px;margin-top:90px; text-align:center;">
			<?php include "inc/footer.php";?>
			
			</div>
		</div>
		
	</body>
</html>
