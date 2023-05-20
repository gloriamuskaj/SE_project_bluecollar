<?php
if(isset($_REQUEST['submit'])) {
 // Checking for Empty Fields
 if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['message'] == "")){
  // msg displayed if required field missing

  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
   
 } else {
 $name = $_REQUEST['name'];
 $subject = $_REQUEST['subject'];
 $message = $_REQUEST['message'];

 $stmt = $conn->prepare("insert into review(name, subject, message) values(?, ?, ?)");
        
 $stmt->bind_param("sss", $name, $subject, $message);
 
 $stmt->execute();

 $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';

}
}
?>

<!--Start Contact Us Row-->
<div class="col-md-8">
 <!--Start Contact Us 1st Column-->
 <form action="" method="post">
  <input type="text" class="form-control" name="name" placeholder="Name"><br>
  <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
  <textarea class="form-control" name="message" placeholder="Please write a review about how you feel about our services!" style="height:150px;"></textarea><br>
  <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
  <?php if(isset($msg)) {echo $msg; } ?>
 </form>
</div> <!-- End Contact Us 1st Column-->