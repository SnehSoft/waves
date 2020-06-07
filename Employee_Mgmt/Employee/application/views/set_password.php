
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
   
	<title>
		Set Password
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
    <script type="text/javascript">
    function confirmPass() {
        var pass = document.getElementById("pass").value;
        var confPass = document.getElementById("c_pass").value;
        if(pass != confPass) {
            alert('Wrong confirm password !');
        }
    }
</script>
</head>
<body>
	     <h1>Set Password</h1>
	<form action="<?php echo base_url('UpdatePassword'); ?>" method="post">
        <?php 

          $empid = $this->session->userdata('emp_id');
       
        ?>
        <input type="hidden" name="empid" value="<?php echo $empid; ?>">
    <input type="password" name="Password" id="pass" size="35" placeholder="Password"  pattern="[A-Za-z0-9]{0,10}" maxlength="8" >
     <br>
     <?php echo form_error('Password'); ?>
     <br><br>
    <input type="password" name="conf_password" id="c_pass" size="35" placeholder="Confirm Password" pattern="[A-Za-z0-9]{0,10}" maxlength="8">
     <br>
     <?php echo form_error('conf_password'); 
        
     ?>
     <br><br>
     
     <input type="submit" name="submit" id="sub" onClick = "confirmPass()" >
     
     

	</form>
</body>
</html>