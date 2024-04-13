<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'web';
$route['404_override'] = 'web/custom_404';
$route['translate_uri_dashes'] = FALSE;


// ABOUT PAGES
$route['about/the-university'] = 'Web/the_university';
$route['about/mission-and-vision'] = 'Web/mission_and_vision';
$route['about/governance'] = 'Web/governance';
$route['about/approval-and-recognition'] = 'Web/approval_and_recognition';
$route['about/press-release'] = 'Web/press_release';
$route['about/messages'] = 'Web/messages';
$route['about/events'] = 'Web/events';
$route['about/blogs'] = 'Web/blogs';
$route['about/blog/(:any)'] = 'Web/blog/$1';


// ADMISSION PAGES
$route['admission/admission-guidelines'] = 'Web/admission_guidelines';
$route['admission/admission-procedure'] = 'Web/admission_procedure';
$route['admission/migration-criteria'] = 'Web/migration_criteria';
$route['admission/mgu-facilities'] = 'Web/mgu_facilities';


// ACADEMICS PAGES
$route['academics/departments'] = 'Web/departments';
$route['academics/faculties'] = 'Web/faculties';
$route['academics/research-development-innovation'] = 'Web/research_development_innovation';
$route['academics/placements'] = 'Web/placements';

// PROGRAM PAGES
$route['programs/program-details/(:any)'] = 'Web/program_details/$1';
$route['programs/course-details/(:any)'] = 'Web/course_details/$1';


// WEBSITE ENQUIRY SUBMISSION
$route['website-enquiry'] = 'Web/website_enquiry';


