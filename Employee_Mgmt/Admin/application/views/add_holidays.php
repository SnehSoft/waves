
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
              <li class="breadcrumb-item active">Add Holiday</li>
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
                <h3 class="card-title">Add Holiday </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url('AddHoliday'); ?>" method="post">
                <div class="card-body">
                   <div class="form-group">
                   
                     
                    <label for="date">Date </label>
                     <input type="date" class="form-control" id="date" name="date"  placeholder="Date"  autofocus required>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleFounder">Day</label>
                    <input type="text" class="form-control" id="exampleFounder" name="day"  placeholder="Day" pattern="[A-Za-z ]{0,30}" maxlength="30" autofocus required>
                  
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleEstablish">Holiday Type</label>
                    <input type="text" class="form-control" id="exampleContact" name="holiday_type" placeholder="Holiday Type" pattern="[A-Za-z ]{0,30}" maxlength="30" autofocus required>
                   
                  </div>
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
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
 