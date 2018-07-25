

<?php
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	$id=$_SESSION['id'];
	echo $id;
?>
<?php
	$res=mysqli_query($conn,"select schedule_prf.`schedule_prf_recording_time`,schedule_prf
	.`schedule_prf_telecst_time`,schedule_prf.`schedule_prf_prg_duration`,
	schedule_prf.`schedule_hon` from schedule_prf INNER JOIN  prf_artist ON schedule_prf.`schedule_prf_id` = prf_artist.`prf_code` and prf_code='$id' and schedule_seen=1");
	$re_time=mysqli_fetch_array($res);
	
	
	$res2=mysqli_query($conn,"select schedule_prf.id, schedule_prf.schedule_agree_cancel, schedule_prf.`schedule_prf_recording_time`,schedule_prf
	.`schedule_prf_telecst_time`,schedule_prf.`schedule_prf_prg_duration`,
	schedule_prf.`schedule_hon` from schedule_prf INNER JOIN  prf_artist ON schedule_prf.`schedule_prf_id` = prf_artist.`prf_code` and prf_code='$id' and schedule_seen=0");
	
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
				
				
			<div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br><h4>Drafts</h4> <br><p>*Invited from Bangladesh Betar's programme are show's here which if you are press <strong>Seen</strong></p></div><div class="col-sm-4">&nbsp;</div></div>
			
			<h5><a href="art_dash.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="inbox.php">Drafts</a> </h5>
			<div class="row"><div class="col-sm-12" >
				<br><br>
				
				<table class="table">
					<tr> <td><?php if(isset($msg)) echo $msg;?></td></tr>       
					
					<tr><th>Sl. No</th><th>Reording Time</th><th>Telecast Time</th><th>Duration</th><th>Honourium</th>
					</tr>
					<?php
						$id=1;while($row=mysqli_fetch_array($res2)){?>
						<?php if($row['schedule_agree_cancel'] == 1){?>
							
							<tr><td><?php echo $id++; ?></td><td><?php echo $row['schedule_prf_recording_time'];?></td><td><?php echo $row['schedule_prf_telecst_time'];?></td><td><?php echo $row['schedule_prf_prg_duration'];?></td><td><?php echo $row['schedule_hon'];?>
								
							</td></tr> <?php   } }  ?>
				</table>
				
			</div>
			
			</div>
			<div style="height:240px"><br><br><br><br></div>
			<!--    footer-->
			<div class="row" style="height:100px;margin-top:90px; text-align:center;">
				<?php include "inc/footer.php";?>
                
			</div>
		</div>
		
	</body>
</html>
