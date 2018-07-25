<?php
include "inc/config.php";
//for unauthorize url
include("checklogin.php");
check_login();
?>

<!DOCTYPE html>
<html>
  <head>
     
      <title>Admin Dashboard</title>
      <?php include "inc/head.php";?>
      
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
<!--            for menu-->
              
              <?php include "inc/menu.php";?>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper"><br><br>
          	 <div id="datepicker"></div>
		</section>
      </section
  ></section>
<!--      for drp down menu n menu item-->
      <?php include "inc/js.php";?>
<!--      strat datepicker-->
      
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<!--      End datepicker-->      

  </body>
</html>
