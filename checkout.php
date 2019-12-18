<?php
    include('header.php');
    include('connect.php');
    if(isset($_SESSION['user'])){
        $id = $_REQUEST['id'];
        $sqlcheckout = "select * from car_details where id = '$id'";
        $runcheckout = mysqli_query($conn, $sqlcheckout);
?>

<div class="container">
    <div class="row"><?php $datacheckout = mysqli_fetch_array($runcheckout); ?>
        <div class="col-md-7 checkout">
            <h3>Checkout</h3>
            <hr>
            <span style="font-size: 18px; font-family: 'Arial';">Booking Fee</span><br>Booking fee excludes fuel cost
            <span style="float: right; font-size: 18px; color: #3754ec;"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $datacheckout['price']; ?></span>
            <hr>
            <div style="background-color: #c6ffc6; padding: 15px; font-size: 18px;">Total Amount : <span style="float: right;"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $datacheckout['price']; ?></span></div>
        </div>
        <div class="col-md-4 checkout" style="margin-left: 10px;">
           <center> <img src="Admin/Gallery/<?php echo $datacheckout['pic']; ?>" alt="" class="img-responsive"></center>
            <center><h2><?php echo $datacheckout['name']; ?></h2></center>
             <center>   <h4>(<?php echo $datacheckout['seat']; ?> SEATER)</h4></center>
            
        </div>
        <a href="final_booking.php?id=<?php echo $datacheckout['id']; ?>"><center><button class="btn btn-success" style="position: relative; top: -100px;">CHECKOUT</button></center></a>
    </div>
</div>




<?php

include('footer.php');
    }
else{
    echo "<script> 
            alert('Please login First');
            window.location.href = 'UserSignIn.php';
        </script>";
}
?>