



<section id="application">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="page-scroll btn btn-default btn-xl sr-button">সঙ্গীত বিভাগের আবেদন পত্র   </h1>
				<hr class="primary">
			</div>
		</div>
	</div>
	<div class="container">
		 
	<?php 
				
				if(isset($_SESSION['success'])){ 
				 	
				?>
				<div class="row" style="width:100%;"> 
					<div class="col-md-5"> 
						<div class="alert alert-success">
							<strong><?php  echo $_SESSION['success']; ?></strong>  
						</div>
					</div>
					
				</div>			
				
				
				<?php 
					
					
					unset($_SESSION['success']);
				}
				
			?>
		
		<div class="row">
			<div class="col-md-12">
				<form action="applicationApply.php" method="POST" >
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">  নাম  </label>
								<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="নাম" required ">
							</div>
						</div>  
						
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1"> পিতার/স্বামীর নাম  </label>
								<input type="text" class="form-control" name="fatherName" id="exampleInputEmail1" placeholder="পিতার/স্বামীর নাম" required  >
							</div>
						</div> 
						
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">বয়স (আবেদনের তারিখে)  </label>
							<input type="text" class="form-control" name="age" id="exampleInputEmail1" placeholder="বয়স (আবেদনের তারিখে)" required  >
							</div>
							</div>  
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1">  পেশা</label>
										<input type="text" class="form-control" name="occupation" id="exampleInputEmail1" placeholder="পেশা" required  >
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1"> স্থায়ী ঠিকানা </label>
										<input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder=" স্থায়ী ঠিকানা " required  >
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1"> বর্তমান ঠিকানা  </label>
										<input type="text" class="form-control" name="presentAddress" id="exampleInputEmail1" placeholder="বর্তমান ঠিকানা" required  >
									</div>
								</div>
							</div>
							<div class="row">						
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1">জাতীয় পরিচয় পত্রের নাম্বার </label>
										<input type="text" class="form-control" name="Nid" id="exampleInputEmail1" placeholder="জাতীয় পরিচয় পত্রের নাম্বার " required >
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleInputEmail1">  অংশগ্রহণে ইচ্ছুক সংগীত </label>
										
										<select name="select_name[]"  class="form-control" id="" multiple required >
											<option value="1">পল্লীগীতি</option>
											<option value="2">আঞ্চলিক গান</option>
											<option value="3">রবীন্দ্র সঙ্গীত</option>
											<option value="4">নজরুল সঙ্গীত</option>
											<option value="5">লোকগান</option>
											<option value="6">যন্ত্রসঙ্গীত</option>
											<option value="7">অন্যান্য </option>
										</select>
									</div>
								</div>
								
								
							</div>
							<div class="row">						
								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleInputEmail1"> কন্ঠস্বর পরীক্ষায় ইতিপূর্বে অংশগ্রহণ করে থাকলে এর বিবরণ </label>
										<textarea class="form-control" name="note" rows="3"></textarea>
									</div>
								</div>
								
								
							</div>
							
							
							<button type="submit" class="btn btn-primary" name="application" >Submit</button>
							<br />
				</form>
			</div>			
		</div> 
		<br />
		<div class="row">
			<div class="col-md-12"> 				    
				<a href="#introducing" class="page-scroll btn btn-default btn-xl sr-button" style="background:#f4d942;">   কর্মকর্তাদের পরিচিত! </a><br>
			</div> 
		</div>
	</div>
</section>	





