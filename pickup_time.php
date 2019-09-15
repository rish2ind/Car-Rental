<?php
    include('header.php');
    if(isset($_SESSION['user'])){
        
?>
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
       <div class="row"><form action="" method="post">
       <div class="col-md-6 column">
                      <h2>Personal Details</h2>
               <div class="form-group">
                   <lable>Full Name </lable>
                   <input type="text" class="form-control" required="">
               </div>
               <div class="form-group">
                   <lable>Email </lable>
                   <input type="email" class="form-control" required="">
               </div>
               <div class="form-group">
                   <lable>Mobile No. </lable>
                   <input type="text" class="form-control" required="">
               </div>
    
           </div>
           <div class="col-md-6">
                 <h1>Select your location</h1>
    
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search Location..." name="address" id="search_address" required="">
            <script>
        function autocompleteAddress(){
            var input = document.getElementById('search_address');
            var Autocomplete = new google.maps.places.Autocomplete(input);
        }
</script>
        </div>
        <hr>
        <div class="form-group">
            <lable>Pickup Date</lable>
            <input type="date" class="form-control" name="pick_date" required="">
        </div>
        <hr>
        <div class="form-group">
            <lable>Pickup Time</lable>
            <input type="time" class="form-control" name="pick_time" required="">
        </div>
        <hr>
        <div class="form-group">
            <lable>Drop Date</lable>
            <input type="time" class="form-control" name="drop_date" required="">
        </div>
        <hr>
        <div class="form-group">
            <lable>Drop Time</lable>
            <input type="time" class="form-control" name="drop_time" required="">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="NEXT">
        </div>
           </div>
           </form>
    </div>   
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoQ_S7YXN4Cj0DLsjE2SWKn5zWL4WHoiw&libraries=places&callback=autocompleteAddress"></script>

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
