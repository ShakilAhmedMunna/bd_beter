<?php
include "inc/config.php";
include "checklogin.php";
check_login();
$id=$_SESSION['id'];
?>
<?php
$res=mysqli_query($conn,"SELECT prf_recording_time, prf_telecast_time,prf_duration_time FROM `prf_artist` WHERE id='$id'  and prf_prg_stat_agree_can='0';");
$re_time=mysqli_fetch_array($res);

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Cancel</title>
    <?php include "inc/head.php";?>

</head>
<body>
<div class="well">
    <div style="height:30px"></div>
    <div class="row"><div class="col-sm-4">&nbsp;</div>
        

        <div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br><h4>Cancel</h4> <br><p>*Invited from Bangladesh Betar's programme are show's here which if you are  press<strong> Cancel</strong></p></div><div class="col-sm-4">&nbsp;</div></div>
     <div class="row"><div class="col-sm-12" >
		  <br><br>
         <?php  if(!($re_time['prf_recording_time']=="")){ ?>
	    <table class="table">
            
            
         <tr><th>Sl. No</th><th>Reording Time</th><th>Telecast Time</th><th>Duration</th>
         </tr>
         <?php
            $res=mysqli_query($conn,"SELECT prf_recording_time, prf_telecast_time,prf_duration_time FROM `prf_artist` WHERE id='$id' and prf_prg_stat_agree_can= '0' ;"); $id=1;while($row=mysqli_fetch_array($res)){?>
            <tr><td><?php echo $id++; ?></td><td><?php echo $row['prf_recording_time'];?></td><td><?php echo $row['prf_telecast_time'];?></td><td><?php echo $row['prf_duration_time'];?></td></tr> <?php   }   ?>
        </table>
         <?php }else {
    echo   "<strong>"."You has no Agreement"."</strong>";?>
    
         <div style="height:240px"></div>
    
<?php    
}?>
         </div>
         
    </div>
    <div style="height:240px"><h4>Back to &nbsp;<a href="art_dash.php">Dashboard</a></h4><br><br><br><br></div>
    <!--    footer-->
    <div class="row" style="height:100px;margin-top:90px; text-align:center;">
        <?php include "inc/footer.php";?>
                
    </div>
</div>
    
</body>
</html>
				