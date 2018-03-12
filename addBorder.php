
<?php include 'inc/header.php'; ?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <?php include 'inc/sidebar.php'; ?>
    </aside>
    <main class="app-content">
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Add Border</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
	<div class="row">
	<div class="col-md-7">
      <div class="tile">
        <!-- <h3 class="tile-title">Register</h3> -->
        <form class="form-horizontal">
          <div class="tile-body">
            <div class="form-group row">
              <label class="control-label col-md-3">Name</label>
              <div class="col-md-8">
                <input class="form-control" type="text" placeholder="Enter full name">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Room</label>
              <div class="col-md-8">
                <select name="" class="form-control">
                	<option value="">Select Room</option>
                	<option value="">Select Room 2</option>
                	<option value="">Select Room 3</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-8">
                <input class="form-control" type="email" placeholder="Enter email address">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Contact No.</label>
              <div class="col-md-8">
                <input class="form-control" type="text" placeholder="+8801010101010">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Present Address</label>
              <div class="col-md-8">
                <textarea class="form-control" rows="3" placeholder="Enter your present address"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Parmanent Address</label>
              <div class="col-md-8">
                <textarea class="form-control" rows="3" placeholder="Enter your permanent address"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">NID No.</label>
              <div class="col-md-8">
                <input class="form-control" type="text" placeholder="Enter NID Number">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Gender</label>
              <div class="col-md-9">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender">Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender">Female
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Identity Proof</label>
              <div class="col-md-8">
                <input class="form-control" type="file">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8 col-md-offset-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">I accept the terms and conditions
                  </label>
                </div>
              </div>
            </div>
	        </div>
	        <div class="tile-footer">
	          <div class="row">
	            <div class="col-md-8 col-md-offset-3">
	              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-secondary" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
	            </div>
	          </div>
	        </div>
	    </form>
      </div>
    </div>
</div>
</main>
<?php include 'inc/footer.php'; ?>