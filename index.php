<?php include_once 'header.php';?>

<body>
  <!-- Navbar -->
  <div class="bs-component">
    <div id="override" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-collapse collapse navbar-inverse-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#menu-toggle" id="menu-toggle"><i class="material-icons">dehaze</i></a></li>
            <li class="brand-padding"></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group is-empty">
              <input type="text" class="form-control col-md-8" placeholder="Search">
            </div>
          </form>
          <ul class="nav navbar-nav navbar-left">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Contact Manager</a>
            </div>
          </ul>
        </div>
      </div>
    </div>

    <div id="wrapper" class="toggled">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand">Groups</li>
          <li class="all-contacts">
            <a href="#"><i class="material-icons">contacts</i> <span class="group">All Contacts (100)</span></a>
          </li>
          <li class="groups">
            <a href="#"><i class="material-icons">group</i> <span class="group">Friends (20)</span></a>
          </li>
          <li class="add-group">
            <a href="#"><i class="material-icons">group_add</i> <span class="group">Add New Group</span></a>
          </li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="clearfix"></div>

          <?php
          if(isset($_GET['success']))
          {
            ?>
            <!-- Go to page containing new entry and highlight? -->
            <?php
          }
          else if(isset($_GET['failure']))
          {
            ?>
            <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>SORRY!</strong> ERROR while inserting record!
            </div>
            <?php
          }
          ?>
          <!-- Read contacts from DB here -->
          <div class="row menu-container">
            <div class="col-md-1 col-sm-1 entries-per">
              <div class="form-group">
                <h5>Show</h5>
              </div>
            </div>
            <div class="col-md-1 col-sm-1 entries-per">
              <div class="form-group">
                <select id="entries" class="form-control">
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="25">25</option>
                </select>
              </div>
            </div>
            <div class="col-md-1 col-sm-1 entries-per">
              <div class="form-group">
                <h5>entries</h5>
              </div>
            </div>
            <div class="col-md-9 col-sm-9 btn-create-container">
              <a data-toggle="modal" href="create.php" data-target="#create-modal" class="btn btn-raised btn-create">New Contact</a>
            </div>
          </div>
          <?php
          $query = "SELECT * FROM contacts";
          $records_per_page=10;
          $newquery = $crud->paging($query,$records_per_page);
          $crud->dataview($newquery); // Read and render contacts from DB.
          ?>
          <div class="pagination-wrap col-lg-12">
            <?php $crud->paginglink($query,$records_per_page); ?>
          </div>
        </div>
        <!-- End read contacts -->

        <div class="modal fade text-center" id="create-modal">
          <div class="modal-dialog">
            <div class="modal-content">
            </div>
          </div>
        </div>

        <div class="modal fade text-center" id="edit-modal">
          <div class="modal-dialog">
            <div class="modal-content">
            </div>
          </div>
        </div>

        <div class="modal fade text-center" id="delete-modal">
          <div class="modal-dialog">
            <div class="modal-content">
            </div>
          </div>
        </div>

      </div>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <footer class="footer navbar-fixed-bottom">
      <div class="container-fluid footer-container">
        <p class="text-muted"><a href="style.php">Style guide</a></p>
        <p class="text-muted">Copyright © 2017 <a href="//github.com/wesleylo/contact-manager">Wesley Lo</a></p>
      </div>
    </footer>

    <?php include_once 'footer.php';?>
