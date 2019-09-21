<?php
    include('header.php');
if(isset($_SESSION['user'])){
?>
<div class="container">
    <div class="row checkout">
        
            <div style="background-color: #c6ffc6; padding: 15px; font-size: 18px;">Total Amount : <span style="float: right;"><i class="fas fa-rupee-sign"></i>&nbsp;6,500</span>
        </div></div>
    <div class="row checkout" style="position: relative; top: -60px;">
        <div class="col-md-4" style="background-color: #39406d; border-radius: 10px;">
        <h3 style="color: white;">Payment Methods</h3><hr>
            <div class="payment">
                <center><form action="" method="post">
                   <h4 style="color: white;">Card Payment</h4>
                    <div class="form-group">                         
                        <input type="text" name="card_number" class="form-control" placeholder="Enter Card Number" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                    
                        <input type="text" name="CVV" class="form-control" placeholder="CVV" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
                        <input type="text" name="expire" class="form-control" placeholder="mm/yyyy" style="width: 300px; padding: 18px; margin-bottom: 5px;" required="">
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
    <a href="#"><center><button class="btn btn-success" style="position: relative; top: -100px;">BOOK NOW</button></center></a>
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

