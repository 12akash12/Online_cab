<?php 
$con = mysqli_connect("localhost","root","","cabapp");
session_start();
$userId = $_SESSION["userId"]; 
if (empty($_SESSION['userId']))
{
 echo "<script>window.location.href='login.php';</script>";
}


include 'header/header.php'
?>


<nav style="background-color: #000000" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">Cab App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="about.php">About us</a>
      <a class="nav-item nav-link active" href="noticeBoard.php">Notification</a>
    </div>
    <ul class="navbar-nav ml-auto">

      <?php if ($userId != NULL) { ?>
        <li><a href="logout.php" id="logout" class="btn btn-success" style="background-color:#CAC531;color: black;">Log Out</a></li>&nbsp;&nbsp;
      <?php }else{ ?>
        <li><a href="login.php" id="login" class="btn btn-success" style="background-color:#CAC531;color: black;">Log In</a></li>&nbsp;&nbsp;
        <li><a href="register.php" id="signup" class="btn btn-success" style="background-color:#CAC531;color: black;">Sign Up</a></li>&nbsp;&nbsp;
      <?php } ?>
    </ul>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>


<?php 
$userId = $_SESSION["userId"];

$qer=mysqli_query($con,"select * from booking where userId = '$userId'"); 

?>

<div class="container-fluid">
 <?php 
 while($res=mysqli_fetch_assoc($qer)) { ?>
  <div class="alert alert-success">
  <strong>Booking confirmed!</strong> <?php echo " ".$res['driverFullName']." is going to pick you up on ".date('d/M/Y',strtotime($res['pickupTime']))." at ".date('h:i:s:A',strtotime($res['pickupTime']))." sharp.";?>
  </div>
<?php }  ?>
<div class="alert alert-warning">
  <strong>😉</strong> Hey homie chill for now!.
  </div>
</div>






<?php 
include 'footer/footer.php'
?>