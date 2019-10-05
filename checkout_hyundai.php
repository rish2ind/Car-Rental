<?php
    include('header.php');
    if(isset($_SESSION['user'])){
?>

<div class="container">
    <div class="row">
        <div class="col-md-7 checkout">
            <h3>Checkout</h3>
            <hr>
            <span style="font-size: 18px; font-family: 'Arial';">Booking Fee</span><br>Booking fee excludes fuel cost
            <span style="float: right; font-size: 18px; color: #3754ec;"><i class="fas fa-rupee-sign"></i>&nbsp;1,500</span>
            <hr>
            <div style="background-color: #c6ffc6; padding: 15px; font-size: 18px;">Total Amount : <span style="float: right;"><i class="fas fa-rupee-sign"></i>&nbsp;1,500</span></div>
        </div>
        <div class="col-md-4 checkout" style="margin-left: 10px;">
           <center> <img src="Images/mahindra1.jpg" alt="" class="img-responsive"></center>
            <center><h2>HYUNDAI CRETA</h2></center>
             <center>   <h4>(5 SEATER)</h4></center>
            
        </div>
        <a href="final_booking_hyundai.php"><center><button class="btn btn-success" style="position: relative; top: -100px;">CHECKOUT</button></center></a>
    </div>
</div>




<?php

include('footer.php');
    }
else{
    echo "<script> 
            alert('Please login First');
            window.location.href = 'UserDetails.php';
        </script>";
}
?>