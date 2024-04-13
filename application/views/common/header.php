<!doctype html>
<html class="no-js" lang="zxx">


	<head>

		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>MGU - <?= $page_title ?></title>
		<meta name="description" content>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/images/logo/favicon.png')?>">


		<link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/magnific-popup.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/themify-icons.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/nice-select.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/flaticon.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/gijgo.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/animate.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/slicknav.css">
		<link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">

		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PJ5K9D5');</script>

	</head>

	<body>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ5K9D5"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

	<header>
		<div class="header-area ">
			<div class="header-top_area">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-md-6 ">
							<div class="social_media_links">
								<a href="https://www.linkedin.com/school/mguniversity" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a href="https://www.facebook.com/MahatmaGandhiUniversity" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/mahatmagandhiuniversity/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://twitter.com/MGU_Official" target="_blank"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
						<div class="col-xl-6 col-md-6">
							<div class="short_contact_list">
								<ul>
									<li>
										<a href="mailto:info@mgu.edu.in"> 
											<i class="fa fa-envelope"></i> 
											<span>info@mgu.edu.in</span>
										</a>
									</li>
									<li>
										<a href="tel:+918800398794">
											<i class="fa fa-phone"></i> +91-8800398794
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sticky-header" class="main-header-area">
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-2">
						<div class="logo">
							<a href="<?=base_url()?>">
								<img src="<?=base_url('assets/images/logo/logo_new.jpg')?>" height="50" alt>
							</a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-7">
						<div class="main-menu  d-none d-lg-block">
							<nav>
								<ul id="navigation">
									<li><a <?php if($page=='home')echo 'class="active"';?> href="<?=base_url()?>">Home</a></li>
									<li><a href="#" <?php if($page=='about')echo 'class="active"';?>>About <i class="ti-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="<?=base_url('about/the-university')?>">The University</a></li>
											<li><a href="<?=base_url('about/mission-and-vision')?>">Mission & Vission</a></li>
											<li><a href="<?=base_url('about/governance')?>">Governance</a></li>
											<li><a href="<?=base_url('about/approval-and-recognition')?>">Approval Recognition</a></li>
											<li><a href="<?=base_url('about/press-release')?>">Press Release</a></li>
											<li><a href="<?=base_url('about/messages')?>">Message</a></li>
											<li><a href="<?=base_url('about/blogs')?>">Blogs</a></li>
											<li><a href="<?=base_url('about/events')?>">Events</a></li>
											<li><a href="https://www.mkgandhi.org/main.htm" target="_blank">Gandhi Gallary</a></li>
										</ul>
									</li>
									<li><a href="#">Programs <i class="ti-angle-down"></i></a>
										<ul class="submenu">
											<?php
												foreach($program_list as $key => $value){
													echo '<li><a href="'.base_url().'programs/program-details/'.$value->id.'">'.$value->category.'</a></li>';
												}
											?>
										</ul>
									</li>
									<li><a href="#">Students Zone <i class="ti-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="https://www.mgu.edu.in/studentpanel/" target="_blank">Student Login</a></li>
											<li><a href="<?=base_url('#notice')?>">Notice & Announcements</a></li>
											<li><a href="<?=base_url('assets/pdf/academic/academic calendar .pdf')?>" target="_blank">Academic Calender 2024-25</a></li>
											<li><a href="<?=base_url('assets/pdf/academic/holiday list.pdf')?>" target="_blank">Holiday Calender 2024-25</a></li>
											<li><a href="<?=base_url('assets/pdf/academic/MGU-BVOC-presentation.pdf')?>" target="_blank">Skill Development Program</a></li>
											<li><a href="https://convocation.mgu.edu.in/" target="_blank">Convocation Form</a></li>
											<li><a href="https://result.mgu.edu.in/" target="_blank">Online Results</a></li>
										</ul>
									</li>
									<li><a href="#" <?php if($page=='admission')echo 'class="active"';?>>Admissions <i class="ti-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="<?=base_url('admission/admission-guidelines')?>">Admission Guidelines</a></li>
											<li><a href="<?=base_url('admission/migration-criteria')?>">Migration Criteria</a></li>
											<li><a href="<?=base_url('admission/admission-procedure')?>">Admission Procedure</a></li>
											<li><a href="<?=base_url('assets/pdf/admission/fees structure.pdf')?>" target="_blank">Fee Structure</a></li>
											<li><a href="https://admission.mgu.edu.in/" target="_blank">Application Form</a></li>
											<li><a href="#enquiry_form" class="popup-with-form">Apply Online</a></li>
											<li><a href="<?=base_url('assets/pdf/Prospectus/MGU%20Prospectus%202023-2024.pdf')?>" target="_blank">Download Brochure</a></li>
											<li><a href="<?=base_url('admission/mgu-facilities')?>">MGU Facilities</a></li>
										</ul>
									</li>
									<li><a href="#"<?php if($page=='academics')echo 'class="active"';?>>Academics <i class="ti-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="<?=base_url('academics/departments')?>">Departments</a></li>
											<li><a href="<?=base_url('academics/faculties')?>">Faculties</a></li>
											<li><a href="<?=base_url('academics/research-development-innovation')?>">Research, Development & Innovation</a></li>
											<li><a href="<?=base_url('academics/placements')?>">Placements</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 d-none d-lg-block">
						<div class="Appointment">
							<div class="book_btn d-none d-lg-block">
								<a href="https://apply.mgu.edu.in/" target="_blank">Apply Now</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="mobile_menu d-block d-lg-none"></div>
					</div>
				</div>
			</div>
		</div>
	</header>



<div class="marquee">
  <div>
    <span><strong>Recognized by University Grant Commission (UGC), Bar Council of India (BCI), Pharmacy Council of India (PCI) and member of AIU.</strong></span>
  </div>
</div>



