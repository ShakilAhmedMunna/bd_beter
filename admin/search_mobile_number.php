<?php 
	
	/*-------------------------------------*/
	/*  Database connection & Session check 
	/*-------------------------------------*/
	
	include "inc/config.php";
	include "checklogin.php";
	check_login();	
	
	
	
	
	
	
?>

<head>
    <title>Send Invitation</title>
    <?php include  "inc/head.php";?>	
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="typeahead.js"></script>
</head>


<style>
    .typeahead { border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgb(242, 242, 242);color: black;}
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

<div id="notification_sk" style=" text-align: center; background: #03A9F4; color: white; ">
	<?php  if(isset($_SESSION['Successfull'])){  echo $_SESSION['Successfull'];  unset($_SESSION['Successfull']); } ?>  
</div>

<div id="notification_sk" style=" text-align: center; background: red; color: white; ">
	<?php  if(isset($_SESSION['error'])){  echo $_SESSION['error'];  unset($_SESSION['error']); } ?>  
</div>

<div class="container">
	<div class="row">		
		<div class="col-md-12">
			<br />
			<br />
			<br />
			<br />
			<form action="invit_send.php" method="post">
				<div class="row">
					<div class="col-md-6 col-md-offset-3"> 
						<div class="form-group">
							<label for="exampleInputEmail1">Mobile Number </label> 
							<input type="text" name="txtCountry" autocomplete="off" id="txtCountry" class="typeahead"/>
							<input type="submit" name="sendNumber" class="btn btn-primary" />
						</div> 
					</div>
					
				</div>
				
			</form>
			
		</div>		
	</div>
</div>

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
