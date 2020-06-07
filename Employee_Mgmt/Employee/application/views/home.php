<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/employee_module.css'); ?>">
	
    <title>Employee</title>

<style>
.box {
  background-color: #404040;
  width: 145px;
  
  border: groove;
  border-radius:8px;
  padding: 25px;
  margin: 0 10px;
  margin-left:160px;
  margin-top : 70px;
  color : #FFFFFF;
}

</style>

</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CompanyName</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php
  
           if($this->session->userdata('loggedin')!=TRUE)
           {
              $this->session->set_flashdata('msg', "You need to be logged in.");

               redirect(base_url());
           }
           else
           {

              echo $this->session->userdata('employee_name'); 
            }
              ?>
          </a></li>
      <li><a href="<?php echo base_url('Logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
	<div class="container-fluid">
		
	<div class="row">
	<div class="col-md-2">	

    <ul style="font-size:18px; background-color: #202020;width:170px;height:50%;margin-top:75px;">
      <li><a href="<?php echo base_url('Dashboard'); ?>">Dashboard</a></li>
      <li><a href="<?php echo base_url('SalaryDetails'); ?>">Salary Details</a></li>
      <li><a href="<?php echo base_url('Holidays'); ?>">Holidays</a></li>
    </ul>
    </div>
    <div class="col-md-10">
    	<div class="row">
    		<div class="col-md-3">
                <div class="box"><a href="<?php echo base_url('SalaryDetails'); ?>">Salary Details</a></div>
            </div>
            
             <div class="col-md-3">
                <div class="box"><a href="<?php echo base_url('Holidays'); ?>">Holidays</a></div>
            </div>
       </div>
    </div>

</div>
</body>
</html>