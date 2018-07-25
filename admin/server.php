<?php 
	
	/*-------------------------------------*/
	/*  Database connection & Session check 
	/*-------------------------------------*/
	
	include "inc/config.php";
	include "checklogin.php";
	check_login();	
?>

<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	 
	$sql = $conn->prepare("SELECT * FROM prf_artist WHERE prf_mob_num LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["prf_mob_num"];
		}
		echo json_encode($countryResult);
		}
	$conn->close();
?>

