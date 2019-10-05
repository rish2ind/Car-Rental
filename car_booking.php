<?php
    include('header.php');
    include('connect.php');
    if(isset($_SESSION['user'])){
?>

    <div class="container">
        <div class="row car-details">
            <div class="col-md-2 car-image">
                <center><img src="Images/honda.jpg" style="height: 120px;" alt="" class="img-responsive"></center>
            </div>
            <div class="col-md-8 details" style="border-right: 1px solid  gray; height: 120px;">
               <span style="float: left; font-weight: 600;"><h3>Honda City</h3>
                   <i class="fas fa-user"></i> 5 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; Sedan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;4 Bags
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                6,500
                <p><?php 
           $sql = "select * from userdetails where email = '".$_SESSION['user']."'";
                                    $res = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($res); ?>
                    <center><a href="checkout.php?id=<?php echo $data['id']; ?>"><button class="btn btn-success">BOOK NOW</button></a></center>
                </p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row car-details">
            <div class="col-md-2 car-image">
                <center><img src="Images/hyundai.jpg" style="height: 120px;" alt="" class="img-responsive"></center>
            </div>
            <div class="col-md-8" style="border-right: 1px solid  gray; height: 120px;">
                 <span style="float: left; font-weight: 600;"><h3>Maruti Alto K10</h3>
                   <i class="fas fa-user"></i> 5 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; Mini &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;2 Bags
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                4,499
                <p>
                    <center><a href="checkout_maruti.php?id=<?php echo $data['id']; ?>"><button class="btn btn-success">BOOK NOW</button></a></center>
                </p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row car-details">
            <div class="col-md-2 car-image">
                <center><img src="Images/mahindra1.jpg" style="height: 120px;" alt="" class="img-responsive"></center>
            </div>
            <div class="col-md-8" style="border-right: 1px solid  gray; height: 120px;">
                 <span style="float: left; font-weight: 600;"><h3>Hyundai Creta</h3>
                   <i class="fas fa-user"></i> 5 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; SUV &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;4 Bags
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                7,599
                <p>
                    <center><a href="checkout_hyundai.php?id=<?php echo $data['id']; ?>"><button class="btn btn-success">BOOK NOW</button></a></center>
                </p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row car-details">
            <div class="col-md-2 car-image">
                <center><img src="Images/tata.jpg" style="height: 120px;" alt="" class="img-responsive"></center>
            </div>
            <div class="col-md-8" style="border-right: 1px solid  gray; height: 120px;">
                 <span style="float: left; font-weight: 600;"><h3>TATA Safari</h3>
                   <i class="fas fa-user"></i> 9 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; SUV &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;4 Bags
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                8,499
                <p>
                    <center><a href="checkout_tata.php?id=<?php echo $data['id']; ?>"><button class="btn btn-success">BOOK NOW</button></a></center>
                </p>
            </div>
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