<div class="our_department_area" id="our_department_area">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section_title text-center mb-55">
						<h3>Our Departments</h3>
						<p>The Departments of MGU is well known for preparing the students for real world challenges.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					foreach($program_list as $key =>$value){
						echo '
							<div class="col-xl-3 col-md-6 col-lg-4">
								<div class="single_department">
									<div class="department_thumb">
										<img src="'.base_url().'assets/images/programs/programs-category/'.$value->img.'" alt>
									</div>
									<div class="department_content">
										<h3><a href="'.base_url().'programs/program-details/'.$value->id.'">'.$value->category.'</a></h3>
									</div>
								</div>
							</div>
						';
					}
				?>
			</div>
		</div>
	</div>