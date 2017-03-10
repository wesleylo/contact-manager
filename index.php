<?php include_once 'dbconfig.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact Manager</title>


  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

  <!-- Bootstrap Material Design -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
  <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

  <link rel="stylesheet" href="/css/style.css">


</head>
<body>
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
              <a class="navbar-brand" href="javascript:void(0)">Contact Manager</a>
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
          <div class="row">
            <div class="col-lg-1 first-letter">
              A
            </div>
            <div class="col-lg-1">
              Pic
            </div>
            <div class="col-lg-3">
              Anna Apple
            </div>
            <div class="col-lg-3">
              a.apple@gmail.com
            </div>
            <div class="col-lg-3">
              19191234567
            </div>
            <div class="col-lg-1">
              Offset
            </div>
          </div>
          <!-- Insert contacts from DB here -->
          <div class="container">
            <table class='table table-bordered table-responsive'>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E - mail ID</th>
                <th>Contact No</th>
                <th colspan="2" align="center">Actions</th>
              </tr>
              <?php
              $query = "SELECT * FROM contacts";
              $records_per_page=3;
              $newquery = $crud->paging($query,$records_per_page);
              $crud->dataview($newquery);
              ?>
              <tr>
                <td colspan="7" align="center">
                  <div class="pagination-wrap">
                    <?php $crud->paginglink($query,$records_per_page); ?>
                  </div>
                </td>
              </tr>
              <!-- End insert contacts -->
        </div>

        <div container>
        <form action="create.php" method="post" class="form-horizontal">
          <fieldset>
            <legend>Create Contact</legend>

            <div class="row">
              <div class="form-group">
                <label for="inputFname" class="col-md-1 control-label">Name</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" name="fname" placeholder="First Name">
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" name="lname" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Company</label>
                <div class="col-md-2">
                  <input type="text" class="form-control" name="company" placeholder="Company">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="title" placeholder="Job Title">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Email</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Phone</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Address</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label"></label>
                <div class="col-md-2">
                  <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="col-md-2">
                  <select id="inputState" class="form-control" name="state">
                    <option value="" hidden="true" disabled selected>State</option> <!--style="color: #555"-->
                    <option>NC</option>
                    <option>SC</option>
                    <option>TN</option>
                    <option>VA</option>
                    <option>GA</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" name="zip" placeholder="Zip">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="notes" class="col-md-1 control-label">Notes</label>

                <div class="col-md-6">
                  <textarea class="form-control" rows="3" name="notes" placeholder="Notes"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="group" class="col-md-1 control-label">Groups</label> <!-- Will implement later-->
                <div class="col-md-offset-0 col-md-6">
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" unchecked=""> Friends
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <div class="col-md-7 col-md-offset-5">
                  <button class="btn btn-cancel">Cancel</button> <!-- exit modal-->
                  <input type="submit" name="btn-save" class="btn btn-primary" value="Save"/>
                </div>
              </div>
            </fieldset>
          </form>

        </div>
      </div>
    </div>











    </div>
    <!-- /#page-content-wrapper -->






  </div>
  <!-- /#wrapper -->





  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/material.min.js"></script>
  <script src="/js/ripples.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
  $.material.init();
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  </script>

</body>
