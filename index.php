<?php
    include('header.php');
?>
<div class="container-fluid">
            <div class="row">
                <img src="Images/car2.png" alt="" class="img-responsive">
            </div>
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
            <div class="row">
                <center><a href="pickup_time.php"><button style="background-color: transparent; border: 1px solid black; border-radius: 3px; margin-top: 20px; width: 400px; padding: 5px; color: black; font-family: 'Arial'; letter-spacing: 13px;" onmouseover="this.style.backgroundColor='#ffe4fb'" onmouseout="this.style.backgroundColor='transparent'"><h4>BOOK YOUR CAR</h4></button></a></center>
            </div>
        </div>
        <div class="container-fluid">
             <div class="row" style="text-align: center; margin-top: 25px;"><h3>HOW TO BOOK YOUR CAR</h3><span style="font-size: 16px;">
Drive yourself to an adventure and back in 4 simple steps</span></div>
            <div class="row" style="margin-top: 30px;">             
                <div class="col-md-3 work">
                   <i class="fas fa-car work-icon"></i>
                    <p style="text-align: center">BOOK</p>
                    <p>Search for and book a car on our site!</p>
                </div>
                <div class="col-md-3 work">
                   <i class="far fa-id-badge work-icon"></i>
                    <p style="text-align: center">UPLOAD LICENSE</p>
                    <p>Upload your driver&#39;s license, and pay a small security deposit.</p>
                </div>
                <div class="col-md-3 work">
                   <i class="fas fa-unlock-alt work-icon"></i>
                    <p style="text-align: center">UNLOCK</p>
                    <p>We SMS your car details 20 minutes before pickup. Unlock it via the Zoomcar app.

</p>
                </div>
                <div class="col-md-3 work">
                   <i class="fas fa-undo work-icon"></i>
                    <p style="text-align: center">RETURN</p>
                    <p>Return the car to the same location and fill the end checklist to end your trip.</p>
                </div>
            </div><?php if(isset($_SESSION['user'])){ ?>
            
            
            <?php } else { ?>
            <div class="row">
                <center><a href="UserDetails.php"><button style="padding: 8px; width: 170px; color: black; background-color: transparent; border: 1px solid black; border-radius: 3px; margin-bottom: 20px;" onmouseover="this.style.border='1px solid green'" onmouseout="this.style.border='1px solid black'">Sign Up</button></a></center>
            </div>
               <?php } ?>
                
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