<div class="bradcam_area breadcam_bg bradcam_overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Program Details</h3>
                    <p><a href="<?=base_url()?>">Home /</a> Program Details</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- $program_details['program_id'] -->
<?php

foreach($program_list AS $program){
	if($program->id == $program_id){
		$program_name = $program->category;
	}
}

?>
<div class="our_department_area">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section_title text-center mb-55">
						<h3><?=$program_name?> Course List</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
				// echo '<pre>'; print_r($program_details);die;
					foreach($program_details as $key =>$value){
						echo '
							<div class="col-xl-3 col-md-6 col-lg-4">
								<div class="single_department">
									<div class="department_thumb">
										<img src="'.base_url().'assets/images/programs/Courses/'.rand(21,67).'.webp'.'" alt>
									</div>
									<div class="department_content">
										<h3><a href="'.base_url().'programs/course-details/'.$value->id.'">'.$value->name.'</a></h3>
									</div>
								</div>
							</div>
						';
					}
				?>
			</div>
		</div>
	</div>

