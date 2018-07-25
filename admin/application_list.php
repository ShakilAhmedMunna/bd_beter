<?php
include "inc/config.php";
include "checklogin.php";
check_login();
$query="SELECT * FROM `prf_admin`";
$result=mysqli_query($conn,$query);




?>








<!DOCTYPE html>
<html>
    <head>
        <title>   </title>
        <?php include  "inc/head.php";?>

    </head>
    <body>
        <div class="well">
            <div style="height:20px"></div>
            <div class="row"><div class="col-sm-4">&nbsp;</div>


                <div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br>  </div><div class="col-sm-4">&nbsp;</div></div>
                <h5>
					<a href="dashboard.php">Dashboard</a>
					&nbsp;&nbsp;
				 
					 
				</h5>


            <div id="notification_sk" style=" text-align: center; background: #03A9F4; color: white; ">
                <?php  if(isset($_SESSION['Successfull'])){  echo $_SESSION['Successfull'];  unset($_SESSION['Successfull']); } ?>  
            </div>

            <div class="container">


                <br />
                <br />


                <div class="row">
                    <br><br>
                    <?php 	


                    $selectQuery="SELECT * FROM `application` ORDER BY `application`.`id` DESC";
                    $result_data=$conn->query($selectQuery);

                    if($result_data->num_rows>0)
                    {
                        while ($row=$result_data->fetch_assoc()) {


                    ?>

                    <div class="col-sm-12">
                        <div class="about-team">

                            <table class="table"  style="width:100%;"> 
                                <thead>
                                    <tr>
                                        <th style="width:10%;">Name</th>
                                        <th style="width:10%;">Father Name</th>                                    
                                        <th style="width:10%;">Age</th>
                                        <th style="width:10%;">Occupation</th>
                                        <th style="width:10%;">Address</th>
                                        <th style="width:10%;">Present Address</th>
                                        <th style="width:10%;">National id</th>
                                        <th style="width:10%;">Note</th>
                                        <th style="width:10%;">Action</th>
                                    </tr>
                                </thead>

                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['fatherName']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['occupation']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['presentAddress']; ?></td>
                                    <td><?php echo $row['Nid']; ?></td>
                                    <td><?php echo $row['note']; ?></td>
                                    <td>
                                        <a href="application_list_delet.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>                        
                                    </td>
                                </tr>


                            </table>








                            <br />




                        </div>
                    </div>

                    <?php
                        }
                    }
                    ?>			

                </div>




            </div>

            <div style="height:140px"></div>
            <!--    footer-->
            <div class="row" style="height:100px;margin-top:90px; text-align:center;">
                <?php include "inc/footer.php";?>

            </div>
        </div>

    </body>
</html>
