<?php
include "inc/config.php";
?>

<?php
if(isset($_REQUEST['signin'])){
    //sign in
    
    $un=$_POST['un'];
    $pass=$_POST['pass'];
    
    $res=mysqli_query($conn,"SELECT * FROM `prf_artist` WHERE prf_un='$un' and prf_pass='$pass' and `prf_status_active_dactive`=1");
    if(mysqli_num_rows($res)>0){
      $row=mysqli_fetch_array($res); 
      $p_id=$row['prf_code'];
      $extra="art_dash.php";
      $_SESSION['login']=$un;
      $_SESSION['id']=$p_id;
      echo "<script>window.location.href='".$extra."'</script>";
      exit();
    }
    else{
        $_SESSION['action1']="*Invalid username or password";
        $extra="signin.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
    
}
?>








<!DOCTYPE html>
<html>
    <head>
        <?php include "inc/head.php"; ?>

    </head>

<body>

    <div class="container">
        <h5><a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i><a href="signin.php"> &nbsp;&nbsp;Sign In</a></h5>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                
                <div class="login-panel panel panel-default">
                    <br><br>
                    <div class="panel-heading">
                        
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                         
                        <form action="" role="form" method="post"><h4 style="text-align:center;">
                            <?php if(isset($_SESSION['action1'])) echo $_SESSION['action1']; session_unset();?></h4>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" type="text" autofocus required name="un" required pattern="[A-Za-z0-9]{0,8}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required    >
                                </div>
                               
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In" name="signin">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
