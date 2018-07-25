


<section id="local_dir">
	<section class="about-team ptb-60 fix">
		
		<div class="container">
			<div class="section-title text-center text-white">
				<h2 class="page-scroll btn btn-default btn-xl sr-button text-uppercase">আঞ্চলিক পরিচালকের পরিচিতি</h2>
				
			</div>
			<div class="row">
				<br><br>
				<?php 	
					include "inc/config.php";   
					
					$selectQuery="SELECT * FROM `local_director` ORDER BY `local_director`.`id` DESC";
					$result_data=$conn->query($selectQuery);
					
					if($result_data->num_rows>0)
					{
						while ($row=$result_data->fetch_assoc()) {
							
							
						?>
						
						<div class="col-md-5 col-md-offset-5">
							<div class="about-team">
								<img src="http://localhost/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/<?php echo $row['image']; ?>" style=" width: 250px; height: 250px; " alt="pic" class="img-circle">  
								<h3> <?php echo $row['name']; ?></h3>
								<h5> <?php echo $row['privious']; ?></h5>
								<h5> <?php echo $row['mobile']; ?></h5>
								<h5> <?php echo $row['email']; ?></h5>
								
								
								<!-- -->
								
								<?php	
									$currentDate = date("j F  Y", strtotime($row['entry_date'])); // date("l, F j, Y");
									 
									$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
									$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
									বুধবার','বৃহস্পতিবার','শুক্রবার' 
									);
									$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
									
								?>
								
								
								<!--
								-->
								
								
								
								<h4> <?php echo "$convertedDATE"; ?></h4>	
								
								<p>   <?php echo $row['decription']; ?> </p>
								
								<div class="bordr-bttm-team">
								</div>
								
								</div>
								</div>
								
								<?php
								}
					}
				?>			
				
			</div>
			
			
								
								<br><br> <hr class="primary">    
		</div>
	</section>
</section>			