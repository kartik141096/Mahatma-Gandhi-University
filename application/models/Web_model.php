<?php

defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Web_model extends CI_Model {

   function fetchallcourse()
   {
      $q=$this->db->select()->from('course_category')->order_by('id','asc')->get();
      return $q->result();
   }
   function fetchProgramByCategory($category_id){
       
      $q=$this->db->select()->from('courses')->where('category_id',$category_id)->get();
      return $q->result();
   }
   function fetchcoursesByCategory($id){
       
      $q=$this->db->select()->from('courses')->where('id',$id)->get();
      return $q->result();
   }
   function fetchnoticesall()
   {
      $q=$this->db->select()->from('notices')->order_by('notice_id','desc')->get();
      return $q->result();
   }
   function websiteEnquirySubmit($data)
   {
      $this->db->insert('website_enquiry',$data);
   }
   function blogs_list()
   {
      $q = $this->db->select()->from('blogs')->get();
      return $q->result();
   }
   function single_blog($id)
   {
      $q = $this->db->select()->from('blogs')->where('id',$id)->get();
      return $q->result();
   }
   function single_blog_details($id)
   {
      $q = $this->db->select()->from('blog_slave')->where('blog_id',$id)->get();
      return $q->result();
   }

// function fetchdatalimit($table,$limit)
// {
//    $q=$this->db->select()->from($table)->order_by('id','desc')->limit($limit)->get();
//    return $q->result();
// }
// function eventsall()
// {
//    $q=$this->db->select()->from('events')->order_by('id','desc')->get();
//    return $q->result();
// }
// function fetchnoticesall()
// {
//    $q=$this->db->select()->from('notices')->order_by('notice_id','desc')->get();
//    return $q->result();
// }
// function eventdetailbyid($id)
// {
//    $q=$this->db->select()->from('events')->where('id',$id)->get();
//    return $q->row();
// }
// function fetchcourselimit3()
// {
//    $q=$this->db->select()->from('acad_class')->order_by('id','RANDOM')->limit('4')->get();
//    return $q->result();
// }
// function fetchcourseall()
// {
//    $q=$this->db->select()->from('acad_class')->order_by('id','asc')->get();
//    return $q->result();
// }
// function fetchallcourse()
// {
//    $q=$this->db->select()->from('courses')->order_by('id','asc')->get();
//    return $q->result();
// }
// function fetchcoursedetails($id)
// {
//    $q=$this->db->select()->from('courses')->where('id',$id)->get();
//    return $q->row();
// }
// function fetchProgramCategories(){
   
//    $q=$this->db->select()->from('course_category')->get();
//    return $q->result();
// }

// function fetchProgramByCategory($category_id){
       
//    $q=$this->db->select()->from('courses')->where('category_id',$category_id)->get();
//    return $q->result();
// }

// function fetchnoticeslimit3()
// {
//    $q=$this->db->select()->from('notices')->order_by('notice_id','desc')->get();
//    return $q->result();
// }
// function contactsavadata($data)
// { 
//    $this->db->insert('contact',$data);
// }
// function enquiryinsertmodel($data)
// {
//    $this->db->insert('admission',$data);
// }
// function ajaxcalladmission($data)
// {
//    $this->db2=$this->load->database('erpcourse', TRUE);
//    $this->db2->insert('admissionenquiryform',$data);
// }
// function fetchplacements()
// {
//    $q=$this->db->select()->from('placement')->where('status','1')
//            ->order_by('placement_on','desc')->get();
//    return $q->result();
// }
// function fetchmessages()
// {
//    $q=$this->db->select()->from('messages')->where('status','1')
//            ->order_by('ms_id','asc')->get();
//    return $q->result();
// }
// function eventdetail($id)
// {
//    $q=$this->db->select()->from('events')->where('id',$id)->get();
//    return $q->row();
// }
// function apply_now_application($data)
// {
//    $this->db->insert('sbdapplication',$data);
// }
// function save_job_application($data)
// {
//    $this->db->insert('jobs',$data);
// }
// function student_application_general_enquery($data)
// {
//    $this->db2=$this->load->database('erpcourse', TRUE);
//    $this->db2->insert('admissionenquiryform',$data);
// }


  
// function blogs_details()
// {
//    $q = $this->db->select()->from('blog_slave')->get();
//    return $q->result();
// }


  
  
}
?>