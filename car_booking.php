<?php
    include('header.php');
    include('connect.php');
    if(isset($_SESSION['user'])){
?>
<head>
    <link rel="stylesheet" href="CSS/lightbox.min.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
</head>
    <div class="container">
       <?php 
            $sqlcar = "select * from car_details";
            $runcar = mysqli_query($conn, $sqlcar);
            while($datacar = mysqli_fetch_array($runcar)){
        
        ?>
        <div class="row car-details">
            <div class="col-md-2 car-image">
               <a href="Images/Honda-City-Wide.jpg" data-lightbox="mygallery"><a href="Images/honda_cityvidtecmt_wide1.jpg" data-lightbox="mygallery"> <center><img src="Admin/Gallery/<?php echo $datacar['pic']; ?>" style="height: 120px;" alt="" class="img-responsive"></center></a></a>
            </div>
            <div class="col-md-8 details" style="border-right: 1px solid  gray; height: 120px;">
               <span style="float: left; font-weight: 600;"><h3><?php echo $datacar['name']; ?></h3>
                   <i class="fas fa-user"></i> <?php echo $datacar['seat']; ?> Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; <?php echo $datacar['type']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;<?php echo $datacar['bags']; ?> Bags | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Minimum <i class="fas fa-rupee-sign"></i><?php echo $datacar['minimum']; ?> | <?php echo $datacar['rate']; ?>
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                <?php echo $datacar['price']; ?>
                <p>
                    <center><a href="checkout.php?id=<?php echo $datacar['id']; ?>"><button class="btn btn-success">BOOK NOW</button></a></center>
                </p>
            </div>
        </div>                       
              <?php } ?>         
    </div>
    
   <!-- <div class="container">
        <div class="row car-details">
            <div class="col-md-2 car-image">
                <center><img src="Images/hyundai.jpg" style="height: 120px;" alt="" class="img-responsive"></center>
            </div>
            <div class="col-md-8" style="border-right: 1px solid  gray; height: 120px;">
                 <span style="float: left; font-weight: 600;"><h3>Maruti Alto K10</h3>
                   <i class="fas fa-user"></i> 5 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; Mini &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;2 Bags | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Minimum <i class="fas fa-rupee-sign"></i>900 for 100 KM | 10 Rs./KM
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                900
                <p>
                    <center><a href="checkout_maruti.php?id="><button class="btn btn-success">BOOK NOW</button></a></center>
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
                   <i class="fas fa-user"></i> 5 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; SUV &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;4 Bags  | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Minimum <i class="fas fa-rupee-sign"></i>1,500 for 100 KM | 20 Rs./KM
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                1,500
                <p>
                    <center><a href="checkout_hyundai.php?id="><button class="btn btn-success">BOOK NOW</button></a></center>
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
                   <i class="fas fa-user"></i> 9 Seater &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-car"></i>&nbsp; SUV &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-suitcase"></i>&nbsp;4 Bags | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Minimum <i class="fas fa-rupee-sign"></i>2,500 for 100 KM | 30 Rs./KM
               </span>
            </div>
            <div class="col-md-2 car-image price">
                <i class="fas fa-rupee-sign"></i>
                2,500
                <p>
                    <center><a href="checkout_tata.php?id="><button class="btn btn-success">BOOK NOW</button></a></center>
                </p>
            </div>
        </div>
    </div>-->
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