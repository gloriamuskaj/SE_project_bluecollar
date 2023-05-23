<?php
define('TITLE', 'Review');
define('PAGE', 'review');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?> 
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Requesters</p>
  <div class="col-sm-9 col-md-10 mt-5">
  <?php 
 $conn = new mysqli('localhost','root','','osms_db');
 $sql = "SELECT * FROM review";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
  echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
    echo '<tr>
    <th scope="row">'.$row["name"].'</th>
    <td>'.$row["subject"].'</td>
    <td>'.$row["message"].'</td>
    <td>
    <form action="" method="POST" class="d-inline">
    <input type="hidden" name="name" value='. $row["name"] .'><button type="submit" class="btn btn-secondary" name="name" value="name"><i class="far fa-trash-alt"></i></button></form>
    </td>
    </tr>';
   }
   echo '</tbody> </table>';
  } else {
    echo "0 Result";
  }
  if(isset($_REQUEST['name'])){
    $sql = "DELETE FROM review WHERE name = {$_REQUEST['name']}";
    if($conn->query($sql) === TRUE){
      // echo "Record Deleted Successfully";
      // below code will refresh the page after deleting the record
      echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
      } else {
        echo "Unable to Delete Data";
      }
    }
  ?>
</div>
</div>
</div>
</div>
</div>
<div><a class="btn btn-danger box" href="insertreq.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<?php
include('includes/footer.php'); 
?>