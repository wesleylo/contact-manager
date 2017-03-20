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

          <div class="col-md-12">
            <h3 id="intro">Intro</h3>
            <p>We will encorporate flat design and use san-serif fonts. The design of the application should be non-distracting and should induce productivity.</p>
          </div>

          <div class="col-md-12">
            <h3 id="colors">Colors</h3>
          </div>

          <div class="col-md-12">
            <h3 id="typography">Typography</h3>
            <div class="well bs-component">
              <h2>Product Sans</h2>
              <p>Logo font; weight xxx</p>

              <h2>Fontname</h2>
              <p>Header font; weight xxx</p>

              <h2>Roboto</h2>
              <p>Body font; weight xxx</p>
            </div>
          </div>

          <div class="col-md-12">
            <p>Examples:</p>
            <h1>h1. VERY LARGE HEADER</h1>
            <h2>h2. Large header</h2>
            <h3>h3. Another large header</h3>
            <h4>h4. Medium header</h4>
            <h5>h5. Small header</h5>
            <p>p. Paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada, leo vitae vehicula consequat, felis erat tempor orci, at scelerisque tortor velit finibus leo. Sed blandit eros auctor lobortis pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus pharetra lectus. Aliquam ultricies tortor ut ligula pharetra vulputate. Morbi porttitor magna et risus fermentum, et tempus tortor maximus. Pellentesque viverra dictum sapien non feugiat.</p>
            <p class="lead">p.lead. Lead paragrah text</p>
            <p class="light">p.light. Light paragraph text</p>
          </div>
          <div class="col-md-6">
            <h3>ul. Unordered List:</h3>
            <ul>
              <li>li. Item</li>
              <li>li. Item</li>
              <li>li. Item</li>
              <li>li. Item</li>
            </ul>
          </div>

          <div class="col-md-6">
            <h3>ol. Ordered List:</h3>
            <ol>
              <li>li. First item</li>
              <li>li. Second item</li>
              <li>li. Third item</li>
              <li>li. Fourth item</li>
            </ol>
          </div>


          <div class="col-md-12">
            <h3 id="buttons">Buttons</h3>
            <a href="javascript:void(0)" class="btn btn-raised btn-lg">Large button</a>
            <a href="javascript:void(0)" class="btn btn-raised">Medium button</a>
            <a href="javascript:void(0)" class="btn btn-raised btn-sm">Small button</a>
          </div>


          <div class="col-md-12">
            <h3 id="forms">Forms</h3>
            <div class="col-md-6">
              <div class="well bs-component">
                <form class="form-horizontal">
                  <fieldset>
                    <legend>Legend</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Email</label>

                      <div class="col-md-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-offset-2 col-md-10">
                        <div class="togglebutton">
                          <label>
                            <input type="checkbox" checked=""> Toggle button
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="textArea" class="col-md-2 control-label">Textbox</label>

                      <div class="col-md-10">
                        <textarea class="form-control" rows="1" id="textArea"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="select111" class="col-md-2 control-label">Select</label>

                      <div class="col-md-10">
                        <select id="select111" class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-10 col-md-offset-2">
                        <button type="button" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
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

      <?php include_once 'footer.php';?>
