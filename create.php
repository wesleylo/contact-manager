<?php
  include 'database.php';
  $stmt = $db->prepare("INSERT INTO contacts
    (first, last, company, title, email, address, city, state, zip, phone, notes)
    VALUES
    (:first, :last, :company, :title, :email, :address, :city, :state, :zip, :phone, :notes)
  ");
  $stmt->execute(array(
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':company' => $_POST['company'],
    ':title' => $_POST['title'],
    ':email' => $_POST['email'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':notes' => $_POST['notes']
  ));
  $id = $db->lastInsertId();
  header('Location: http://localhost:8080/index.php?id=' . $id . '&created=true');
?>
