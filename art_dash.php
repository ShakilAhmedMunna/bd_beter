<?php
include "inc/config.php";
include "checklogin.php";
check_login();
$id=$_SESSION['id']; //artist prf code
?>

<!DOCTYPE html>
<html>
<head>
    <title>Artist Dashboard</title>
    <?php
    include "inc/head.php";
    ?>
</head>
<body>
    <div class="container">
       <div class="row" style="height:20px; margin-left:10px;">

<!--    header-->
           <div style="height:40px;"></div>

        <div class="col-sm-10">
<!--    say good morning-->
                <h4>
                <?php include "inc/good_morning.php";?>&nbsp;&nbsp;
                বাংলাদেশ বেতার,সিলেট &nbsp; (Artist Dashboard)</h4>
        </div>
        <div class="col-sm-2">
                <div class="btn-group" style="padding-top:14px;">
                   <a href="logout.php"  style="color:white;" type="button" class="btn btn-primary">Sign Out</a>
                </div>
        </div>
    </div>
    <div style="height:120px;"></div>
    <div class="row" style=" height:200px;margin-left:10px;">
<!--   for menu-->
        <div class="col-sm-2"><?php include "inc/art_menu.php";?></div><div class="col-sm-10">&nbsp;</div>
    </div>
    <div style="height:220px;"></div>   
    
<!--   footer-->
    
    <div class="row" style="height:100px;margin-top:90px; text-align:center;">
        <?php include "inc/footer.php";?>
                
    </div>
<!--   End footer-->

    </div>
    
</body>
</html>
