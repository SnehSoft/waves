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
	
    <title>Dashboard</title>

<style>
h2
{
  color:#404040;
  padding-top:50px;
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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $this->session->userdata('employee_name'); ?></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
  </nav>
	<div class="container-fluid">
		
	<div class="row">
	<div class="col-md-3">	

    <ul style="font-size:18px; background-color: #202020;width:170px;height:50%;margin-top:75px;">
      <li><a href="<?php echo base_url('Dashboard'); ?>">Dashboard</a></li>
      <li><a href="<?php echo base_url('SalaryDetails'); ?>">Salary Details</a></li>
      <li><a href="<?php echo base_url('Holidays'); ?>">Holidays</a></li>
    </ul>
    </div>
    <div class="col-md-7">
    	<h2>Leave Status</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Basic Salary</th>
        <th>HRA</th>
        <th>Food Allowance</th>
        <th>TA</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
     
    </tbody>
  </table>
    </div>

</div>
</body>
</html>