<?php
	
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	
	echo "hi1";
	
	if(isset($_REQUEST['send'])){
		$rd=$_POST['rd'];
		$rdd=$_POST['rdd'];
		$td=$_POST['td'];
		$ind=$_POST['ind'];
		$rt=$_POST['rt'];
		$tt=$_POST['tt'];
		$d=$_POST['d'];
		$h=$_POST['h'];
		$id=$_POST['id'];
		
		 
		$res=mysqli_query($conn,"INSERT INTO `db_betar`.`schedule_prf` (`schedule_prf_id`, `schedule_prf_recording_time`, `schedule_prf_telecst_time`, `schedule_prf_prg_duration`,`schedule_hon`, `schedule_seen`,`schedule_invitation_date`, `schedule_mohora`, `schedule_recording_date`,`schedule_telecast_date`) VALUES ('$id','$rt','$tt','$d','$h',0,'$ind','$rd','$rdd','$td');");
			
		 
		  $_SESSION['Successfull'] = "Successfull";
		
		
		Header( 'Location: invit_send.php' );
		
		 
	}
	
	
?>