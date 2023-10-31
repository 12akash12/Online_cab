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
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="about.php">About us</a>
      <a data-toggle="modal" data-target="#callbackModal" class="nav-item nav-link" href="#">Enquiry</a>
      <a data-toggle="modal" data-target="#faretableModal" class="nav-item nav-link" href="#">Farechart</a>
      <a data-toggle="modal" data-target="#bookingModal" class="nav-item nav-link" href="#">Book Now</a>
      <?php if ($userId != NULL) { ?>
        <a class="nav-item nav-link" href="noticeBoard.php">Notification</a>
      <?php } ?>
    </div>
    <ul class="navbar-nav ml-auto">

      <?php if ($userId != NULL) { ?>
        <li><a class="nav-item nav-link active" href="#">Wallet Balance:&#8377;</a></li>
        <li><a class="nav-item nav-link active" id="walletAmount" href="#"></a></li>&nbsp;&nbsp;
        <li><a href="logout.php" id="logout" class="btn btn-success" style="background-color:#CAC531;color: black;">Log Out</a></li>&nbsp;&nbsp;
      <?php }else{ ?>
        <li><a href="login.php" id="login" class="btn btn-success" style="background-color:#CAC531;color: black;">Log In</a></li>&nbsp;&nbsp;
        <li><a href="register.php" id="signup" class="btn btn-success" style="background-color:#CAC531;color: black;">Sign Up</a></li>&nbsp;&nbsp;
      <?php } ?>
    </ul>
  </div>
</nav>


<div class="slider"> 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/pic1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/pic2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/pic3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="optin">
  <div class="container">
    <div class="row">

      <div class="col-sm-8">
        <p class="lead"><b>Download our app from Play store.</b> Your first ride is totaly on us as a gift!</p>
      </div>
      <div class="col-sm-4">      
        <a href="https://play.google.com"  style="background-color:#CAC531;color: black;"class="btn btn-lg" role="button"><i class="fab fa-google-play " > Download Now!</i></a>
      </div>
    </div>
  </div>
</div>

<section id="project-features">
  <div class="container">
    <h2>Why we are the leaders</h2>
    <p class="lead">Most preferred cabs in <b>Kolkata</b>, with a fare of <b>Rs 21 per km</b> and a 20% extra on the base fare during <i>10:00 PM</i> in the night to <i>5:00 AM</i> in the morning, Cab App prides itself on providing luxury at the cheapest price are going to build?</p>    
    <div class="row">
      <div class="col-sm-6">
        <img style="height: 220px; width: 220px;" src="images/icons/support.png" alt="Design">
        <h3>RELIABILITY </h3>
        <p style="font-size: 19px;">24hr cab availability Modern technologies for better experience &amp; safety Safe and reliable service at affordable pricing</p>
      </div>
      <div class="col-sm-6">
        <img style="height: 220px; width: 220px;" src="images/icons/quality.png" alt="Code">
        <h3>QUALITY OF SERVICE</h3>
        <p style="font-size: 19px;">Pool of well maintained cars to choose from Amenities for comfort &amp; convenience Well trained and experienced cab drivers</p>
      </div>        
    </div>  
  </div>
</section>

<section id="kudos">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8 ">
        <h2 align="center">What People Are Saying About Cab App</h2>
        <br>
        <br>
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="images/icons/anand.png" alt="Brennan">
          </div>
          <div class="col-sm-8">
            <blockquote>
              I found your service a 5 star experience. Our flight was delayed by two hours, so we arrived at seville airport at 2am. I emailed the support address, and received a prompt reply saying the agent would update my driver. The driver was awaiting at the arrivals hall for me, when we finally got their. All the people I communicated with were pleasant and cheerful. 
              <cite>&mdash; Anand, Permanent Customer Of Cab App</cite>
            </blockquote>
          </div>
        </div>
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="images/icons/raja.png" alt="Illustration of a man with a moustache">
          </div>
          <div class="col-sm-8">
            <blockquote>
              Excellent service from booking through to pick up and drop off to the airport. Internet booking was easy, questions we're answered by email promptly. Staff at airport and also pick up from apartment were friendly and helpful. From start to finish excellent service.
              <cite>&mdash; Raja, Permanent Customer Of Cab App</cite>
            </blockquote>
          </div>
        </div>
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="images/icons/ajay.png" alt="Illustration of a man with a beard">
          </div>
          <div class="col-sm-8">
            <blockquote>
              The taxi arrived on time, and drove us to the airport. We did get into a wrong taxi first. Then realized it was not the one we had ordered. He was not a happy camper when he had to back up.
              <cite>&mdash; Ajay, Permanent Customer Of Cab App</cite>
            </blockquote>
          </div>
        </div>
      </div> 
    </div>
  </div>
</section>
<section id="wallet">
  <div class="container">
    <h3>YOUR RIDE JUST MADE MORE COMFORTABLE</h3>
    <h2>INTRODUCING CASHLESS RIDE!</h2>
    <div class="section-header">
      <img style="height: 150px; width: 150px;" src="images/icons/wallet.png" alt="Rocket">
      <h2>Refill Your Wallet</h2><br>
      <button data-toggle="modal" data-target="#addmoneyModal" type="sumbit" style="background-color:#CAC531;color: black;" class="btn">Add Money Now!</button>
    </div>
  </div>
</section>


