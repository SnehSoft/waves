
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
   
	<title>
		User Login
	</title>
	<link rel="stylesheet" href="<?php echo base_url('css/employee_login.css'); ?>">
	<style>
	  h1 {
        color: #707070;
        text-align: center;
        padding-top: 110px;
        margin-left:5px;
         }

    </style>
</head>
<body>
      <?php echo $this->session->userdata('msg');?>
	     <h1>Login</h1>
	<form action="<?php echo base_url('FetchDetails'); ?>" method="post">
        
    <input type="text" name="email" id="firstname" size="35" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="45" >
     <br>
     <?php echo form_error('email'); ?><br><br>
    <input type="password" name="password" id="pass" size="35" placeholder="Password" pattern="[A-Za-z0-9]{0,10}" maxlength="8">
     <br>
     <?php echo form_error('password'); ?><br><br>

     
     <input type="submit" name="submit" id="sub">

    </form>
</body>
</html>