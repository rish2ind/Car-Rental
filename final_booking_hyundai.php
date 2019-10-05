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
                window.location.href = 'user_profile.php';
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
        
            <div style="background-color: #c6ffc6; padding: 15px; font-size: 18px;">Total Amount : <span style="float: right;"><i class="fas fa-rupee-sign"></i>&nbsp;6,500</span>
        </div></div>
    <div class="row checkout" style="position: relative; top: -60px;">
        <div class="col-md-4" style="background-color: #39406d; border-radius: 10px;">
        <h3 style="color: white;">Payment Methods</h3><hr>
            <div class="payment">
                <center><form action="" method="post" name="payment" onsubmit="return validate()">
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
            <center><img src="Images/mahindra1.jpg" alt="" class="img-responsive"></center>
                <center><h3>HYUNDAI CRETA</h3></center>
                <center><h4>( 5 SEATER)</h4></center>
        </div>
    </div>
   <a href="car_booking.php"><center><button class="btn btn-success" style="position: relative; top: -100px;">CANCLE</button></center></a>
</div>
<!--
<script>
        function validate(){
            var card = document.payment.card_number.value;
            var cvv = document.payment.CVV.value;
           
            if(isNaN(card)){
                alert ('Card Number should contain digits only !!');
                card_number.focus();
                return false;
            }
            else if(card.length < 16 || card.length >16){
                alert ('Card should contain 16 digits only');
                card_number.focus();
                return false;
            }
            else if(isNaN(cvv)){
                alert ('CVV should contain digits only !!');
                CVV.focus();
                return false;
            }
            else if(cvv.length < 3 || cvv.length >3){
                alert ('CVV should contain 3 digits only');
                CVV.focus();
                return false;
            }
            else{
                return true;
            }
        }
    
    </script>
-->
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

