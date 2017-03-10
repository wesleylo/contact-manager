<?php
  include 'dbconfig.php';
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

   if($crud->create($fname,$lname,$email,$phone))
   {
    header("Location: create.php?inserted");
   }
   else
   {
    header("Location: create.php?failure");
   }
  }
  ?>
  <div class="clearfix"></div>

  <?php
  if(isset($_GET['inserted']))
  {
   ?>
      <div class="container">
   <div class="alert alert-info">
      <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
   </div>
   </div>
      <?php
  }
  else if(isset($_GET['failure']))
  {
   ?>
      <div class="container">
   <div class="alert alert-warning">
      <strong>SORRY!</strong> ERROR while inserting record !
   </div>
   </div>
      <?php
  }
  ?>




<!--
  $stmt = $db->prepare("INSERT INTO contacts
    (fname, lname, company, title, email, phone, address, city, state, zip, notes)
    VALUES
    (:fname, :lname, :company, :title, :email, :phone, :address, :city, :state, :zip, :notes)
  ");
  $stmt->execute(array(
    ':fname' => $_POST['fname'],
    ':lname' => $_POST['lname'],
    ':company' => $_POST['company'],
    ':title' => $_POST['title'],
    ':email' => $_POST['email'],
    ':phone' => $_POST['phone'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':notes' => $_POST['notes']
  ));
  $id = $db->lastInsertId();
  header('Location: http://localhost/index.php?id=' . $id . '&created=true');
?>
-->
