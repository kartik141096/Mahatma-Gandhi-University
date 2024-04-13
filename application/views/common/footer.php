	<footer class="footer">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-md-6 col-lg-4">
						<div class="footer_widget">
							<div class="footer_logo">
								<a href="<?=base_url()?>">
									<img src="<?=base_url('assets/images/logo/logo-mgu-footer.png')?>" alt>
								</a><br><br>
                                <strong>Khanapara Campus</strong>
							</div>
							<p>Welcome to Mahatma Gandhi University, Meghalaya - a unique institute of professional learning and academic excellence that focuses on creating a distinction between "Literacy" & "Education".</p>
							<div class="socail_links">
								<ul>
									<li>
										<a href="https://www.facebook.com/MahatmaGandhiUniversity" target="_blank">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
                                    <li>
                                        <a href="https://www.instagram.com/mahatmagandhiuniversity/" target="_blank">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
									<li>
										<a href="https://twitter.com/MGU_Official" target="_blank">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="https://www.linkedin.com/school/mguniversity" target="_blank">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">Quick Links</h3>
							<ul>
								<li><a href="<?=base_url('about/the-university')?>">About University</a></li>
								<li><a href="<?=base_url('#notice')?>">News & Notices</a></li>
								<li><a href="<?=base_url('about/mission-and-vision')?>">Mission & Vission</a></li>
								<li><a href="<?=base_url('academics/faculties')?>">Faculties</a></li>
								<li><a href="<?=base_url('about/blogs')?>">Blogs</a></li>
								<li><a href="<?=base_url('about/governance')?>">Governance</a></li>
								<li><a href="<?=base_url()?>">Jobs @ MGU</a></li>
								<li><a href="https://result.mgu.edu.in/">Results</a></li>
								<li><a href="https://apply.mgu.edu.in/">Apply Now</a></li>
								<li><a href="https://convocation.mgu.edu.in/">Convocation</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-6 col-lg-2">
						<div class="footer_widget">
							<h3 class="footer_title">Departments</h3>
							<ul>
								<li><a href="<?=base_url('programs/program-details/1')?>">Commerce</a></li>
								<li><a href="<?=base_url('programs/program-details/2')?>">Health & Science</a></li>
								<li><a href="<?=base_url('programs/program-details/3')?>">Humanities</a></li>
								<li><a href="<?=base_url('programs/program-details/4')?>"> Law</a></li>
								<li><a href="<?=base_url('programs/program-details/5')?>"> Management</a></li>
								<li><a href="<?=base_url('programs/program-details/6')?>"> Ph.D (Research)</a></li>
								<li><a href="<?=base_url('programs/program-details/7')?>"> Pharmacy</a></li>
								<li><a href="<?=base_url('programs/program-details/8')?>"> Science & Tech</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-lg-3">
						<div class="footer_widget">
							<h3 class="footer_title">Address</h3>
							<p>
                                13th Mile,G.S. Road, Khanapara Under Dist-Ri-Bhoi, Meghalaya - 793101
							</p>
						</div>
						<div class="footer_widget"><br><br><br>
							<h3 class="footer_title">Contact</h3>
							<p>
                                <i class="ti-tablet"></i> <a href="tel:+918800398794">+91-8800398794</a><br><br>
								<i class="ti-email"></i> <a href="mailto:info@mgu.edu.in" >info@mgu.edu.in</a>
							</p>
						</div>
                        
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right_text">
			<div class="container">
				<div class="footer_border"></div>
				<div class="row">
					<div class="col-xl-12">
						<p class="copy_right text-center">
							Copyright &copy; 2024 | Mahatma Gandhi University (M.G.U.) | All rights reserved
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>




	<div class="njs-sticky-side body-append image_button_cover njs-sticky-1 placement-right now-show">
		<a href="#enquiry_form" class="popup-with-form">Admission 2024-25</a>
	</div>
	<div class="njs-sticky-side body-append image_button_cover njs-sticky-2 placement-right now-show">
		<a href="https://admission.mgu.edu.in/" target="_blank">Application Form</a>
	</div>



    <form method="POST" action="<?=base_url('website-enquiry')?>" id="enquiry_form" class="white-popup-block mfp-hide">
		<div class="popup_box ">
			<div class="popup_inner">
				<h2>Mahatma Gandhi University</h2>
				<h3>Admission 2024-25</h3>
				<form action="#">
					<div class="row">

						<div class="col-xl-6">
							<input type="text" name="name" id="name" placeholder="Name" required>
						</div>
						<div class="col-xl-6">
							<select class="form-select wide" name="department" id="default-select"  required="true">
								<option disabled selected data-display="Select Department">Department</option>
								<?php
									foreach($program_list as $key=>$value){

										echo '<option value="'.$value->category.'">'.$value->category.'</option>';
									}	
								?>
							</select>
						</div>
						
						<div class="col-xl-6">
							<input type="email" name="email" placeholder="Email ID" required>
						</div>
						<div class="col-xl-6">
							<input type="text" name="phone" placeholder="Phone no." required>
						</div>
						<div class="col-xl-12">
							<textarea name="message" placeholder="Message (If any)"></textarea>
						</div>
						<div class="g-recaptcha" data-sitekey="6LdISK0pAAAAAON2pmq-87OG6ZbhU4MbTgj1jTZq" data-callback="verifyCallback1"></div>
						<div class="col-xl-12">
							<button class="boxed-btn3" onclick=submitForm()>Confirm</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</form>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="<?=base_url('assets/')?>js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="<?=base_url('assets/')?>js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?=base_url('assets/')?>js/popper.min.js"></script>
	<script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
	<script src="<?=base_url('assets/')?>js/owl.carousel.min.js"></script>
	<script src="<?=base_url('assets/')?>js/isotope.pkgd.min.js"></script>
	<script src="<?=base_url('assets/')?>js/ajax-form.js"></script>
	<script src="<?=base_url('assets/')?>js/waypoints.min.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.counterup.min.js"></script>
	<script src="<?=base_url('assets/')?>js/imagesloaded.pkgd.min.js"></script>
	<script src="<?=base_url('assets/')?>js/scrollIt.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.scrollUp.min.js"></script>
	<script src="<?=base_url('assets/')?>js/wow.min.js"></script>
	<script src="<?=base_url('assets/')?>js/nice-select.min.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.slicknav.min.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url('assets/')?>js/plugins.js"></script>
	<script src="<?=base_url('assets/')?>js/gijgo.min.js"></script>
	<script src="<?=base_url('assets/')?>js/contact.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.form.js"></script>
	<script src="<?=base_url('assets/')?>js/jquery.validate.min.js"></script>
	<script src="<?=base_url('assets/')?>js/mail-script.js"></script>
	<script src="<?=base_url('assets/')?>js/main.js"></script>


	<script>
		let verified1 = false;
		let verified2 = false;

		function verifyCallback1(response) {
			verified1 = true;
		}

		function verifyCallback2(response) {
			verified2 = true;
		}

		function submitForm(form) {
			console.log(verified1);
			if (verified1 || verified2) {
				document.getElementById(form).submit();
			} else {
				alert("Please complete the reCAPTCHA.");
				event.preventDefault();
			}
		}
	</script>

	</body>

</html>