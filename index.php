<?php include_once 'dbconfig.php';?>
<?php include_once 'header.php';?>
<body>
  <!--navbar-->
  <div class="bs-component">
    <div id="override" class="navbar navbar-inverse">
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
          <li class="sidebar-brand">
            Groups
          </li>
          <li>
            <a href="#" class="all-contacts"><i class="material-icons">contacts</i> <span class="group">All Contacts (100)</span></a>
          </li>
          <li>
            <a href="#" class="group"><i class="material-icons">group</i> <span class="group">Friends (20)</span></a>
          </li>
          <li>
            <a href="#" class="add-group"><i class="material-icons">group_add</i> <span class="group">Add New Group</span></a>
          </li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="clearfix"></div>

          <?php
          if(isset($_GET['inserted']))
          {
            ?>

            <?php
          }
          else if(isset($_GET['failure']))
          {
            ?>
            <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>SORRY!</strong> ERROR while inserting record !
            </div>
            <?php
          }
          ?>
          <!-- Read contacts from DB here -->
          <?php
          $query = "SELECT * FROM contacts";
          $records_per_page=10;
          $newquery = $crud->paging($query,$records_per_page);
          $crud->dataview($newquery);
          ?>
          <div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
          </div>
        </div>
        <!-- End read contacts -->
<a data-toggle="modal" href="create.php" data-target="#modal">Create New Contact</a><br>
<a data-toggle="modal" href="create.php" data-target="#modal">Update/Edit Contact</a><br>
<a data-toggle="modal" href="create.php" data-target="#modal">Read Detailed Contact</a><br>
<a data-toggle="modal" href="create.php" data-target="#modal">Delete Contact</a>
<div class="modal fade text-center" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>











    </div>
    <!-- /#page-content-wrapper -->






  </div>
  <!-- /#wrapper -->

<?php include_once 'footer.php';?>
