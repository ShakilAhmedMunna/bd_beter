<?php
	include "inc/config.php";
	include "checklogin.php";
	check_login();
	$mob = null;
	
?>

<?php
	
	
	
	
	
 	if(isset($_POST['sendNumber'])){
		$mob  = stripslashes($_POST['txtCountry']);
	} 
	
	
	
	$sql="SELECT * FROM `prf_artist` WHERE  prf_mob_num='$mob' ";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	$id=$row['prf_code'];
	$hnr=$row['prf_honour'];
	
	if(empty($id)){
		 Header( 'Location: search_mobile_number.php' ); 
	}
	
?>

<head>
	<title>Send Invitation</title>
	<?php include  "inc/head.php";?>
	
	
	
</head>           

<body>
	

	
	<div class="well">	
		
		<div class="container">
			<div class="row">
				<h4 class="text-center">Add Programme Schedule & honourium</h4>
				<div class="col-md-8 col-md-offset-2">				
					<form action="schedule_proc.php" method="post">
						<div class="form-group">
							<label for="d">Duration:</label>
							<input type="number" name="d"   class="form-control" id="d" placeholder="Duration" min="0" required/>&nbsp;min 
						</div>
						
						<div class="form-group">
							<label for="rd">Reharsel Date:</label>
							<input type="text" name="rd"   class="form-control" id="rd" placeholder="Reharsel Date Ex:2/3/4 December 2017" required/>
						</div>
						
						<div class="form-group">
							<label for="h">Honourium:</label>
							<input type="number" name="h"   class="form-control" id="h" value="<?php echo $hnr; ?>"/>&nbsp;Tk.
						</div>
						
						<div class="form-group">
							
							<label for="rdd">Recording Date:</label>
							<input type="date" name="rdd"   class="form-control" id="rdd"   required/>  
						</div>
						
						<div class="form-group">
							<label for="rt">Recording Time:</label>
							<input type="time" name="rt"   class="form-control" id="rt" style="height:40px;" required/> 
						</div>
						
						<div class="form-group">
							<label for="td">Telecast Date:</label>
							<input type="date" name="td"   class="form-control" id="td"   required/> 
							
						</div>
						
						<div class="form-group">
							<label for="tt">Telecast Time:</label>
							<input type="time" name="tt"   class="form-control" id="tt" required/>  
						</div>
						
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
							<input type="hidden" name="ind" value="<?php echo date("y/m/d"); ?>"/>
						</div>
						
						<div class="form-group">
							<input type="reset" value="Reset" class="btn btn-default">
							<input  type="submit" class="btn btn-default" name="send"  value="Send Invitation" >
						</div>				
					</form>
				</div>
				
				
				<div class="clear"> </div>
				
			</form>
			
		</div>					
	</div>
	
</div>

<!--    footer-->
<div class="row" style="height:100px;margin-top:90px; text-align:center;">
	<?php include "inc/footer.php";?>
	
</div>



</body>  



