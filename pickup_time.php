<?php
    include('header.php');
    include('connect.php');
 if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile= $_POST['mobile'];
            $address = $_POST['address'];
            $drop = $_POST['Drop_location'];
            $pick_date = $_POST['pick_date'];           
            $drop_date = $_POST['drop_date'];
            $card_number = 0;
            
            
            $sql = "insert into user_journey (name, email, mobile, address, pick_date, drop_date, card_number, Drop_location) values ('$name', '$email', '$mobile', '$address', '$pick_date',  '$drop_date', '$card_number', '$drop')";
            $run = mysqli_query($conn, $sql);
            if($run){
                echo "<script> alert ('Your details have been saved');
                    window.location.href = 'car_booking.php';
                </script>";
            }
            else{
                echo "<script> alert('Failes'); </script>";
            }
        }
    if(isset($_SESSION['user'])){
       
?><body onload="document.details.address.focus();">
    

  <style>
      lable{
          font-size: 25px;
      }
      .form-group input{
          padding: 20px;
          font-size: 18px;
          width: 75%;
      }    
      .container{
          background-color: #f1f1f1;
      }
</style>
  
   <div class="container">
       <div class="row"><form action="" method="post" name="details" autocomplete="off">
       <?php  
            $sqli = "select * from userdetails where email = '".$_SESSION['user']."'";
            $run = mysqli_query($conn, $sqli);
            while ($data = mysqli_fetch_array($run)){
        ?>
       <div class="col-md-6 column">
                      <h2>Personal Details</h2>
               <div class="form-group">
                   <lable>Full Name </lable>
                   <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" required="">
               </div>
               <div class="form-group">
                   <lable>Email </lable>
                   <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" required="">
               </div>
               <div class="form-group">
                   <lable>Mobile No. </lable>
                   <input type="text" class="form-control" name="mobile" value="<?php echo $data['mobile']; ?>" required="">
               </div>
    
           </div>
           <?php  } ?>
           <div class="col-md-6">
        <div class="form-group">
           <lable>Select Pick Up Location</lable>
            <input type="text" class="form-control" placeholder="Search Location..." name="address" id="search_address" required="">
            <script>
        function autocompleteAddress(){
            var input = document.getElementById('search_address');
            new google.maps.places.Autocomplete(input);
        }
</script>       
        </div>
        <hr>
        <div class="form-group">
            <lable>Select Drop Location</lable>
            <input type="text" class="form-control" placeholder="Search Location..." name="Drop_location" id="search_address" required="">
        </div><hr>
        <div class="form-group">
            <lable>Pickup Date</lable>
            <input type="text" class="form-control" name="pick_date" required="" id="date" placeholder="dd-mm-yyyy">
        </div>
        <hr>
       
        <hr>
        <div class="form-group">
            <lable>Drop Date</lable>
            <input type="text" class="form-control" name="drop_date" required="" id="date1" placeholder="dd-mm-yyyy">
        </div>
        <hr>
        
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="NEXT" name="submit">
        </div>
           </div>
           </form>
    </div>   
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoQ_S7YXN4Cj0DLsjE2SWKn5zWL4WHoiw&libraries=places&callback=autocompleteAddress"></script>
 <script>
            $('#date').datepicker({
                minDate : 0,
                dateFormat: "dd-mm-yy"
            });
            $('#date1').datepicker({
                minDate : 0,
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                changeYear: true
            });
        </script>
        <center><p><b>Note: </b><sup style="color: red;">*</sup>Please enter Indian cities Only in the location sections, otherwise your booking has been rejected</p></center>
        </body>
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
