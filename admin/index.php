<?php
include "inc/config.php";
include "inc/validation.php";
?>


<?php
if(isset($_REQUEST['login'])){
    
    
    $un=$_POST['un'];
    $psw=$_POST['pass'];
    $un=validation($un);
    $psw=validation($psw);
    
    $sql="SELECT `prf_admn_un`,`prf_admn_pass`FROM `prf_admin` WHERE prf_admn_un='$un' and prf_admn_pass='$psw';";
    $res=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($res)>0){
        
      $extra="dashboard.php";
      $_SESSION['login']=$un;
      $_SESSION['id']=$psw;
      echo "<script>window.location.href='".$extra."'</script>";
      exit();
        
        
        
        
    }
    else{
        
        $_SESSION['action1']="*Invalid username or password";
        $extra="index.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
    
}

?>


<!DOCTYPE html>
<html>
  <head>
      <title>Admin || login</title>
   <?php include "inc/head.php"; ?>
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container ">
      
	  	<div class="">
		      <form class="form-login " action="" method="post" >
		        <h2 class="form-login-heading">log in now</h2>
                  <p style="color:#F00; padding-top:20px;" align="center">
                      <!--                  if login_error-->
                      <?php if(isset($_SESSION['action1'])) echo $_SESSION['action1'];?></p>

                   
		        <div class="login-wrap">
		            <input type="text" name="un" class="form-control" placeholder="User Name" autofocus required>
		            <br>
		            <input type="password" name="pass" class="form-control" placeholder="Password" required><br>
		            <input  name="login" class="btn btn-theme btn-block" type="submit" value="Log In">
		         
		        </div>
		      </form>	  	
          </div>
	  	</div>
	  </div>
    


  </body>
</html>
