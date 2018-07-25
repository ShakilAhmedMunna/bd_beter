
<?php
include "inc/config.php";
include "checklogin.php";
check_login();
?>
<?php
if(isset($_POST['search'])){
    $frm=$_POST['f'];
    $to=$_POST['t'];
    $sql="select * from schedule_prf INNER JOIN  prf_artist ON schedule_prf.`schedule_prf_id` = prf_artist.`prf_code` where schedule_prf.schedule_recording_date between '$frm' AND '$to' and schedule_prf.schedule_agree_cancel=1";
    $res=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($res);
    //page start
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>

        <?php include "inc/head.php";?>
    </head>

    <body>
        <div class="container"  style="margin-top:40px;">

            <h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="schdle.php">&nbsp;&nbsp;Search Schedule</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i> <a href="#">&nbsp;&nbsp;Result</a> </h5>

            <div class="row">



                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Result </h4>

                            <hr>

                            <?php if($num>0){
                            ?>
                            <tr>
                                <th>নাম্বার</th>
                                <th>নাম</th>
                                <th>স্থিতিকাল</th>
                                <th>মহড়ার তারিখ</th>
                                <th>রেকর্ডিং তারিখ</th>
                                <th>রেকর্ডিং সময়</th>
                                <th> প্রচার তারিখ</th>
                                <th>প্রচার সময় </th>
                                <th> বিভাগ </th>



                            </tr>
                            <?php
        $id=1;
        while($row=mysqli_fetch_array($res))  {
                            ?>
                            <tr><td><?php echo $id++; ?></td><td><?php echo $row['prf_fst_name']." ".$row['prf_lst_name']; ?></td> <td><?php echo $row['schedule_prf_prg_duration']; ?>&nbsp;min</td>
                                <td><?php echo $row['schedule_mohora']; ?></td>
                                <td><?php echo $row['schedule_recording_date']; ?></td>
                                <td><?php echo $row['schedule_prf_recording_time']; ?></td>
                                <td><?php echo $row['schedule_telecast_date']; ?></td>
                                <td><?php echo $row['schedule_prf_telecst_time']; ?></td>
                                <td><?php echo $row['prf_genre']; ?></td>
                            </tr>


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











<?php
    //page end
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Schedule</title>
        <?php include  "inc/head.php";?>

    </head>
    <body>
        <div class="well">
            <div style="height:20px"></div>
            <div class="row"><div class="col-sm-4">&nbsp;</div>


                <div class="col-sm-4" style="text-align:center;"><h4>বাংলাদেশ বেতার,সিলেট</h4><br><h4>Search Schedule </h4> </div><div class="col-sm-4">&nbsp;</div></div>

            <div style="height:100px"></div>

            <div class="container" style="height:200px;"> 
                <h5><a href="dashboard.php">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i><a href="schdle.php"> &nbsp;&nbsp;Search Schedule</a></h5><br><br>
                <form action="" method="post">

                    <p>From:&nbsp; <input type="date" name="f" required>&nbsp;&nbsp; 
                        To: <input type="date" name="t" required></p>

                    <br>
                    <button type="submit" name="search">Search</button> 
                </form> 
            </div>

            <div style="height:240px"></div>
            <!--    footer-->
            <div class="row" style="height:100px;margin-top:90px; text-align:center;">
                <?php include "inc/footer.php";?>

            </div>
        </div>



    </body>
</html>
