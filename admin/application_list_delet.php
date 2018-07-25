<?php include "inc/config.php"; 
	
	 
 
	
	if(isset($_REQUEST['delete'])){
		
		$deleted = $_REQUEST['delete'];
		 
		$deleteQuery="DELETE FROM `application` WHERE `application`.`id` = '$deleted'";
			
		if($conn->query($deleteQuery)==true){
			header('location: application_list.php');
			session_start();

 
			 $_SESSION['Successfull'] = "Delete complate";
		}else {
			die($conn->error);
		}
	
	} 

	
	
	
	?>