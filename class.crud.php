<?php
error_reporting(E_ALL);

if (!ini_get('display_errors')) {
 ini_set('display_errors', 1);
}
// modified from http://www.codingcage.com/2015/04/php-pdo-crud-tutorial-using-oop-with.html
class crud
{
  private $db;

  function __construct($conn)
  {
    $this->db = $conn;
  }

  public function create($fname, $lname, $company, $title, $email, $phone, $address, $city, $state, $zip, $notes)
  {
    try
    {
      $stmt = $this->db->prepare("INSERT INTO contacts(fname, lname, company, title, email, phone, address, city, state, zip, notes) VALUES(:fname, :lname, :company, :title, :email, :phone, :address, :city, :state, :zip, :notes)");
      $stmt->bindparam(":fname",$fname); // as of now, fields can not be left blank, may change later?
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
    catch(PDOException $e)
    {
      echo $e->getMessage();
      return false;
    }

  }

  public function getID($id)
  {
    $stmt = $this->db->prepare("SELECT * FROM contacts WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
    return $editRow;
  }

  public function update($id,$fname,$lname,$email,$phone)
  {
    try
    {
      $stmt=$this->db->prepare("UPDATE contacts SET
        first_name=:fname,
        last_name=:lname,
        email_id=:email,
        phone=:phone
        WHERE id=:id ");
        $stmt->bindparam(":fname",$fname);
        $stmt->bindparam(":lname",$lname);
        $stmt->bindparam(":email",$email);
        $stmt->bindparam(":phone",$phone);
        $stmt->bindparam(":id",$id);
        $stmt->execute();

        return true;
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
        return false;
      }
    }

    public function delete($id)
    {
      $stmt = $this->db->prepare("DELETE FROM contacts WHERE id=:id");
      $stmt->bindparam(":id",$id);
      $stmt->execute();
      return true;
    }

    /* paging */

    public function dataview($query) // read: renders entries to index.php
    {
      $stmt = $this->db->prepare($query);
      $stmt->execute();

      if($stmt->rowCount()>0)
      {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          ?>
          <div class="row">
            <div class="col-lg-1 first-letter">
              <!--Will print letter if entry is first alphabetically for its letter.
              Check if first alphabetically on create/update/destroy-->
              A
            </div>
            <div data-toggle="modal" href="create.php" data-target="#modal" class="contact container"> <!--read detailed contact-->
              <div class="col-lg-1">
                <!--Pic of contact that a user can upload will go here-->
                Pic
              </div>
              <div class="col-lg-3">
                <?php print($row['fname'] . " " . $row['lname']);?>
              </div>
              <div class="col-lg-3">
                <?php print($row['email']); ?>
              </div>
              <div class="col-lg-3">
                <?php print($row['phone']); ?>
              </div>
              <div class="col-lg-1">
                Offset
              </div>
            </div>
            <!-- <td><?php print($row['id']); ?></td>
            <td><?php print($row['fname']); ?></td>
            <td><?php print($row['lname']); ?></td>
            <td><?php print($row['email']); ?></td>
            <td><?php print($row['phone']); ?></td>
            <td align="center">
              <a href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
            </td>
            <td align="center">
              <a href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
            </td> -->
          </div>
          <?php
        }
      }
      else
      {
        ?>
        <tr>
          <td>Nothing here...</td>
        </tr>
        <?php
      }

    }

    public function paging($query,$records_per_page)
    {
      $starting_position=0;
      if(isset($_GET["page"]))
      {
        $starting_position=($_GET["page"]-1)*$records_per_page;
      }
      $query2=$query." limit $starting_position,$records_per_page";
      return $query2;
    }

    public function paginglink($query,$records_per_page)
    {

      $self = $_SERVER['PHP_SELF'];

      $stmt = $this->db->prepare($query);
      $stmt->execute();

      $total_no_of_records = $stmt->rowCount();

      if($total_no_of_records > 0)
      {
        ?><ul class="pagination pagination-sm"><?php
        $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
        $current_page=1;
        if(isset($_GET["page"]))
        {
          $current_page=$_GET["page"];
        }
        if($current_page!=1)
        {
          $previous =$current_page-1;

          echo "<li><a href='".$self."?page=1'>First</a></li>";
          echo "<li><a href='".$self."?page=".$previous."'>Previous</a></li>";
        }
        for($i=1;$i<=$total_no_of_pages;$i++)
        {
          if($i==$current_page)
          {
            echo "<li><a href='".$self."?page=".$i."' style='color:red;'>".$i."</a></li>";
          }
          else
          {
            echo "<li><a href='".$self."?page=".$i."'>".$i."</a></li>";
          }
        }
        if($current_page!=$total_no_of_pages)
        {
          $next=$current_page+1;
          echo "<li><a href='".$self."?page=".$next."'>Next</a></li>";
          echo "<li><a href='".$self."?page=".$total_no_of_pages."'>Last</a></li>";
        }
        ?></ul><?php
      }
    }
    // <ul class="pagination pagination-sm">
    //   <li class="disabled"><a href="javascript:void(0)">«</a></li>
    //   <li class="active"><a href="javascript:void(0)">1</a></li>
    //   <li><a href="javascript:void(0)">2</a></li>
    //   <li><a href="javascript:void(0)">3</a></li>
    //   <li><a href="javascript:void(0)">4</a></li>
    //   <li><a href="javascript:void(0)">5</a></li>
    //   <li><a href="javascript:void(0)">»</a></li>
    // </ul>
    /* paging */

  }
