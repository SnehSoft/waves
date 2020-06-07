<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model
{

/*------------------------------Function to fetch details of admin -----------------------------------------*/
	public function fetchadmin($email,$password)
	{
		      
	           $this->db->where('password',$password);
	           $this->db->where('email',$email);
	  $query = $this->db->get('admin');
                return $query->result_array();
	}
/*----------------------------Function to insert the data in database--------------------------------------*/	
	public function save_data($table,$data)
	{
		$query = $this->db->insert($table,$data);
		         return $query;
	}
/*-------------------------Function to display the employee list------------------------------------------*/	
	public function getemployeelist()
	{
		         
		          $this->db->where('status',0);
		 $query = $this->db->get('employee');
		          return $query->result_array();
	}
/*-------------------------Function to display sngle employee details-------------------------------*/	
	public function getsingleemployee($id)
	{
		          $this->db->select('emp_id,employee_name,contact_no,emailid,designation,department');
		          $this->db->where('emp_id',$id);
		 $query = $this->db->get('employee');
		          return $query->result_array();
	}
/*---------------------Function to update data---------------------------------------*/	
	public function update_data($table,$data,$id)
	{
                   $this->db->where('emp_id',$id);
		  $query = $this->db->update($table,$data);
		            return $query;
	}
/*---------------------Function to delete data---------------------------------------*/	
	
	public function delete_data($table,$id)
	{
		            $this->db->where('emp_id',$id);
		            $this->db->set('status',1);
		  $query =  $this->db->update($table);
		            return $query;
                  
	}
/*----------------------Function to fetch the employee details salary wise--------------------*/	
	public function add_salary()
	{
			        $this->db->select('emp_id,employee_name,designation');
			        $this->db->from('employee');
		            $this->db->where('salary_status',0);
		  $query =  $this->db->get();
		            return $query->result_array();

	}
/*---------------------Function to fetch employee payroll details----------------------------------*/	
	public function getemppayroll()
	{
	          $this->db->select('ES.emp_id as empid,EMP.employee_name as empname,salary');
	          $this->db->from('employee_salary as ES');
	          $this->db->join('employee as EMP','EMP.emp_id=ES.emp_id','left');
	          $this->db->where('emp_salary_status',1);
	          $this->db->where('ES.status',0);
	          $this->db->order_by('date','DESC');
	      $query = $this->db->get();
	               return $query->result_array();	
	}
/*---------------------Function to get single employee payroll----------------------*/	
	public function getsinglepayroll($id)
	{
	          $this->db->select('ES.emp_id as empid,ES.basic_salary as bs,ES.hra as hra,ES.food_A as fa,ES.TA as ta,EMP.employee_name as empname,EMP.designation as designation,salary');
	          $this->db->from('employee_salary as ES');
	          $this->db->join('employee as EMP','EMP.emp_id=ES.emp_id','left');
	          $this->db->where('EMP.emp_id',$id);
	          $this->db->where('emp_salary_status',1);
	          $this->db->order_by('date','DESC');
	      $query = $this->db->get();
	               return $query->result_array();	
	}
/*----------------------Function to update the payroll llist----------------------------*/	
	public function updatepayrolllist($table,$data,$empid)
	{
		           $this->db->where('emp_id',$empid);
		  $query = $this->db->update($table,$data);
		            return $query;
	}
/*-----------------------Function to delete payroll------------------------------- */	
	public function delete_payroll($table,$id)
	{
		            $this->db->where('emp_id',$id);
		            $this->db->set('status',1);
		  $query =  $this->db->update($table);
		            return $query;
                  
	}
	
}