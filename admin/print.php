<?php
include "inc/config.php";
include("checklogin.php");
check_login();/*

		$_SESSION['rt']=$row1['schedule_prf_recording_time'];
		$_SESSION['tt']=$row1['schedule_prf_telecst_time'];
		$_SESSION['h']=$row1['schedule_hon'];
		$_SESSION['d']=$row1['schedule_prf_prg_duration'];
		$_SESSION['n']=$row2['prf_fst_name']." ".$row2['prf_lst_name'];
		$_SESSION['add']=$row2['prf_add'];
	*/

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Print Copy</title>

        <?php include "inc/head.php";?>
    </head>

    <body style="background-color:white;">

        <div class="container" style="margin-top:40px;">
            <div class="row"><div class="col-sm-4">User copy</div><div class="col-sm-4" style="text-align:center;"><img src="images/logo.jpg" height="40px; width="40px;> </div><div class="col-sm-4" style="text-align:right;">
                <p></p>

                <button onclick="myFunction()">Print The Page</button>

                <script>
                    function myFunction() {
                        window.print();
                    }
                </script>
                </div></div>
            <div class="row"><div class="col-sm-4"></div><div class="col-sm-4" style="text-align:center;"><h4>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার<br>&nbsp;&nbsp;
                বাংলাদেশ বেতার, সিলেট<br>&nbsp;&nbsp;
                সঙ্গীত বিভাগ</h4>
                </div><div class="col-sm-4"></div></div><br><br>
            <div class="row"><div class="col-sm-12"><p>
                মহোদয়/মহোদয়া,<br><br>
                আমারা আপনার কাছে নিম্নলিখিত অনুষ্ঠান প্রচার এবং সম্পাদনের জন্য প্রস্তাব রাখছি:<br><br>
                অনুষ্ঠানের আনুমানিক স্থিতিকাল :&nbsp;&nbsp;<?php echo $_SESSION['d']; ?> min<br><br>
                অনুষ্ঠান :&nbsp;&nbsp;সংগীত<br><br>
                মহড়ার তারিখ :&nbsp;&nbsp;<?php echo $_SESSION['rt']; ?><br><br>
                সম্মানী :&nbsp;&nbsp;<?php echo $_SESSION['h']; ?><br><br><br>


                উপরোক্ত প্রস্তাব নিম্নে বর্ণিত শর্তালী পরিপূরণে আপনার সম্মতির উপর নির্ভরশীল:-<br><br>
                ১। আপনার সম্মতি স্বাক্ষরসহ অন্যান্য প্রয়োজনীয় বিষয় ................ তারিখের মধ্যে আমাদের হস্তগত হতে হবে।<br><br>
                2। যদি এবং মহড়ার প্রয়োজন হয়, আপনাকে মহড়ায় উপস্থিত থাকতে হবে।<br><br>
                ৩। চূড়ান্ত অুমোদনের জন্য সংযুক্ত অনুষ্ঠানলিপি যথাযথভাবে পূরণ করে (আপনার প্রস্তাবিত সংগীত, কথা এবং উপকরণের মুদ্রিত অথবা হাতে লেখা অনুলিপিসহ) আঞ্চলিক পরিচালক, বাংলাদেশ বেতার, ঢাকা- এর কাছে পাঠাতে হবে। শর্তাবলীর ১৮নং বিধির আওতাধীন কোন অবস্থার পরিপ্রেক্ষিতে উল্লেখিত অনুষ্ঠান বাতিলের প্রয়োজন অনুভূত হলে শিল্পীকে প্রস্তাবিত সম্মানী বাতিলকৃত চুক্তিপত্রের ব্যাপারে আপনার সকল দাবী মোচনে বা প্রদান করা হবে/প্রদান করা হবে কিনা অথবা যথাশীঘ্র সম্ভব আপনাকে একটি বিকল্প চুক্তিপত্র দেয়া হবে কিনা তা নির্ধারণের পূর্ণ কর্তৃত্ব বাংলাদেশ বেতারের থাকবে।<br><br><br>

                নাম :&nbsp;&nbsp;<?php echo $_SESSION['n']; ?><br><br>
                ঠিকানা :&nbsp;&nbsp;<?php echo $_SESSION['add']; ?><br><br><br>

                </div> 		

            </div>

            <div style="margin-top:10px;"></div>   <div class="row">
            <div class="col-sm-4"></div><div class="col-sm-4"></div><div class="col-sm-4" style="text-align:right;">

            আপনার বিশ্বস্ত<br><br>
            <!--    code admin sign-->
            <?php 
            $imagequery = $conn->query("SELECT * FROM `admin_signature`");
            $adminSign = $imagequery->fetch_array();
            //$adminSign['admin_signature_sig'];


            ?>

            <img src="<?php echo "http://".$_SERVER['SERVER_NAME']."/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/uploads/".$adminSign['admin_signature_sig']; ?>" alt="" />

            <br><br>
            (দস্তগত)<br><br>
            আঞ্চলিক পরিচালক,<br>
            বাংলাদেশের রাষ্ট্রপতির পক্ষে <br><br><br><div class="col-sm-4"></div>
            </div> 


            </div><br><br>
            <hr><br><br>
            <div class="row"><div class="col-sm-4" style="text-align:left;"><p>আঞ্চলিক পরিচালক<br><br>
                বাংলাদেশ বেতার, ঢাকা।
                </p></div><div class="col-sm-4"></div><div class="col-sm-4">Office copy</div></div>  
            <br><br><br>
            <div class="row"><div class="col-sm-12" ><p>

                জনাব,<br><br>
                আপনার ............................. তারিখে লিখিত পত্রের উত্তরে আপনার অবগতির জন্য জানাচ্ছি যে, আপনার প্রস্তাবের সকল শর্ত আমি সযত্নে পাঠ করে নিম্নলিখিত চুক্তি গ্রহণে আমার সম্মতি প্রদান করছি।<br><br>
                তারিখ: ........ সময়.......... 
                স্থান : বাংলাদেশ বেতার, সিলেট।<br><br>
                অনুষ্ঠানের আনুমানিক স্থিতিকাল&nbsp;&nbsp;<?php echo $_SESSION['d']; ?><br><br>
                অনুষ্ঠান :&nbsp;&nbsp;সঙ্গীত<br><br>
                মহড়ার তারিখ: &nbsp;&nbsp;<?php echo $_SESSION['rt']; ?><br><br>
                সম্মানী&nbsp;&nbsp;<?php echo $_SESSION['h']; ?>
                <br><br>
                অসুস্থতা বা আপনার গ্রহণযোগ্য কোন অনিবার্য কারণ ব্যতীত আমি সকল মহড়াসহ অনুষ্ঠান সম্পাদনে আমার সম্মতি জ্ঞাপন করছি।
                <br><br>
                আপনার পত্রে উল্লেখিত শর্তাবলী পূরণের অঙ্গীকারও এই সঙ্গে প্রদত্ত হলো।
                </p><br><br><br><br>
                <p style="text-align:right;">আপনার বিশ্বস্ত<br><br>

                    <?php echo $_SESSION['n']; ?>
                    <br>দস্তগত- শিল্পীর<br><br>
                    তারিখ: ..........
                </p>    

                </div></div>  
            <br><br><br><br><br><br><br><br><br><br>

        </div>
    </body>
</html>



