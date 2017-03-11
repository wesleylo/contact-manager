<?php include 'header.php';?>

<?php
if(isset($_POST['btn-save']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $company = $_POST['company'];
  $title = $_POST['title'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $notes = $_POST['notes'];

  if($crud->create($fname, $lname, $company, $title, $email, $phone, $address, $city, $state, $zip, $notes))
  {
    // header("Location: index.php?page=".$total_no_of_pages."");
  }
  else
  {
    header("Location: index.php?failure");
  }
}
?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h4 class="modal-title">Create New Contact</h4>
</div>
<div class="modal-body">
  <form action="create.php" method="post" class="form-horizontal">
    <fieldset>
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
              <span style="color:#d2d2d2"><option value="" hidden="true" disabled selected>State</option></span>
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
          <label for="group" class="col-md-1 control-label">Groups</label> <!--Will implement later-->
          <div class="col-md-6">
            <div class="togglebutton">
              <label>
                <input type="checkbox" checked> Friends
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="row"></div>
        <div class="modal-footer form-group">
          <div class="col-md-7 col-md-offset-5">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <!-- <input type="submit" name="btn-save" class="btn btn-primary" value="Save"/> -->
            <button type="button submit" name="btn-save" class="btn btn-primary">Save</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
