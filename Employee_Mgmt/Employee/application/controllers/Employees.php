<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
      
        $this->load->model('Employee_Model');
        $this->load->library('session');

    }
 /*-----------------------------Function to load login view---------------------------------------------------*/   
	public function login()
	{
		$this->load->view('login');
	}
/*-------------------------------Function to logout---------------------------------------------*/	
	public function logout()
	{
		
       $this->session->sess_destroy();
           redirect(base_url());
       
	}
/*--------------------------------Function to load set password view--------------------------*/	
	public function set_password()
	{
		$this->load->view('set_password');
	}
/*---------------------------------Function to load Dashboard view------------------------------*/	
	public function home()
	{
		
		$this->load->view('home');
	}
/*---------------Function to load salary details view and display the salary details of employee ----------------------- */	
	public function salary_details()
	{
		$result = $this->Employee_Model->getsalarydata();

        $empsalarydata = array('emp_id'=>$result[0]['emp_id'],'basic_salary'=>$result[0]['basic_salary'],'hra'=>$result[0]['hra'],'food_A'=>$result[0]['food_A'],'TA'=>$result[0]['TA'],'salary'=>$result[0]['salary']);
        
                 $this->session->set_userdata($empsalarydata);
        $empid = $this->session->userdata('emp_id');
         
        $salarydata['data'] = $this->Employee_Model->getsalarydetails($empid);

		$this->load->view('salary_details',$salarydata);
	}
/*-------------------------------Function to load holidays view---------------------------------*/	
	public function holidays()
	{
		$holidaydata['holidays'] = $this->db->get('holiday_list')->result_array();
		$this->load->view('holidays',$holidaydata);
	}
/*--------------------------Function to fetch employee details---------------------------- */	
	public function fetch_employee()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
        
        $result = $this->Employee_Model->fetchemployee($email,$password);
         print_r($result);

        if($this->form_validation->run() == False)
        {
            $this->load->view('login');



            if(($password ==''))
            {
            	  $sessiondata = array('emp_id'=>$result[0]['emp_id'],'employee_name'=>$result['employee_name'],'emailid'=>$email);

                  $this->session->set_userdata($sessiondata);
             	redirect(base_url('SetPassword'));
            	
            }
        }

        else if($this->form_validation->run() == True)
        {
        	if($result)
        	{
        		 $sessiondata = array('emp_id'=>$result[0]['emp_id'],'employee_name'=>$result[0]['employee_name'],'emailid'=>$email,'loggedin'=>TRUE);
        		 
                   print_r($sessiondata);
                  $this->session->set_userdata($sessiondata);
        	  redirect(base_url('Dashboard'));
            }
            
        }

    }
 /*-------------Function to set password----------------*/   
    public function updatepassword()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('Password', 'Password', 'required');
        $this->form_validation->set_rules('conf_password', 'Confirm Password', 'required');
          
         
    	$id = $this->input->post('empid');
    	$password = $this->input->post('Password');
    	$confpassword = $this->input->post('conf_password');
        
        if($this->form_validation->run() == False)
    	{
    		redirect(base_url('SetPassword'));
    	}
        else if($this->form_validation->run() == True)
        {
           $result = $this->Employee_Model->update_data('employee',$password,$id);
    	  if($result)
    	  {
    		redirect(base_url());
    	  }
        } 
    	 
        
    }
}
