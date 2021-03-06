<!-- Modified from http://www.codingcage.com/2015/04/php-pdo-crud-tutorial-using-oop-with.html. -->
<?php
error_reporting(E_ALL);

if (!ini_get('display_errors')) {
  ini_set('display_errors', 1);
}

function console_log( $data ){ // For debugging
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

class crud {
  private $db;

  function __construct($conn) {
    $this->db = $conn;
  }

  public function create($fname, $lname, $company, $title, $email, $phone, $address, $city, $state, $zip, $notes) {
    try {
      $stmt = $this->db->prepare("INSERT INTO contacts(fname, lname, company, title, email, phone, address, city, state, zip, notes) VALUES(:fname, :lname, :company, :title, :email, :phone, :address, :city, :state, :zip, :notes)");
      $stmt->bindparam(":fname",$fname); // As of now, fields can not be left blank; may change later?
      $stmt->bindparam(":lname",$lname);
      $stmt->bindparam(":company",$company);
      $stmt->bindparam(":title",$title);
      $stmt->bindparam(":email",$email);
      $stmt->bindparam(":phone",$phone);
      $stmt->bindparam(":address",$address);
      $stmt->bindparam(":city",$city);
      $stmt->bindparam(":state",$state);
      $stmt->bindparam(":zip",$zip);
      $stmt->bindparam(":notes",$notes);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function getRowByID($id) {
    $stmt = $this->db->prepare("SELECT * FROM contacts WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
    return $editRow;
  }

  public function setEditID($edit_id) { // Save id of row to edit in DB. Had problems with saved global variable being destroyed on navigation to new page.
    try {
      $stmt = $this->db->prepare("UPDATE edit_id SET edit_id=:edit_id");
      $stmt->bindparam(":edit_id",$edit_id);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function getEditID() {
    $stmt = $this->db->prepare("SELECT edit_id FROM edit_id");
    $stmt->execute();
    $edit_id_row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $edit_id_row;
  }

  public function update($id, $fname, $lname, $company, $title, $email, $phone, $address, $city, $state, $zip, $notes) {
    try {
      $stmt = $this->db->prepare("UPDATE contacts SET fname=:fname, lname=:lname, company=:company, title=:title, email=:email, phone=:phone, address=:address, city=:city, state=:state, zip=:zip, notes=:notes WHERE id=:id ");
      $stmt->bindparam(":id",$id);
      $stmt->bindparam(":fname",$fname);
      $stmt->bindparam(":lname",$lname);
      $stmt->bindparam(":company",$company);
      $stmt->bindparam(":title",$title);
      $stmt->bindparam(":email",$email);
      $stmt->bindparam(":phone",$phone);
      $stmt->bindparam(":address",$address);
      $stmt->bindparam(":city",$city);
      $stmt->bindparam(":state",$state);
      $stmt->bindparam(":zip",$zip);
      $stmt->bindparam(":notes",$notes);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function delete($id) {
    try {
      $stmt = $this->db->prepare("DELETE FROM contacts WHERE id=:id");
      $stmt->bindparam(":id",$id);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function dataview($query) { // Read: Renders DB entries to index.php.
    $stmt = $this->db->prepare($query);
    $stmt->execute();

    if($stmt->rowCount()>0) {
      while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 first-letter">
            <!-- Will print letter if entry is first alphabetically for its letter.
            Check if first alphabetically on create/update/destroy -->
            A
          </div>
          <div class="contact col-lg-11 col-md-11 col-sm-11 col-xs-11" id="<?php print($row['id']);?>"> <!-- Will read detailed contact card on click -->
            <div class="col-lg-4 col-md-3 col-sm-8 col-xs-5 name">
              <?php print($row['fname'] . " " . $row['lname']);?>
            </div>
            <div class="col-lg-4 col-md-4 hidden-col-sm hidden-col-xs email">
              <?php print($row['email']); ?>
            </div>
            <div class="col-lg-2 col-md-3 hidden-col-sm hidden-col-xs phone">
              <?php print($row['phone']); ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 hidden-col-xs tools">
              <a data-toggle="modal" href="delete.php?id=<?php print($row['id']);?>" data-target="#delete-modal"><i class="material-icons delete-tool">delete</i></i></a>
              <a data-toggle="modal" href="edit.php?id=<?php print($row['id']);?>" data-target="#edit-modal"><i class="material-icons edit-tool">mode_edit</i></a>
            </div>
          </div>
        </div>
        <?php
      }
    }
    else {
      ?>
      <div class="row">
        <div class="col-lg-12">
          <p>Nothing here...</p>
        </div>
      </div>
      <?php
    }
  }

  public function paging($query, $records_per_page) {
    $starting_position=0;
    if(isset($_GET["page"])) {
      $starting_position=($_GET["page"]-1)*$records_per_page;
    }
    $query2=$query." limit $starting_position,$records_per_page";
    return $query2;
  }

  public function paginglink($query,$records_per_page) {
    $self = $_SERVER['PHP_SELF'];

    $stmt = $this->db->prepare($query);
    $stmt->execute();

    $total_no_of_records = $stmt->rowCount();

    if($total_no_of_records > 0) {
      ?><ul class="pagination pagination-sm"><?php
      $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
      $current_page=1;
      if(isset($_GET["page"])) {
        $current_page=$_GET["page"];
      }
      if($current_page!=1) {
        $previous =$current_page-1;

        echo "<li><a href='".$self."?page=1'>First</a></li>";
        echo "<li><a href='".$self."?page=".$previous."'>«</a></li>";
      }
      for($i=1;$i<=$total_no_of_pages;$i++) {
        if($i==$current_page) {
          echo "<li><a href='".$self."?page=".$i."' style='color:red;'>".$i."</a></li>";
        }
        else {
          echo "<li><a href='".$self."?page=".$i."'>".$i."</a></li>";
        }
      }
      if($current_page!=$total_no_of_pages) {
        $next=$current_page+1;
        echo "<li><a href='".$self."?page=".$next."'>»</a></li>";
        echo "<li><a href='".$self."?page=".$total_no_of_pages."'>Last</a></li>";
      }
      ?></ul><?php
    }
  }
}
