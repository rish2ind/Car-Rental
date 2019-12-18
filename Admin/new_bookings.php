<?php
    include('connect.php');
     $sql = "select * from user_journey where card_number <> 0";
    $run = mysqli_query($conn, $sql);
   
?>
   

   <html>
    <head>
        <title>Bookings</title>
        
        
         <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <style type="text/css">
            .jumbo{
                width: 25%;
                background: linear-gradient(lightblue, #2170ef );
                padding: 10px;
                margin-top: 20px;
                margin-left: 115px;
                font-size: 20px;
                border-radius: 10px;
                font-family: 'Century Gothic'; 
                font-weight: 500;
            }
        </style>
    </head>
    
    <body>
       <div class="jumbotron jumbo ">
           New Bookings
       </div>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-strip table-hover table-bordered">
                    <th>Id</th>
                    <th>Booking Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Pick Up Date</th>
                    <th>Drop Date</th>
                    <th>Drop Location</th>
                    <?php while( $data = mysqli_fetch_array($run))
                {
                    ?>
                    <tr>
                        <td><?php echo $data['id'];  ?></td>
                        <td><?php echo $data['booking_id'];  ?></td>
                        <td><?php echo $data['name'];  ?></td>
                        <td><?php echo $data['email'];  ?></td>
                        <td><?php echo $data['mobile'];  ?></td>
                        <td><?php echo $data['address'];  ?></td>
                        <td><?php echo $data['pick_date'];  ?></td>
                        <td><?php echo $data['drop_date'];  ?></td>
                        <td><?php echo $data['Drop_location'];  ?></td>
                    </tr>
                    
                    <?php   } ?>
                </table>
            </div>
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>