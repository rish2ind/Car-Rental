<?php
    include('header.php');
    include('connect.php');
    if(isset($_SESSION['user'])){
        if(isset($_POST['book'])){
            $card_number = $_POST['card_number'];
            $cvv = $_POST['CVV'];
            $expire = $_POST['expire'];
            $booking_id = $_POST['booking_id'];
            $sql = "update user_journey set booking_id = '$booking_id', card_number = '$card_number', CVV = '$cvv', expire = '$expire' where email = '".$_SESSION['user']."'";
            $run = mysqli_query($conn, $sql);
            if($run){
                echo "<script> alert('Your Booking has been confirmed'); 
                    window.location.href = 'index.php';
                </script>";
            }
            else{
                echo "<script> alert('Booking Failed');         
                </script>";
            }
        }
?>
<meta http-equiv="refresh" content="300;url=car_booking.php">
<body onload="document.payment.card_number.focus();">
    

<div class="container">
    <div class="row checkout">
        
            <div style="background-color: #c6ffc6; padding: 15px; font-size: 18px;">Total Amount : <span style="float: right;"><i class="fas fa-rupee-sign"></i>&nbsp;1,000</span>
        </div></div>
        <div class="row">
           <?php
            $driver_sql = "select * from driver_details";
            $driver_run = mysqli_query($conn, $driver_sql);    
            $driver_data = mysqli_fetch_array($driver_run);
        
        ?>
            <h2>Booking Details</h2>
            <lable><b>Name of Driver:  </b><input type="text" value="<?php echo $driver_data['Name']; ?>" readonly style="margin-left: 15px; text-align: center;"></lable><br>
            <lable><b>Mobile Number:  </b><input type="text" value="<?php echo $driver_data['Mobile']; ?>" readonly style="margin-left: 15px; margin-top: 10px; text-align: center;"></lable><br>
            <form action="" method="post" name="payment" onsubmit="return validate()">
            <lable><b>Booking Id:  </b><input type="text" name="booking_id" value="<?php echo mt_rand(10000, 99999); ?>" readonly style="margin-left: 15px; margin-top: 10px; text-align: center;"></lable>
        </div>
    <div class="row checkout" style="position: relative; top: -60px;">
        <div class="col-md-4" style="background-color: #39406d; border-radius: 10px;">
        <h3 style="color: white;">Payment Methods</h3><hr>
            <div class="payment">
                <center>
                   <h4 style="color: white;">Card Payment</h4>
                    <div class="form-group">
                        <input type="text" name="card_number" class="form-control" id="cnumber" placeholder="Enter Card Number" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                    
                        <input type="text" name="CVV" class="form-control" id="ccvv" placeholder="CVV" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                        <input type="text" name="expire" class="form-control" placeholder="mm/yyyy" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                        <input type="submit" class="btn btn-success" name="book" value="Book">
                    </div>
                </form></center>    
            </div>
    </div>    
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center><img src="Images/honda.jpg" alt="" class="img-responsive"></center>
                <center><h3>HONDA CITY</h3></center>
                <center><h4>( 5 SEATER)</h4></center>
        </div>
    </div>
    <a href="#"><center><button class="btn btn-success" style="position: relative; top: -100px;">BOOK NOW</button></center></a>
</div>

    <script src="validation.js"></script>
        <center><sup style="color: red">*</sup>Page will be redirected automaticaly to the Car Booking page after 300 seconds.</center>
</body>
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

