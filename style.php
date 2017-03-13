<?php include_once 'header.php';?>

<body>
  <!-- Navbar -->
  <div class="bs-component">
    <div id="override" class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-collapse collapse navbar-inverse-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#menu-toggle" id="menu-toggle"><i class="material-icons">dehaze</i></a></li>
            <li class="brand-padding"></li>
          </ul>
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
          <li class="all-contacts">
            <a href="#"><span class="group">Intro</span></a>
          </li>
          <li class="">
            <a href="#"><span class="group">Colors</span></a>
          </li>
          <li class="">
            <a href="#"><span class="group">Typography</span></a>
          </li>
          <li class="">
            <a href="#"><span class="group">Buttons</span></a>
          </li>
          <li class="">
            <a href="#"><span class="group">Forms</span></a>
          </li>
          <li class="">
            <a href="#"><span class="group">Icons</span></a>
          </li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <h1>Style Guide</h1>
          <h3 id="intro">Intro</h3>
          <p>We will encorporate flat design and use san-serif fonts. The design of the application should be non-distracting and should induce productivity.</p>

          <h3 id="colors">Colors</h3>

          <h3 id="typography">Typography</h3>
          <h2>Product Sans</h2>
          <p>Logo font; weight xxx</p>

          <h2>Fontname</h2>
          <p>Header font; weight xxx</p>

          <h2>Roboto</h2>
          <p>Body font; weight xxx</p>

          <p>Examples:</p>
          <h1>h1. VERY LARGE HEADER</h1>
          <h2>h2. Large header</h2>
          <h3>h3. Another large header</h3>
          <h4>h4. Medium header</h4>
          <h5>h5: Small header</h5>
          <p>p. Paragraph text</p>
          <p class="lead">p.lead. Lead paragrah text</p>
          <p class="light">p.light. Light paragraph text</p>

          <h3 id="buttons">Buttons</h3>

          <h3 id="forms">Forms</h3>

      </div>
      <!-- /#page-content-wrapper -->






    </div>
    <!-- /#wrapper -->

    <?php include_once 'footer.php';?>
