<?php
include "inc/config.php";
include "checklogin.php";
check_login();
$sql="SELECT * FROM `admin_signature` where id=1";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
 

<?php 

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="UPDATE `admin_signature` SET `admin_signature_sig`='$final_file' WHERE id=1";
  mysqli_query($conn,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='sig.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='sig.php?fail';
        </script>
  <?php
 }
}
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Signature</title>
    <?php include  "inc/head.php";?>

</head>
<body>
<div class="well">
    <div style="height:20px"></div>
    <div class="row"><div class="col-sm-4">&nbsp;</div>
        

        <div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br><h4>Upload Signature</h4> </div><div class="col-sm-4">&nbsp;</div></div>
    
    <div style="height:100px"></div>
 
     <div class="container" style="height:200px;"> 
         <h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i><a href="sig.php"> &nbsp;&nbsp;Upload Signature</a></h5><br><br>
     <form action="" method="post" enctype="multipart/form-data">
        <p>
            Signature (upload):</p>&nbsp;&nbsp;<input type="file" name="file" />   <br>
        <button type="submit" name="btn-upload">upload</button> 
</form> 
         <br><br>
        <?php echo $row['admin_signature_sig']; ?> 
         </div>
    
    <div style="height:240px"></div>
    <!--    footer-->
    <div class="row" style="height:100px;margin-top:90px; text-align:center;">
        <?php include "inc/footer.php";?>
                
    </div>
</div>
    
</body>
</html>
				