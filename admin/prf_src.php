<?php
	include "inc/config.php";
	include("checklogin.php");
	check_login();
	
    $sql="SELECT * FROM `prf_artist`";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
?>

<?php
	
	if(isset($_POST['src']))
	{
		$mnum=$_POST['txtCountry'];
		$sql="SELECT * FROM `prf_artist` where prf_mob_num='$mnum'";
		$res=mysqli_query($conn,$sql);
		
	?> 
    
	
	<!DOCTYPE html>
	<html>
		<head>
			<title>Profile</title>
			
			<?php include "inc/head.php";?>
		</head>
		
		<body>
			<div class="container"  style="margin-top:40px;">
				
				<h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="prf_src.php">&nbsp;&nbsp;Search Profile</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="#">Profile</a> </h5>
				<div class="row">
					<div class="col-md-12">
						<div class="content-panel">
							<table class="table table-striped table-advance table-hover">
								<h4><i class="fa fa-angle-right"></i>&nbsp;Profile </h4>
								<hr>
								
								
								<div class="container">
									
									<div class="row">
										<div class="col-sm-12">
											<?php $row=mysqli_fetch_array($res); ?>
											
											<p>Name:&nbsp;&nbsp;<?php echo $row['prf_fst_name']." ".$row['prf_lst_name'];  ?></p>
											<p>Mobile Number:&nbsp;&nbsp;<?php echo $row['prf_mob_num']; ?></p>
											<p>Address:&nbsp;&nbsp;<?php echo $row['prf_add'];  ?></p>
											<p>Grade:&nbsp;&nbsp;<?php echo $row['prf_grade']; ?></p>  
											<p>Genre:&nbsp;&nbsp;<?php echo $row['prf_genre']; ?></p> 
											<p>Honourium:&nbsp;&nbsp;<?php echo $row['prf_honour']; ?></p>     
											<p>Username:&nbsp;&nbsp;<?php echo $row['prf_un']; ?></p> 
											<p>Password:&nbsp;&nbsp;<?php echo $row['prf_pass']; ?></p> 
											
											
										</div>  
									</div>
								</div>
								
								
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
	
	<?php   
		exit();
	}
	
	
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Search Profile</title>
		
		<?php include "inc/head.php";?>
		
		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="typeahead.js"></script>
	</head>
	
	
	<style>
		.typeahead { border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgb(242, 242, 242);color: #FFF;}
		.tt-menu { width:300px; }
		ul.typeahead{margin:0px;padding:10px 0px;}
		ul.typeahead.dropdown-menu li a {padding: 10px !important;	border-bottom:#CCC 1px solid;color:#FFF;}
		ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
		.bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
		.demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#FFF;}
		.dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
		text-decoration: none;
		background-color: #1f3f41;
		outline: 0;
		}
	</style>
	
	<body>
		<div class="container"  style="margin-top:40px;">
			
			<h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="prf_src.php">Search Profile</a> </h5>
			
			
			<div class="container">
				<div class="row">		
					<div class="col-md-12">
						<br />
						<br />
						<br />
						<br />
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6 col-md-offset-3"> 
									<div class="form-group">
										<label for="exampleInputEmail1">Mobile Number </label> 
										<input type="text" name="txtCountry" autocomplete="off" id="txtCountry" class="typeahead"/>
										<input type="submit" name="src" class="btn btn-primary" />
									</div> 
								</div>
								
							</div>
							
						</form>
						
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
	
	
	<script>
		$(document).ready(function () {
			$('#txtCountry').typeahead({
				source: function (query, result) {
					$.ajax({
						url: "server.php",
						data: 'query=' + query,            
						dataType: "json",
						type: "POST",
						success: function (data) {
							result($.map(data, function (item) {
								return item;
							}));
						}
					});
				}
			});
		});
	</script>
	
	
	
</html>