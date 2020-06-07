<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
       
       $this->load->library('session');
        $this->load->model('Admin_Model');
        
    //  $logindata = array('name'=>'admin','email'=>'admin@gmail.com','password'=>'admin123','logged_in'=>TRUE);

      //     $this->session->set_userdata($logindata);

        

    }
  /*----------------------------Function to check login----------------------------------------------------*/  
	public function check_auth($page) {
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('msg', "You need to be logged in to access the $page page.");
            redirect(base_url());
        }
    }
  /*----------------------------Function to load login view----------------------------------------------------*/  
	public function login()
	{
	       	
		   $this->load->view('login');
		
	}
	/*----------------------------Function to logout----------------------------------------------------*/
	public function logout()
	{
		
     // $this->check_auth('dashboard');
       $this->session->sess_destroy();
           redirect(base_url());
       
	}
	/*---------------------------Function to load dashboard view-------------------------------------------------*/
	public function dashboard()
	{
	//	$this->check_auth('dashboard');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('dashboard');
		$this->load->view('common/footer');
	}
	/*----------------------------Function to load company view--------------------------------------------------*/
	public function add_company()
	{
		
		
		//$this->check_auth('add_company');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('add_company');
	    $this->load->view('common/footer');
	   
	}
    /*----------------------------Function to load employee view--------------------------------------------------*/
	public function add_employee()
	{
		
		
		//$this->check_auth('add_employee');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('add_employee');
	    $this->load->view('common/footer');
	   
	}
	/*-----------------------Function to load employee list view--------------------------------------------------*/
	public function employee_list()
	{
		$result['emplist'] = $this->Admin_Model->getemployeelist();
	//	$this->check_auth('employee_list');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('employee_list',$result);
	    $this->load->view('common/footer');
	   
	}
	/*---------------------Function to load update_employee view--------------------------------------------------*/
	public function update_employee($id)
	{
		$result['emplist'] = $this->Admin_Model->getsingleemployee($id);
		//$this->check_auth('update_employee');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('update_employee',$result);
	    $this->load->view('common/footer');
	   
	}
	/*----------------------------Function to load payroll view--------------------------------------------------*/
	public function payroll()
	{
		$result['emplist'] = $this->Admin_Model->add_salary();
		//$this->check_auth('add_payroll');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('payroll',$result);
	    $this->load->view('common/footer');
	   
	}
	/*-------------------------Function to load add_payroll view--------------------------------------------------*/
	public function add_payroll($id)
	{
		$result['emplist'] = $this->Admin_Model->getsingleemployee($id);
		//$this->check_auth('add_payroll');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('add_payroll',$result);
	    $this->load->view('common/footer');
	   
	}
	/*----------------------------Function to load employee payroll list view--------------------------------------------------*/
	public function employee_payroll_list()
	{
		$result['paylist'] = $this->Admin_Model->getemppayroll();
		//$this->check_auth('employee_payroll_list');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('employee_payroll_list',$result);
	    $this->load->view('common/footer');
	   
	}
	/*----------------------------Function to load update_payroll view--------------------------------------------------*/
	public function update_payroll($id)
	{
		$result['emplist'] = $this->Admin_Model->getsinglepayroll($id);
		//$this->check_auth('update_payroll');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('update_payroll',$result);
	    $this->load->view('common/footer');
	   
	}

	/*----------------------------Function to load holiday view--------------------------------------------------*/
	public function add_holiday()
	{
		//$this->check_auth('add_holiday');
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->load->view('add_holidays');
	    $this->load->view('common/footer');
	   
	}
	/*----------------------------Function to fetch login details------------------------------------------------*/
 
	public function fetch_admin()
	{
		
        
        $this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
        
           
		
        if($this->form_validation->run() == True)
        {

        	$email = $this->input->post('email');
		    $password = $this->input->post('password');
		 
              $result = $this->Admin_Model->fetchadmin($email,$password);  

		   if($result)
		   {
		   	  
		   	 $logindata = array('name'=>$result[0]['name'],'email'=>$email,'loggedin'=>TRUE);
		   	 $this->session->set_userdata($logindata,'name');
		   	
			 redirect(base_url('Dashboard'));  
		   }
	    }    
		else if($this->form_validation->run() == False)
		{
		    $this->load->view('login');	
		}

	}

   /*----------------------------Function to save company details-------------------------------------------------*/
	public function company_add()
	{
		
		$companydata = array('company_name'=>$this->input->post('company_name'),'establish'=>$this->input->post('establish'),'emailid'=>$this->input->post('emailid'),'founder'=>$this->input->post('founder'),
			'contact_no'=>$this->input->post('contact_no'),'address'=>$this->input->post('address'));

        

        $result = $this->Admin_Model->save_data('company',$companydata);
		
			if($result)
			{
               redirect(base_url('AddCompany'));  
            }
		 
	}
	/*-------------------------Function to save employee details--------------------------------------------------*/
	public function employee_add()
	{
		
		$employeedata = array('employee_name'=>$this->input->post('employee_name'),'contact_no'=>$this->input->post('contact_no'),'emailid'=>$this->input->post('emailid'),'designation'=>$this->input->post('designation'),
			'department'=>$this->input->post('department'),'address'=>$this->input->post('address'));

        

        $result = $this->Admin_Model->save_data('employee',$employeedata);
		
			if($result)
			{
              redirect(base_url('AddEmployee'));  
            }
		 
	}
	/*------------------------Function to update employee details------------------------------------------------*/
    public function employee_update()
	{
		$id = $this->input->post('emp_id');
		$updatedata = array('employee_name'=>$this->input->post('employee_name'),'contact_no'=>$this->input->post('contact_no'),'emailid'=>$this->input->post('emailid'),'designation'=>$this->input->post('designation'),
			'department'=>$this->input->post('department'));

        

        $result = $this->Admin_Model->update_data('employee',$updatedata,$id);
		
			if($result)
			{
                redirect(base_url('EmployeeList'));  
            }
		 
	}
	/*------------------------Function to delete employee details------------------------------------------------*/
    
	public function delete_data($id)
	{
		 $result = $this->Admin_Model->delete_data('employee',$id);
		
			if($result)
			{
                redirect(base_url('EmployeeList'));  
            }
	}
	/*------------------------Function to save salary details------------------------------------------------*/
    
    public function save_salary()
    {
         $bs = $this->input->post('basic_salary');
         $hra = $this->input->post('hra');
         $fa = $this->input->post('food_A');
         $ta = $this->input->post('TA');

         $total = $bs+$hra+$fa+$ta;
          print_r($total);
          

       $salarydata = array('emp_id'=>$this->input->post('emp_id'),'basic_salary'=>$this->input->post('basic_salary'),'hra'=>$this->input->post('hra'),'food_A'=>$this->input->post('food_A'),'TA'=>$this->input->post('TA'),'salary'=>$total,'emp_salary_status'=>1);

          $empid = $this->input->post('emp_id');
         
         $result = $this->Admin_Model->save_data('employee_salary',$salarydata);

         if($result)
         {
             $res = $this->Admin_Model->updatepayrolllist('employee',array('salary_status'=>1),$empid);


            redirect(base_url('EmployeePayrollList'));

         }
         else
         {
         	echo "Not Saved";
         }
    }
    /*------------------------Function to update salary details------------------------------------------------*/
    
    public function payroll_update()
	{
		$id = $this->input->post('emp_id');
		 $bs = $this->input->post('basic_salary');
         $hra = $this->input->post('hra');
         $fa = $this->input->post('food_A');
         $ta = $this->input->post('TA');

         $total = $bs+$hra+$fa+$ta;
          print_r($total);
          

       $updatedata = array('basic_salary'=>$this->input->post('basic_salary'),'hra'=>$this->input->post('hra'),'food_A'=>$this->input->post('food_A'),'TA'=>$this->input->post('TA'),'salary'=>$total);

        

        $result = $this->Admin_Model->update_data('employee_salary',$updatedata,$id);
		
			if($result)
			{
                redirect(base_url('EmployeePayrollList'));  
            }
		 
	}
	/*------------------------Function to delete salary details------------------------------------------------*/
    
	public function delete_payroll($id)
	{
		 $result = $this->Admin_Model->delete_payroll('employee_salary',$id);
		
			if($result)
			{
                redirect(base_url('EmployeePayrollList'));  
            }
	}

	/*------------------------Function to save holiday details------------------------------------------------*/
    
	public function save_holiday()
	{
		
		$holiday = array('date'=>$this->input->post('date'),'day'=>$this->input->post('day'),'holiday_type'=>$this->input->post('holiday_type'));

        

        $result = $this->Admin_Model->save_data('holiday_list',$holiday);
		
			if($result)
			{
                redirect(base_url('Holiday'));  
            }
		 
	}


}
