<?php
include "inc/config.php";
include "checklogin.php";
check_login();
$id=(int)$_SESSION['id']; //artist prf code

?>
<?php
$res=mysqli_query($conn,"SELECT * FROM `prf_artist` WHERE prf_code ='$id';");
$res=mysqli_fetch_array($res);
?>

<?php

if(isset($_REQUEST['update'])){
    
       
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 move_uploaded_file($file_loc,$folder.$file);

    
    
    $msg="";
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mob=$_POST['m'];
	$add=$_POST['add'];
	$un=$_POST['un'];
    $pass=$_POST['pass'];
    
    //Update
    $res=mysqli_query($conn,"UPDATE `db_betar`.`prf_artist` SET `prf_fst_name` = '$fname',
    `prf_lst_name` = '$lname',
    `prf_mob_num` = '$mob',
    `prf_add` = '$add',
    `prf_un` = '$un',
    `prf_pass` = '$pass',sig_file='$file',sig_type='$file_type',sig_size='$file_size' WHERE `prf_artist`.prf_code =$id;");
    
    if($res){
    $msg="Successfully Updated";
    }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
    <?php include "inc/head.php";?>

</head>
<body>
<div class="well">
    <div style="height:30px"></div>
    <div class="row"><div class="col-sm-4">&nbsp;</div>
        

        <div class="col-sm-4" style="text-align:center;"><h4>অভিনন্ধন &nbsp;বাংলাদেশ বেতার,সিলেট</h4><br><h4>Edit Profile</h4> </div><div class="col-sm-4">&nbsp;</div></div>
     <div class="row"><div class="col-sm-2">&nbsp;</div><div class="col-sm-8" >
		  <br><br>
         
<h5><a href="art_dash.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="edit_prf.php">Edit Profile</a> </h5>
	    <form action="" method="post" enctype="multipart/form-data">
        <?php if(isset($msg)) echo $msg; ?>
								<p>First Name: </p>
								<input type="text" name="fname" style="width:280px; height:30px;" value="<?php echo $res['prf_fst_name'];?>"><br><br>
								<p>Last Name: </p>
								<input type="text" name="lname"    style="width:280px; height:30px;" value="<?php echo $res['prf_lst_name'];?>" ><br><br>
								<p>Mobile Number: </p>
								<input type="number"  name="m" style="width:280px; height:30px;" value="<?php echo $res['prf_mob_num'];?>"><br><br>
                                
                                <p>Address: </p>
								<input type="text" name="add" style="width:350px; height:40px;" value="<?php echo $res['prf_add'];?>"><br><br>
                                <p>Username: </p>
								<input type="text"name="un" style="width:280px; height:30px;" value="<?php echo $res['prf_un'];?>"><br><br>
								<p>Password:</p>
								<input type="text" name="pass"  style="width:280px; height:30px;" value="<?php echo $res['prf_pass'];?>"><br><br>
                                <p>Signature:</p>
								
                                 <input type="file" name="file"/ required> *upload scan file of signature  <br><br> 
            
            
            
            
            
            
            
            
            
										 
								
									<input type="reset" value="Reset">
									<input type="submit" name="update"  value="Update" >
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
				