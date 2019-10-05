<?php
    include('header.php');
    include('connect.php');
$id = $_REQUEST['id'];
        $sql = "select * from userdetails where id = '$id'";
        $run = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($run);
    if(isset($_SESSION['user'])){
        
?>
<style>
    body{
        background-color: #f1f1f1;
    }
</style>
<div class="container" style="background-color: white; border: 1px solid black;">
    <div class="row">
        <center><h1>My Account</h1></center>
    </div><hr>
    <div class="row">
           <div class="col-md-4">
            
            </div>
            <div class="col-md-4">
              <?php 
                    if(isset($_POST['update'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        $mobile = $_POST['mobile'];
                        $sql_update = "update userdetails set name = '$name', email = '$email', password = '$pass', mobile = '$mobile' where id = '$id'";
                        $run_update = mysqli_query($conn, $sql_update);
                        if($run_update){
                            echo "<script> 
                                alert('Your profile has been updated');
                                window.location.href = 'index.php';
                            </script>";
                        }
                        else{
                            echo "<script> 
                                alert('Failed');
                            </script>";
                        }
                    }                
                ?>
               <form action="" method="post">
                <div class="form-group">
                    <lable>Name : </lable>
                    <input type="text" class="form-control" value="<?php echo $data['name'];  ?>" name="name">
                </div>
                <div class="form-group">
                    <lable>Email : </lable>
                    <input type="email" class="form-control" value="<?php echo $data['email'];  ?>" name="email">
                </div>
                <div class="form-group">
                    <lable>Password : </lable>
                    <input type="text" class="form-control" value="<?php echo $data['password'];  ?>" name="password">
                </div>
                <div class="form-group">
                    <lable>Mobile : </lable>
                    <input type="number" class="form-control" value="<?php echo $data['mobile'];  ?>" name="mobile">
                </div>
                <div class="form-group">
                    
                    <center><input type="submit" class="btn btn-success" value="UPDATE" name="update"></center>
                </div>
            </form></div>
            <div class="col-md-4"></div>
    </div><hr>
    <div class="row">
        <center><h1>Your Bookings</h1></center>
        
        <table class="table table-bordered table-hover table-striped">
            <th>
                Name
            </th><th>
                Email
            </th><th>
                Mobile
            </th><th>
                Pick-Up Location
            </th><th>
                Pick-Up Date
            </th><th>
                Drop Date
            </th>
            <th>Drop Location</th>
            <?php
        
            $sql_fetch = "select * from user_journey where email = '".$_SESSION['user']."' AND card_number <> 0 order by id desc limit 1 ";
            $run_fetch = mysqli_query($conn, $sql_fetch);
            while($data_fetch = mysqli_fetch_array($run_fetch)){
        ?>
            <tr>
                <td><?php echo $data_fetch['name']; ?></td>
                <td><?php echo $data_fetch['email']; ?></td>
                <td><?php echo $data_fetch['mobile']; ?></td>
                <td><?php echo $data_fetch['address']; ?></td>
                <td><?php echo $data_fetch['pick_date']; ?></td>
                <td><?php echo $data_fetch['drop_date']; ?></td>
                <td><?php echo $data_fetch['Drop_location']; ?></td>  
            </tr>
                <?php } ?>  
        </table>
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