
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payroll Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class = "col-md-3">
          </div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Payroll </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url('UpdatePayroll'); ?>" method="post">
                <div class="card-body">
                   <div class="form-group">
                    <?php 
                        foreach($emplist as $list)

                    ?>
                     <input type="hidden" class="form-control" id="empName" name="emp_id" value="<?php echo $list['empid']; ?>" >
                  
                    <label for="empName">Employee Name </label>
                     <input type="text" class="form-control" id="empName" name="employee_name" value="<?php echo $list['empname']; ?>" placeholder="Full Name" pattern="[A-Za-z ]{0,100}" maxlength="50" autofocus disabled>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleFounder">Designation</label>
                    <input type="text" class="form-control" id="exampleFounder" name="designation" value="<?php echo $list['designation']; ?>" placeholder="Designation" pattern="[A-Za-z ]{0,30}" maxlength="30" autofocus disabled>
                  
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleEstablish">Basic Salary:</label>
                    <input type="text" class="form-control" id="exampleContact" name="basic_salary" value="<?php echo $list['bs']; ?>" placeholder="Basic Salary" pattern="[0-9]{0,10}" maxlength="10" autofocus required>
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">HRA</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="hra" value="<?php echo $list['hra']; ?>" placeholder="HRA" pattern="[0-9]{0,10}" autofocus required>
                   
                  </div>
                  <div class="form-group">
                   <label for="exampleAddress">Food Allowance:</label>
                   <input type="text" class="form-control" id="exampleContact" name="food_A" value="<?php echo $list['fa']; ?>" placeholder="Food Allowance" pattern="[0-9]{0,10}" maxlength="10" autofocus required>
                   
                  </div>
                  
                  <div class="form-group">
                   <label for="exampleAddress">Travelling Allowance:</label>
                   <input type="text" class="form-control" id="exampleContact" name="TA" value="<?php echo $list['ta']; ?>" placeholder="Travelling Allowance" pattern="[0-9]{0,10}" maxlength="10" autofocus required>
                   
                  </div>
                  
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-2"></div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 