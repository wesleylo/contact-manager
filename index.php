<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>


    <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
                    <a href="#"><i class="material-icons">contacts</i> All Contacts (100)</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">group</i> Friends (20)</a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">group_add</i> Add New Group</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1">
                        A
                    </div>
                    <div class="col-lg-1">
                        Pic
                    </div>
                    <div class="col-lg-2">
                        Anna Apple
                    </div>
                    <div class="col-lg-3">
                        a.apple@gmail.com
                    </div>
                    <div class="col-lg-3">
                        19191234567
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/material.js"></script>
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
