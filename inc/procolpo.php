 <section id="procolpo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-scroll btn btn-default btn-xl sr-button"> ছবি </h1>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
           <div class="row">
					<br><br>
					<?php 	
						
						
						$selectQuery="SELECT * FROM `gellary` ORDER BY `gellary`.`id` DESC";
						$result_data=$conn->query($selectQuery);
						
						if($result_data->num_rows>0)
						{
							while ($row=$result_data->fetch_assoc()) {
								
								
							?>
							
							<div class="col-sm-3">
								<div class="about-team">
									<img src="http://localhost/admin_panel/Bd_Betar_up/betaversion_bdbetar/admin/uploads/<?php echo $row['image']; ?>" style=" width: 100px; height: 100px; " alt="pic" class="img-circle">  
									
									<h3> <?php echo $row['title']; ?></h3>  
									 
								</div>
							</div>
							
							<?php
							}
						}
					?>			
					
				</div>
        </div>
    </section>