<div class="modal fade" id="callbackModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enquiry Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>    
      <div class="modal-body">
        Enter Your mobile number and we will call you back ASAP.
        <div class="form-group">
          <label for="phone" class="col-form-label">Phone Number:</label>
          <input type="text" class="form-control" name="phoneNumber" id="phone">
        </div>
        <?php if ($userId != NULL) { ?>
          <button type="button" id="callbackBtn" style="background-color:#CAC531;color: black;" class="btn">Send Number</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php }else{?>
          <h4>Please Login First!</h4>
          <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="addmoneyModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Money To Wallet</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>    
      <div class="modal-body">
        Enter Your amout and recharge your wallet right now!
        <div class="form-group">
          <label for="amount" class="col-form-label">Amount</label>
          <input type="text" class="form-control" name="amount" id="amount">
        </div>
        <?php if ($userId != NULL) { ?>
          <button type="button" id="addmoneyBtn" style="background-color:#CAC531;color: black;" class="btn">Add It!</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php }else{?>
          <h4>Please Login First!</h4>
          <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="bookingModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Book A Cab Right Now!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>    
      <div class="modal-body">
        Fill in the details to book instantly!
        <div class="form-group">
          <label for="pickup" class="col-form-label">Pickup</label>
          <select class="form-control pickup" name="pickup" id="pickup">
            <option value="barrackpore">Barrackpore</option>
            <option value="dunlop">Dunlop</option>
            <option value="agarpara">Agarpara</option>
          </select>
        </div>        
        <div class="form-group">
          <label for="drop" class="col-form-label">Drop</label>
          <select class="form-control drop" name="drop" id="drop">
            <option value="barrackpore">Barrackpore</option>
            <option value="dunlop">Dunlop</option>
            <option value="agarpara">Agarpara</option>
          </select>
        </div>
        <div class="form-group">
          <label for="pickupTime" class="col-form-label">PickupTime</label>
          <input type="datetime-local" class="form-control" name="pickupTime" id="pickupTime">
        </div>        
        <div class="form-group">
          <label class="col-form-label">Distance</label><span id="distance" name="distance"></span>
        </div>        
        <div class="form-group">
          <label class="col-form-label">Price</label><span id="price" name="price"></span>
          
        </div>
        <button type="button" id="viewpriceBtn" style="background-color:#CAC531;color: black;" class="btn">Calculate Price</button>
        <?php if ($userId != NULL) { ?>
          <button type="button" id="bookBtn" style="background-color:#CAC531;color: black;" class="btn">BOOK!</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php }else{?>
          <h4>Please Login First!</h4>
          <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="faretableModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Updated Fare Chart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>    
      <div class="modal-body">
        NOTE: Its &#8377; 4/km
        <br>
        <?php while($res=mysqli_fetch_assoc($qer)) { ?>
          <table class="table table-bordered">
            <thead style="background-color:#CAC531;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Distance</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?php echo $res['id']; ?></th>
                <td><?php echo $res['startLocation']; ?></td>
                <td><?php echo $res['endLocation']; ?></td>
                <td><?php echo $res['distance']; ?></td>
                <td><?php echo $res['price']; ?></td>
              </tr>
            </tbody>
          </table>
        <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" style="background-color:#CAC531;color: black;" class="btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('#bookBtn').hide();

    $('#callbackBtn').click(function(){
      var phoneNumber = $('#phone').val();
      if (phoneNumber !='') {
        $.ajax({
          url:"callbackData.php",
          method:"POST",
          data:{phoneNumber:phoneNumber},
          success:function(data){

            alert(data);
          }
        });
      }else{
        alert("phone number is required")
      }
    });    

    $('#addmoneyBtn').click(function(){
      var amount = $('#amount').val();
      if (amount !='') {
        $.ajax({
          url:"addmoneyData.php",
          method:"POST",
          data:{amount:amount},
          success:function(data){

            alert(data);
          }
        });
      }else{
        alert("Please enter an amount!");
      }
    });

    $('#viewpriceBtn').click(function(){
      getCalculatedPrice();
      getCalculatedDistance();
      $('#bookBtn').show();
      
    });

    $('#bookBtn').click(function(){
      var pickupSelected = $('.pickup option:selected').val();
      var dropSelected = $('.drop option:selected').val();
      var walletBalance = $('#walletAmount').html();
      var price = $('#price').html();
      var distance = $('#distance').html();
      var time = $('#pickupTime').val();
      if (price !=' none' && distance!=' none') {
        $.ajax({
          url:"bookingData.php",
          method:"POST",
          data:{"price":price,"distance":distance,"time":time,"pickupSelected":pickupSelected,"dropSelected":dropSelected,"walletBalance":walletBalance},
          success:function(data){

            alert(data);
          }
        });
      }else{
        alert("Please select properly");
      }
      $('#bookBtn').hide();
    });

    function getCalculatedPrice(){
      var pickupSelected = $('.pickup option:selected').val();
      var dropSelected = $('.drop option:selected').val();
      $.ajax({
        method: "POST",
        url: 'calculatePrice.php',
        data:{"pickupSelected":pickupSelected,"dropSelected":dropSelected},
        success: function(data){
          $('#price').html(data);
        }
      });
    }

    function getCalculatedDistance(){
      var pickupSelected = $('.pickup option:selected').val();
      var dropSelected = $('.drop option:selected').val();
      $.ajax({
        method: "POST",
        url: 'calculateDistance.php',
        data:{"pickupSelected":pickupSelected,"dropSelected":dropSelected},
        success: function(data){
          $('#distance').html(data);
        }
      });
    }

    function getData(){
      $.ajax({
        type: 'POST',
        url: 'updateWallet.php',
        success: function(data){
          $('#walletAmount').html(data);
        }
      });
    }
    getData();
    setInterval(function () {
      getData(); 
    }, 1000);
  }); 
</script>

<?php 
include 'footer/footer.php';
?>