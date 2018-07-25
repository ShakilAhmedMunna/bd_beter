<?php include "inc/config.php"; 
	
	 
 
	
	if(isset($_REQUEST['delete'])){
		
		$deleted = $_REQUEST['delete'];
		 
		$deleteQuery="DELETE FROM `employe` WHERE `employe`.`id` = '$deleted'";
			
		if($conn->query($deleteQuery)==true){
			header('location: employee.php');
			session_start();

 
			 $_SESSION['Successfull'] = "Delete complate";
		}else {
			die($conn->error);
		}
	
	} 

	
	
	
	?>