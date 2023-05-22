<?php
define('TITLE', 'Payment');
define('PAGE', 'Payment');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
} 

?>
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5">
        <div class="form-group">
          <h2>Payment Details</h3>
          <h6>Bank Account Details:  BlueCollar sh.a. (EPOKA University)

BKT
Account No: 20099635306
Account Currency: EURO
Euro IBAN: AL50 2081 1008 0000 0200 9963 5306
Swift Code: USALALTR</h6>
        <br>
        <h6>Bank Account Details:  BlueCollar sh.a. (EPOKA University)

Raiffeisen
Account No: 200996358493
Account Currency: EURO
Euro IBAN: AL50 2081 1008 8083 0200 0963 5374
Swift Code: USALALTR</h6>
        </div>
        <div class="form-group">
          <h3><a href="https://raiffeisen.al/">Raiffeisen</a></h3>
        </div>
        <div class="form-group">
          <h3><a href="https://otpbank.al/en/">OTP</a></h3>
        </div>
        <div class="form-group">
          <h3><a href="https://www.bkt.com.al/">BKT</a></h3>
        </div>
      </form>

    </div>

  </div>
</div>
</div>
</div>

<?php
include('includes/footer.php'); 
?>