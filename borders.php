
<?php include 'inc/header.php'; ?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <?php include 'inc/sidebar.php'; ?>
    </aside>
    <main class="app-content">
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Borders List</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Border List</h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Room No.</th>
                    <th>Phone</th>
                    <th>Emer. Phone</th>
                    <th>E-mail</th>
                    <th>Present Address</th>
                    <th>Permanent Address</th>
                    <th>NID No.</th>
                    <th>Photo</th>
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
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
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