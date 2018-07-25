<?php
include "inc/config.php";
include("checklogin.php");
check_login();

    $sql="SELECT * FROM `prf_artist` WHERE `prf_status_active_dactive`=1";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
?>

<!DOCTYPE html>
<html>
  <head>
      <title>All Profile</title>
      
      <?php include "inc/head.php";?>
  </head>

  <body>
      <div class="container"  style="margin-top:40px;">

<h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="prf_all.php">All  Active Profile</a> </h5>
        
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Profile </h4>
                                 
	                  	  	  <hr>
                              
                             <?php if($num>0) {
                            ?>
                              <tr>
                                  <th>Sl. no.</th>
                                  <th >First Name</th>
                                  <th> Last Name</th>
                                  <th>Grade</th>
                                  <th>Honourium</th>
                                  <th>Genere</th>
                                  <th> Mobile Number</th>
                                  <th>Address</th>
                                  
                                  <th>Username</th>
                                  <th>Password</th>
                                  
                                  
                              </tr>
                        <?php
                         $id=1;
                         while($row=mysqli_fetch_array($res))  {
                                ?>
                                  <tr><td><?php echo $id++; ?></td><td><?php echo $row['prf_fst_name']; ?></td><td><?php echo $row['prf_lst_name']; ?></td><td><?php echo $row['prf_grade']; ?></td><td><?php echo $row['prf_honour']; ?></td><td><?php echo $row['prf_genre']; ?></td><td><?php echo $row['prf_mob_num']; ?></td><td><?php echo $row['prf_add']; ?></td><td><?php echo $row['prf_un']; ?></td><td><?php echo $row['prf_pass']; ?></td></tr>
                                  
                                  
                                  <?php
                                  
                                  
                            } }else{?>
                              <h5 style="text-align:center;">
                              <?php
                            echo "<strong>"."There has no data"."</strong>";
     
    
    
    
    
}
                                  
                                  
                                  
                                  ?>
                              </h5>
                              
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