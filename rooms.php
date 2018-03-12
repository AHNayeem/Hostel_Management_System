
<?php include 'inc/header.php'; ?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <?php include 'inc/sidebar.php'; ?>
    </aside>
    <main class="app-content">
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Add Rooms</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Rooms</a></li>
        </ul>
    </div>
	<div class="row">
		<div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Subscribe</h3> -->
            <div class="tile-body">
              <form class="row">
                <div class="form-group">
	              <div class="col-md-12">
	              <label class="control-label">Room Description</label>
	                <input class="form-control" type="text" placeholder="Enter full name">
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-md-12">
	              <label class="control-label">Attach Bath</label>
	                <select name="" class="form-control">
	                	<option value="">Yes</option>
	                	<option value="">No</option>
	                </select>
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-md-12">
	              <label class="control-label">Fare</label>
	                <input class="form-control" type="text" placeholder="Ex. 12,000">
	              </div>
	            </div>
	            <div class="form-group">
	              <div class="col-md-12">
	              <label class="control-label">Max Border</label>
	                <input class="form-control" type="text" placeholder="Ex. 4">
	              </div>
	            </div>
                <div class="form-group col-md-2 align-self-end">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    <div class="col-md-12">
    	<div class="tile">
            <h3 class="tile-title">Room Details</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Attach Bath</th>
                    <th>Fare</th>
                    <th>Max Border</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                      <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>&nbsp;&nbsp;<button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
	</div>
</main>
<?php include 'inc/footer.php'; ?>