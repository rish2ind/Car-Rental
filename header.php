<?php
    session_start();

?>
   <html>
    <head>
        <title>Car Rental</title>

                      <!--            Font Awesome Link            -->                       
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
       <!--    Bootstrap link of CSS    -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery CDN -->
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
                        <!--  External CSS File    -->
 <link rel="stylesheet" href="style.css">                        
    </head>
    <body>
                         <!------------------------------------   Header Section   ------------------------->
                        
     <!--   <div class="container-fluid">
            <div class="row navigation">
                <div class="col-md-3">
                    LOGO
                </div>
                <div class="col-md-9">
                    <nav class="navbar navbar-default navigation-main">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navb">
                                <i class="glyphicon glyphicon-align-center"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navb">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Sign In\ Sign Up</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> -->
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 logo">
                    <img src="Images/logo.png" alt="" height="100px" >
                </div>
                <div class="col-md-9"  style="padding: 0px; border: none; outline: none;">
                    <nav class="navbar navbar-default navigation">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navb">
                                <i class="glyphicon glyphicon-align-center"></i>    
                            </button>
                        </div>                                            
                        
                            <div class="navbar-collapse collapse" id="navb">
                            <ul class="nav navbar-nav navbar-left lists">
                                <li><a href="index.php" >Home </a></li> 
                                <li><a href="#">Booking</a></li>
                                <li><a href="about.php" >About</a></li>                                                                
                                <li><a href="#" >Contact</a></li>
                                
                                 <?php
                        
                                if(isset($_SESSION['user']))
                                {
                                    include('connect.php');
                                    
                                    $sql = "select * from userdetails where email = '".$_SESSION['user']."'";
                                    $res = mysqli_query($conn, $sql);
                                    $data = mysqli_fetch_array($res);
                                               
                                    ?>
                                    <li><a href="update_user.php?id=<?php echo $data['id']; ?>">Welcome : <?php echo $data['name']; ?></a></li>
                                     <li><a href="logout.php"><span class="glyphicon glyphicon-off" title="Logout"></span></a></li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <li><a href="UserDetails.php">Signup/login</a></li>
                                    <?php
                                    
                                }
                        ?>
                                    
                            </ul>
                        </div>                                                                                      
                    </nav>
                </div>
            </div>
        </div>
        