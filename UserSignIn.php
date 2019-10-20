  <?php
    include('header.php');
    include('connect.php');
?>
            <body class="signupuser" onload="document.signin_form.email.focus();">
                
            
             <div class="container-fluid" style="">
              <div class="row register">
              <div class="col-md-4"></div>
              <div class="col-md-4 ">
               <h2 style="color: white; text-align: center;">Sign In</h2>
               <p style="color: gold; text-align: center;">Sign in to your account</p>
            <div class="form-container">
                <form action="" class="contact-form" method="post" name="signin_form" autocomplete="off">
                    
                    <div class="form-group">
                        <lable style="color: gold;">Email : </lable>
                        <input type="email" class="form-control" required="" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <lable style="color: gold;">Password : </lable>
                        <input type="password" class="form-control" required="" name="password">
                    </div>
                    
                    <div class="form-group">
                    
                        <input type="submit" class="btn btn-info" value="Sign In" name="signin" style="opacity: 1; margin-left: 40%;">
                    </div>
                </form>
                <center><a href="forgot_password.php" style="color: gold; font-size: 16px;">Forgot Password ?</a></center>
            </div>
                  <center><a href="UserDetails.php" style="color: gold; font-size: 16px;">New User ?</a></center>
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
                                    alert ('Email or password is incorrect');
                                </script>";
                            }
                        }
                
        ?>
                        <!-----------------------------   Sign Up    ------------------------->
                 
                        
                <div class="col-md-4 ">
                  
                </div>  
                  </div>
                 </div>
                </div>
        <script src="validateUserDetails.js"></script>
</body>