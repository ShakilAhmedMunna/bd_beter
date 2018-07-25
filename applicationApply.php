<?php
	include "inc/config.php";        
	session_start();
	if(isset($_POST['application'])){ 
		
		$name = $_POST['name'];  
		$fatherName = $_POST['fatherName'];  
		$age = $_POST['age'];  
		$occupation = $_POST['occupation'];  
		$address = $_POST['address'];  
		$presentAddress = $_POST['presentAddress'];  
		$Nid = $_POST['Nid'];  
		$note = $_POST['note'];  
		$getInput = $_POST['select_name'];
		
		
		$selectedOption = "";
		
		foreach ($getInput as $option => $value) {
			$selectedOption .= $value.',';  
		}
		
		$musictype = $selectedOption;
		
		mysqli_query($conn,"INSERT INTO `application` (`id`, `name`, `fatherName`, `age`, `occupation`, `address`, `presentAddress`, `Nid`, `note`, `musictype`) VALUES ('','$name','$fatherName','$age','$occupation','$address','$presentAddress','$Nid', '$note', '$musictype')");
		
		
		
		header('Location: index.php#application');
		
		$_SESSION["success"] = "Successfully Registered";
		
	}
?>