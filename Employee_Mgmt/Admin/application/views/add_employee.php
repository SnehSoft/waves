
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
              <li class="breadcrumb-item active">Employee Form</li>
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
                <h3 class="card-title">Add Employee Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url('EmployeeData'); ?>" method="post">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleName">Employee Name </label>
                    <input type="text" class="form-control" id="exampleName" name="employee_name" placeholder="Full Name" pattern="[A-Za-z ]{0,100}" maxlength="50" autofocus required>
                    
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleEstablish">Contact No:</label>
                    <input type="text" class="form-control" id="exampleContact" name="contact_no" placeholder="Contact No" pattern="[0-9]{0,10}" maxlength="10" autofocus required>
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email ID</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="emailid" placeholder="Email ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autofocus required>
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleFounder">Designation</label>
                    <input type="text" class="form-control" id="exampleFounder" name="designation" placeholder="Designation" pattern="[A-Za-z ]{0,30}" maxlength="30" autofocus required>
                  
                  </div>
                  <div class="form-group">
                   <label for="exampleContact">Department Name:</label>
                    <input type="text" class="form-control" id="exampleContact" name="department" placeholder="Department" pattern="[A-Za-z ]{0,30}" maxlength="30" autofocus required>
                   
                  </div>
                  <div class="form-group">
                   <label for="exampleAddress">Address:</label>
                    <textarea name="address" class="form-control" id ="exampleAddress" placeholder="Address" pattern="[A-Za-z]{0,150}" maxlength="150" autofocus required></textarea>
                  </div>
                  
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
 