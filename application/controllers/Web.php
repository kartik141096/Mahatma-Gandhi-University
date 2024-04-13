<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Web_model','model');
		$this->load->helper('security');
		$this->load->library('session');

	}

	
	// PAGE NOT FOUND 404==========================================================================================================
	public function custom_404()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='404';
		$header_data['page_title']= '404';

		$this->load->view('common/header',$header_data);
		$this->load->view('custom_404');
		$this->load->view('common/footer');
	}

	// HOME PAGE================================================================================
	public function index()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$body_data['notices_list'] = $this->model->fetchnoticesall();
		$header_data['page']='home';
		$header_data['page_title']='home';

		$this->load->view('common/header',$header_data);
		$this->load->view('home',$body_data);
		$this->load->view('common/footer');
	}
	
	// ABOUT PAGES================================================================================
	public function the_university()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= $header_data['page'].' the university';
		
		$this->load->view('common/header',$header_data);
		$this->load->view('about/the_university');
		$this->load->view('common/footer');
	}
	
	public function mission_and_vision()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= $header_data['page'].' mission & vision';

		$this->load->view('common/header',$header_data);
		$this->load->view('about/mission_and_vision');
		$this->load->view('common/footer');
	}
	
	public function governance()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= $header_data['page'].' governance';

		$this->load->view('common/header',$header_data);
		$this->load->view('about/governance');
		$this->load->view('common/footer');
	}
	
	public function approval_and_recognition()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= $header_data['page'].' approval and recognition';

		$this->load->view('common/header',$header_data);
		$this->load->view('about/approval_and_recognition');
		$this->load->view('common/footer');
	}
	
	public function press_release()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= $header_data['page'].' press release';

		$this->load->view('common/header',$header_data);
		$this->load->view('about/press_release');
		$this->load->view('common/footer');
	}
	
	public function messages()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= $header_data['page'].' messages';

		$this->load->view('common/header',$header_data);
		$this->load->view('about/messages');
		$this->load->view('common/footer');
	}


	// ADMISSION PAGES=====================================================================================
	public function admission_guidelines()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='admission';
		$header_data['page_title']= 'admission guidelines';

		$this->load->view('common/header',$header_data);
		$this->load->view('admission/admission_guidelines');
		$this->load->view('common/footer');
	}
	
	public function admission_procedure()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='admission';
		$header_data['page_title']= 'admission procedure';

		$this->load->view('common/header',$header_data);
		$this->load->view('admission/admission_procedure');
		$this->load->view('common/footer');
	}
	
	public function migration_criteria()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='admission';
		$header_data['page_title']= 'migration criteria';

		$this->load->view('common/header',$header_data);
		$this->load->view('admission/migration_criteria');
		$this->load->view('common/footer');
	}
	
	public function mgu_facilities()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='admission';
		$header_data['page_title']= 'mgu facilities';

		$this->load->view('common/header',$header_data);
		$this->load->view('admission/mgu_facilities');
		$this->load->view('common/footer');
	}
	
	// ACADEMICS PAGES========================================================================================================
	public function departments()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='academics';
		$header_data['page_title']= 'departments';

		$this->load->view('common/header',$header_data);
		$this->load->view('academics/departments');
		$this->load->view('common/footer');
	}
	
	public function faculties()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='academics';
		$header_data['page_title']= 'faculties';

		$this->load->view('common/header',$header_data);
		$this->load->view('academics/faculties');
		$this->load->view('common/footer');
	}
	
	public function research_development_innovation()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='academics';
		$header_data['page_title']= 'research development innovation';

		$this->load->view('common/header',$header_data);
		$this->load->view('academics/research_development_innovation');
		$this->load->view('common/footer');
	}
	
	public function placements()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='academics';
		$header_data['page_title']= 'placements';

		$this->load->view('common/header',$header_data);
		$this->load->view('academics/placements');
		$this->load->view('common/footer');
	}
	
	// PROGRAMS PAGE==========================================================================================================
	public function program_details($id)
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='programs';
		$body_data['program_details'] = $this->model->fetchProgramByCategory($id);
		$body_data['program_id'] = $id;
		$header_data['page_title']= 'program details';
		
		if($body_data['program_details'] != NULL){

			$this->load->view('common/header',$header_data);
			$this->load->view('programs/program_details', $body_data);
			$this->load->view('common/footer');
			
		}else{
			redirect(base_url('#our_department_area'), 'refresh');
		}
	}
	
	public function course_details($id)
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='programs';
		$body_data['program_details'] = $this->model->fetchcoursesByCategory($id);
		$header_data['page_title']= 'course details';
		
		if($body_data['program_details'] != NULL){
			
			$this->load->view('common/header',$header_data);
			$this->load->view('programs/course_details', $body_data);
			$this->load->view('common/footer');

		}else{
			redirect(base_url('#our_department_area'), 'refresh');
		}

	}
	
	// WEBSITE ENQUIRY SUBMIT==========================================================================================================
	public function website_enquiry()
	{
		$data['name'] = $this->input->post('name', True);
		$data['department'] = $this->input->post('department', True);
		$data['email'] = $this->input->post('email', True);
		$data['phone'] = $this->input->post('phone', True);
		$data['message'] = $this->input->post('message', True);

		if($data['department']==NULL){
			$data['department']='#';
		}
		
		$recaptcha = $this->input->post('g-recaptcha-response', True);
        $secret_key = '6LdISK0pAAAAAPmiIRJaL_4rHaZ1nog7L8bUhreY';
		
		$url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha;
		
		$response = file_get_contents($url);
        $response = json_decode($response);

		if ($response->success == false) {
			
				echo '<script>alert("Error in Google reCAPTACHA, Please Try Again")</script>';
		}

		else{
				foreach($data as $key => $value)
				{
					if($key != 'g-recaptcha-response'){
						
						$data[$key] = xss_clean($value);
					}
				}
				
				$data['request_info'] = json_encode($_SERVER);
				$this->model->websiteEnquirySubmit($data);
				echo '<script>alert("Thankyou for your time, Our team will contact you soon")</script>';
		}

		redirect('', 'refresh');
	}


	// EVENTS PAGE==========================================================================================================
	public function events()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= 'events';

		$this->load->view('common/header',$header_data);
		$this->load->view('about/events');
		$this->load->view('common/footer');
	}


	// BLOGS PAGES============================================================================================================
	public function blogs()
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= 'blogs';
		$body_data['blogs'] = $this->model->blogs_list();

		$this->load->view('common/header',$header_data);
		$this->load->view('about/blogs',$body_data);
		$this->load->view('common/footer');
	}

	public function blog($id)
	{
		$header_data['program_list'] = $this->model->fetchallcourse();
		$header_data['page']='about';
		$header_data['page_title']= 'blogs';
		$body_data['blog'] = $this->model->single_blog($id);
		$body_data['blog_slave'] = $this->model->single_blog_details($id);

		$this->load->view('common/header',$header_data);
		$this->load->view('about/blog',$body_data);
		$this->load->view('common/footer');
	}




}
