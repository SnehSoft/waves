<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_Model extends CI_Model
{


/*------------------------------Function to fetch details of employee -----------------------------------------*/

	public function fetchemployee($email,$password)
	{
		          $this->db->where('emailid',$email);
		          $this->db->where('password',$password);
	              
	     $query = $this->db->get('employee');
                   return $query->result_array();
	}
	
/*---------------------------Function to get data-------------------------------------*/	
	public function getdata($email)
	{
		         
		          $this->db->where('emailid',$email);
		 $query = $this->db->get('employee');
		           return $query->result_array();
	}
/*-------------------Function to set password -------------------------------------------*/	
	public function update_data($table,$data,$id)
	{
                   $this->db->where('emp_id',$id);
                   $this->db->set('password',$data);
		  $query = $this->db->update($table);
		            return $query;
	}
/*--------------------------Function to get salary data-----------------------------------*/	
	public function getsalarydata()
	{
			       $this->db->select('emp_id,basic_salary,hra,food_A,TA,salary');
			       $this->db->from('employee_salary');
		  $query = $this->db->get();
		            return $query->result_array();
	}
/*--------------------------Function to get salary details--------------------------------*/	
	public function getsalarydetails($empid)
	{
				      $this->db->select('emp_id,basic_salary,hra,food_A,TA,salary');
				      $this->db->from('employee_salary');
				      $this->db->where('emp_id',$empid);
		  $query =    $this->db->get();
		              return $query->result_array();
	}

	
}