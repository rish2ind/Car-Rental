<?php
    include('header.php');
?>
<div class="container-fluid">
            <div class="row">
                <img src="Images/car2.png" alt="" class="img-responsive">
            </div>
          <!--  <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"  style="position: relative; top:-300px; text-align: center; color: black; font-size: 25px; ">
                   
                        <p><sup><i class="fas fa-quote-left"></i></sup> Some beautiful paths can't be <br>discovered without getting lost. <sup><i class="fas fa-quote-right"></i></sup></p>            
                </div>
            </div>-->
        </div>
        <div class="container-fluid">
            <div class="row">
                <h1 style="text-align: center;">Vehicle</h1>
                <div class="col-md-3 cars"><img src="Images/mahindra1.jpg" alt="" class="img-responsive">
                    <p class="car-details">MEDIUM: SUV</p><p class="names">EXAMPLE OF THIS RANGE: HYUNDAI CRETA</p>
                  </div>
                <div class="col-md-3 cars"><img src="Images/hyundai.jpg" alt="" class="img-responsive">
                    <p class="car-details">SMALL: ECONOMY</p><p class="names">EXAMPLE OF THIS RANGE: ALTO K10</p>
                </div>
                <div class="col-md-3 cars"><img src="Images/tata.jpg" alt="" class="img-responsive"><p class="car-details">LARGE: SUV</p><p class="names">EXAMPLE OF THIS RANGE: TATA SAFARI</p></div>
                <div class="col-md-3 cars"><img src="Images/honda.jpg" alt="" class="img-responsive"><p class="car-details">LARGE: PREMIUM</p><p class="names">EXAMPLE OF THIS RANGE: HONDA CITY</p></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row"></div>
        </div>
       <div class="container-fluid" style="background-image: url(Images/ladhak.jpg);">
           <div class="row contact">
               
           <div class="col-md-6 contact">
         <a name="Contact"></a>   <h1 style="text-align: center; font-family: 'Arial'; color: white;">Contact Us</h1>
            
                <span style="color: gold;">Phone :</span> <span style="color: white;">+91 8560XXXXXX </span><br><br>
                <span style="color: gold;">Email :</span><span style="color: white;"> INFO@HOTEL.COM </span> <br><br>
                <span style="color: gold;">Address :</span><span style="color: white;"> Jacob Rd, Civil Lines, Jaipur, Rajasthan 302006 </span> <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.727619630101!2d75.78298191452059!3d26.912138266594702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db40b6ed16f5f%3A0x902e85e7d6dc03fb!2sJai+Mahal+Palace!5e0!3m2!1sen!2sin!4v1558615764072!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            <div class="col-md-6 contact">
                <h1 style="color: white; font-family: 'Arial'; text-align: center;">Feedback</h1>
                <p style="text-align: center; color: gold;">Give your feedback</p>
                
                <form action="" class="contact-form">
                    <div class="form-group ">
                        <lable style="color: gold;">Full Name : </lable>
                        <input type="text" class="form-control" required="" name="name">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Feedback : </lable>
                        <textarea name="feedback" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Submit" name="submit" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
            </div>
        </div>
        </div> 
<?php

    include('footer.php');
?>