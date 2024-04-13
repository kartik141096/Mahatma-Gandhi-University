<div class="bradcam_area breadcam_bg bradcam_overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Course Details</h3>
                    <p><a href="<?=base_url()?>">Home /</a> Course Details</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our_department_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3>Course Details</h3>
                </div>
            </div>
        </div>
        <div>
            <h3><strong>Course Name :- </strong><span><?=$program_details[0]->name?></span></h3><br>
            <h3><strong>Course Duration :- </strong><span><?=$program_details[0]->duration?> Years</span></h3><br>
            <h3><strong>Eligibility criteria :- </strong><span><?=$program_details[0]->eligibility?></span></h3><br>
            <h3><strong>Objective :- </strong></h3><p style="padding-left:50px"><?=str_replace("•","<br>•",$program_details[0]->objective)?></p>
            <h3><strong>Learnings :- </strong></h3><p style="padding-left:50px"><?=str_replace("•","<br>•",$program_details[0]->learning)?></p>
        </div>
    </div>
</div>