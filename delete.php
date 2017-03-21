<?php include_once 'header.php';?>

<?php
if(isset($_GET['id'])) { // Gets and stores id of row to delete
  $edit_id = $_GET['id'];
  $crud->setEditID($edit_id);
}
if(isset($_POST['delete'])) {
  extract($crud->getEditID());
  if($crud->delete($edit_id)) {
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
  <h4 class="modal-title">Delete contact?</h4>
</div>

<div class="modal-body">
  <!-- Modal containing these contents will be opened in index.php, POST to edit.php when submitted, and redirect to index.php if entry is successfully entered into DB. -->
  <form action="delete.php" method="POST" class="form-horizontal">
    <fieldset>
      This cannot be undone.
        <div class="modal-footer form-group">
          <div class="col-md-7 col-md-offset-5">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button submit" name="delete" class="btn btn-primary">Delete</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
