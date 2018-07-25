


<section id="introducing">
	<section class="about-team ptb-60 fix">
		
		<div class="container">
			<div class="section-title text-center text-white">
				<h2 class="page-scroll btn btn-default btn-xl sr-button text-uppercase">কর্মকর্তাদের পরিচিত</h2>
				
			</div>
			<div class="row">
				<br><br>
				<?php 	
				include "inc/config.php";   
				
					$selectQuery="SELECT * FROM `employe` ORDER BY `employe`.`serial` DESC";
					$result_data=$conn->query($selectQuery);
					
					if($result_data->num_rows>0)
					{
						while ($row=$result_data->fetch_assoc()) {
							
							
						?>
						 
						<div class="col-md-4">
							<div class="about-team">
								 <img src="http://localhost/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/uploads/<?php echo $row['image']; ?>" style=" width: 100px; height: 100px; " alt="pic" class="img-circle">  
								<h3> <?php echo $row['name']; ?></h3>
								 
								
								<h5> <?php 
									
										if($row['designation'] == 1){
											echo "উপ-আঞ্চলিক পরিচালক";
										}elseif ($row['designation'] == 2){
											echo "সহকারী পরিচালক";
										}									 
									
								?></h5>
								
								<h5> <span class="label label-info">Email</span> : <?php echo $row['']; ?></h5>
								<h5><span class="label label-info">Mobile</span>  : <?php echo $row['mobile']; ?></h5>
								
								 
								<div class="bordr-bttm-team">
								</div>
								 <br />
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