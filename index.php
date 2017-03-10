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
          </div>
          <?php
                  //  include 'database.php';
                  //  $pdo = Database::connect();
                  //  $contacts = $db->query('SELECT * FROM contacts ORDER BY first')->fetchAll(PDO::FETCH_ASSOC);
                  //  foreach ($pdo->query($sql) as $row) {
                  //           echo '<tr>';
                  //           echo '<td>'. $row['name'] . '</td>';
                  //           echo '<td>'. $row['email'] . '</td>';
                  //           echo '<td>'. $row['mobile'] . '</td>';
                  //           echo '</tr>';
                  //  }
            ?>
        </div>

        <div container>
        <form class="form-horizontal">
          <fieldset>
            <legend>Create Contact</legend>

            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Name</label>
                <div class="col-md-3">
                  <input type="email" class="form-control" id="inputFirst" placeholder="First Name">
                </div>
                <div class="col-md-3">
                  <input type="inputLast" class="form-control" id="inputLast" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Company</label>
                <div class="col-md-2">
                  <input type="email" class="form-control" id="inputFirst" placeholder="Company">
                </div>
                <div class="col-md-4">
                  <input type="inputLast" class="form-control" id="inputLast" placeholder="Job Title">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Email</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" id="inputFirst" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Address</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" id="inputFirst" placeholder="Address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="inputFirst" class="col-md-1 control-label">Name</label>
                <div class="col-md-2">
                  <input type="email" class="form-control" id="inputFirst" placeholder="City">
                </div>
                <div class="col-md-2">
                  <select id="select111" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <input type="email" class="form-control" id="inputFirst" placeholder="Zip">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="notes" class="col-md-1 control-label">Notes</label>

                <div class="col-md-6">
                  <textarea class="form-control" rows="3" id="notes" placeholder="Notes"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label for="group" class="col-md-1 control-label">Notes</label>
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
                  <button type="button" class="btn btn-default">Cancel</button>
                  <button type="save" class="btn btn-primary">Save</button>
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
