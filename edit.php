<?php include_once 'header.php';?>

<?php // First create new entry, then, when that's working, edit existing entry
if(isset($_POST['create'])) {
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

  if($crud->create($fname, $lname, $company, $title, $email, $phone, $address, $city, $state, $zip, $notes)) {
    // header("Location: index.php?page=".$total_no_of_pages.""); // Figure out how to go to page where entry is?
    header("Location: index.php?success");
  }
  else {
    header("Location: index.php?failure");
  }
}
?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h4 class="modal-title">Create New Contact</h4>
</div>

<div class="modal-body">
  <form action="create.php" method="POST" class="form-horizontal"> <!-- Modal containing these contents will be opened in index.php, POST to create.php, and redirect to index.php. -->
    <fieldset>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <i class="material-icons">face</i>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" class="form-control fname" name="fname" placeholder="First Name" required>
          </div>
        </div>
        <div class="col-md-1"> <!-- Offsets weren't working. -->
          <div class="form-group"></div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <i class="material-icons">business</i>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" class="form-control" name="company" placeholder="Company" required>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Title" required>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <i class="material-icons">mail_outline</i>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <!-- <p class="help-block">A valid email contains an @ character</p> Remove? Not always informative. -->
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <i class="material-icons">phone_android</i>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Phone" pattern="^\d{3}-\d{3}-\d{4}$" required>
            <p class="help-block">Format: XXX-XXX-XXXX</p>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <i class="material-icons">place</i>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="City" required>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <select id="inputState" class="form-control" name="state" required>
              <option value="" hidden="true" disabled selected>State</option>
              <option value="AL">AL</option>
              <option value="AK">AK</option>
              <option value="AZ">AZ</option>
              <option value="AR">AR</option>
              <option value="CA">CA</option>
              <option value="CO">CO</option>
              <option value="CT">CT</option>
              <option value="DE">DE</option>
              <option value="DC">DC</option>
              <option value="FL">FL</option>
              <option value="GA">GA</option>
              <option value="HI">HI</option>
              <option value="ID">ID</option>
              <option value="IL">IL</option>
              <option value="IN">IN</option>
              <option value="IA">IA</option>
              <option value="KS">KS</option>
              <option value="KY">KY</option>
              <option value="LA">LA</option>
              <option value="ME">ME</option>
              <option value="MD">MD</option>
              <option value="MA">MA</option>
              <option value="MI">MI</option>
              <option value="MN">MN</option>
              <option value="MS">MS</option>
              <option value="MO">MO</option>
              <option value="MT">MT</option>
              <option value="NE">NE</option>
              <option value="NV">NV</option>
              <option value="NH">NH</option>
              <option value="NJ">NJ</option>
              <option value="NM">NM</option>
              <option value="NY">NY</option>
              <option value="NC">NC</option>
              <option value="ND">ND</option>
              <option value="OH">OH</option>
              <option value="OK">OK</option>
              <option value="OR">OR</option>
              <option value="PA">PA</option>
              <option value="RI">RI</option>
              <option value="SC">SC</option>
              <option value="SD">SD</option>
              <option value="TN">TN</option>
              <option value="TX">TX</option>
              <option value="UT">UT</option>
              <option value="VT">VT</option>
              <option value="VA">VA</option>
              <option value="WA">WA</option>
              <option value="WV">WV</option>
              <option value="WI">WI</option>
              <option value="WY">WY</option>
            </select>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" class="form-control" name="zip" placeholder="Zip" required>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <i class="material-icons">description</i>
          </div>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <textarea class="form-control" rows="1" name="notes" placeholder="Notes" required></textarea>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-group"></div>
        </div>
      </div>

      <div class="row"></div>
      <div class="modal-footer form-group">
        <div class="col-md-7 col-md-offset-5">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button submit" name="create" class="btn btn-primary">Save</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<script> $.getScript("//code.jquery.com/jquery-1.10.2.min.js");</script> <!-- getScript() fixes 'Synchronous XMLHttpRequest' warning. Did not include Bootstrap to fix error with modal closing. -->
<script> $.getScript("/js/material.min.js");</script>
<script> $.getScript("/js/ripples.min.js");</script>
<script>$.material.init();</script>
