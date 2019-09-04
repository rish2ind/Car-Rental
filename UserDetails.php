<?php
    include('header.php');
    include('connect.php');
?>
<body class="signupuser">
                                        <!----------------------  Sign Up  -------------------->

<div class="container-fluid">
    <div class="row register">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h2 style="color: white; text-align: center;">Sign Up</h2>
                       <p style="text-align: center; color: gold;">Sign up to become our customer</p>
                    <form class="contact-form" method="POST" name="signup">
                    <div class="form-group ">
                        <lable style="color: gold;">Full Name : </lable>
                        <input type="text" class="form-control" id="fname" required="" name="name">
                        <span id="error_name"></span>
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Phone Number : </lable>
                        <input type="text" class="form-control" id="contact" required="" name="mobile">
                        <span id="error_contact" style="color: red;"></span>
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input id="myInput" type="password" class="form-control" required="" name="password">
                        <span onclick="myFunction()" style="float: right; position: relative; top: -23px; margin-right: 10px; cursor: pointer;">
                            <i class="fas fa-eye" style="display: none;" id="hide1"></i>
                            <i class="fas fa-eye-slash" id="hide2"></i>
                        </span>
                        <span id="error_pass" style="color: red;"></span>
                    </div>
                    
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign Up" id="signupform" name="signup" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
        </div>
    </div>
    </div>
     <?php
                       
                            
                        if(isset($_POST['signup'])){
                            $uname = $_REQUEST['name'];
                            $uemail = $_REQUEST['email'];
                            $upass = $_REQUEST['password'];
                            $ucontact = $_REQUEST['mobile'];
                                
                                $check = "select * from userdetails where email = '$uemail'";
                                $check_mobile = "select * from userdetails where mobile = '$ucontact'";
                            
                            $result_email = mysqli_query($conn, $check);
                            $result_mobile = mysqli_query($conn, $check_mobile);
                            
                            if(mysqli_num_rows($result_email) > 0){
                                echo "<script>alert ('Email id already exists');
                                window.location.href = 'UserDetails.php';</script>";
                            }
                            else if(mysqli_num_rows($result_mobile) > 0){
                                echo "<script>alert ('Mobile no. already exists');
                                window.location.href = 'UserDetails.php';
                                </script>";
                            }
                            else{
                            $sql = "insert into userdetails (name, email, mobile, password) values('$uname','$uemail','$ucontact','$upass')";
                            
                            $res = mysqli_query($conn, $sql);
                            if($res){
                                echo "<script>alert ('Please signin to proceed');
                                 window.location.href = 'UserSignIn.php';</script>";
                            }
                            else{
                                echo "<script> 
                                    alert ('Failed');
                                </script>";
                            }
                            }
                        }
                        
                  ?>
                   <center> <span style="color: gold; font-size: 18px;">Already a member ?</span> &nbsp;<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sign In</button></center>
                 <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <button class="close" type="button" data-dismiss="modal" style="border-radius: 100%; background-color: black; color: white; font-size: 17px; opacity: 1; height: 31px; text-align: center; text-shadow: none; width: 31px; margin-top: 5px;"><span>x</span></button>
                            <h2 class="modal-title">Sign In</h2>
                        </div>
                        <div class="modal-body">
                            <form action="" class="contact-form" method="post">
                    
                    <div class="form-group">
                        
                        <input type="email" class="form-control" required="" name="email" placeholder="Email address" style="background-color: #f1f1f1; padding: 10px; border: none;">
                    </div>
                    <div class="form-group">
                       
                        <input type="password" class="form-control" required="" name="password" placeholder="Enter password"  style="background-color: #f1f1f1; padding: 10px; border: none;">
                    </div>
                    
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign In" name="signin" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
             <?php
          
        
                        if(isset($_POST['signin'])){
                            $email = $_REQUEST['email'];
                            $password = $_REQUEST['password'];
                            
                            $log = "select * from userdetails where email = '$email' and password = '$password'";
                        
                            $run = mysqli_query($conn, $log);
                            $data=mysqli_fetch_array($run);
                            if($data)
                            {                                
                                $_SESSION['user'] = $data['email'];
                            
                                echo "<script>
                                    alert ('Login Successfull');
                                    window.location.href= 'index.php';
                                </script>";
                            }
                            else{
                                echo "<script>
                                    alert ('login failed');
                                </script>";
                            }
                        }
                
        ?>
        <br>
</body>
<?php
    include('footer.php');
?>