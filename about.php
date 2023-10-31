<?php 
   $con=mysqli_connect("localhost","root","","cabapp");
   $qer=mysqli_query($con,"select * from distance");
session_start();

if (empty($_SESSION['userId']))
{
 $userId = NULL;    
}else{
  $userId = $_SESSION['userId'];
}
include 'header/header.php';
?>
<nav style="background-color: #000000" class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">Cab App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="about.php">About us</a>
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

<header style="background-color:#CAC531;" class="text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Meet the Team</h1>
  </div>
</header>


<div class="container">
  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>


</div>


<?php 
include 'footer/footer.php';
?>