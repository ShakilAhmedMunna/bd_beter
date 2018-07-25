<?php
include "inc/config.php";
include "checklogin.php";
check_login();

$id = $_REQUEST['id'];
 
?>

<?php
//save artist info
if(isset($_REQUEST['save'])){
    
    
    $grd=$_POST['grd'];
    $gen=$_POST['gen'];
    $hnr=$_POST['hnr'];
    
    $sql="UPDATE `prf_artist` SET  `prf_grade`='$grd',`prf_genre`='$gen',`prf_status_active_dactive`=1,`prf_honour`='$hnr' WHERE `id`='$id'";
    $res=mysqli_query($conn,$sql);
    
    if($res){
        $_SESSION['msg']="Profile's are activated";
    }
    else{
        $_SESSION['msg']="Something was wrong";
        
    }
   // echo $_session['msg'];
Header( 'Location: prf_new.php' );  
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Artist Informatin</title>
    <?php include  "inc/head.php";?>

</head>
<body>
<div class="well">
    <div style="height:20px"></div>
    <div class="row"><div class="col-sm-4">&nbsp;</div>
        <div class="col-sm-4"> <h4>Add information about Artist</h4></div>
        <div class="col-sm-4">&nbsp;</div>
  </div> 
     <div class="row"><div class="col-sm-2">&nbsp;</div><div class="col-sm-8" >
		  <br>  
	    <form action="" method="post" class="form-inline">
        <?php if(isset($msg)) echo $msg."<br><br>"; ?>
            <div class="form-group">
                                <label for="grd">Grade:</label>
								<input type="text" name="grd"   class="form-control" id="grd" placeholder="Grade" required pattern="[A-Z]{1}" title=" A,B, Or C or It will be upper case"/> </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <div class="form-group">
                                <label for="g">Genre:</label>
								<input type="text" name="gen"   class="form-control" id="g" placeholder="Genre" required/> </div> <br><br>
             <div class="form-group">
                                <label for="h">Honourium:</label>
								<input type="text" name="hnr"   class="form-control" id="h" placeholder="Honourium" required pattern="[0-9]{1,}" title=" Ex: Honourium:20000"/> </div> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
			<br><br>				 
									<input type="reset" value="Reset" class="btn btn-default">
									<input  type="submit" class="btn btn-default" name="save"  value="Save" >
									<div class="clear"> </div>
								
							</form><br><br><br><br>
         
         </div><div class="col-sm-2">&nbsp;</div>
    </div>
    <div style="height:240px"></div>
    <!--    footer-->
    <div class="row" style="height:100px;margin-top:90px; text-align:center;">
        <?php include "inc/footer.php";?>
                
    </div>
</div>
    
</body>
</html>
				