<?php
    include('header.php');
 include('connect.php');
if(isset($_SESSION['user'])){
    if(isset($_POST['book'])){
        $card_number = $_POST['card_number'];
        $cvv = $_POST['CVV'];
        $expire = $_POST['expire'];
        $sql = "update user_journey set card_number = '$card_number', CVV = '$cvv', expire = '$expire' where email = '".$_SESSION['user']."'";
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
        
            <div style="background-color: #c6ffc6; padding: 15px; font-size: 18px;">Total Amount : <span style="float: right;"><i class="fas fa-rupee-sign"></i>&nbsp;900</span>
        </div></div>
    <div class="row checkout" style="position: relative; top: -60px;">
        <div class="col-md-4" style="background-color: #39406d; border-radius: 10px;">
        <h3 style="color: white;">Payment Methods</h3><hr>
            <div class="payment">
                <center><form action="" name="payment" method="post" onsubmit="return validate()">
                   <h4 style="color: white;">Card Payment</h4>
                    <div class="form-group">                         
                        <input type="text" name="card_number" class="form-control" id="cnumber" placeholder="Enter Card Number" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                    
                        <input type="text" name="CVV" class="form-control" id="ccvv" placeholder="CVV" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                        <input type="text" name="expire" class="form-control" placeholder="mm/yyyy" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                        <input type="submit" class="btn btn-success" name="book" value="BOOK">
                    </div>
                </form></center>    
            </div>
    </div>    
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center><img src="Images/hyundai.jpg" alt="" class="img-responsive"></center>
                <center><h3>MARUTI ALTO K10</h3></center>
                <center><h4>( 5 SEATER)</h4></center>
        </div>
    </div>
   <a href="car_booking.php"><center><button class="btn btn-success" style="position: relative; top: -100px;">CANCLE</button></center></a>
</div>
 <center><sup style="color: red">*</sup>Page will be redirected automaticaly to the Car Booking page after 300 seconds.</center>
    <script src="validation.js"></script>
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

