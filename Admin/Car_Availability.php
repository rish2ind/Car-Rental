<?php
    include('connect.php');
    $sql = "select * from car_details";
    $run = mysqli_query($conn, $sql);
?>
   <html>
    <head>
        <title>Gallery</title>
        
         <!--   Font Awesome Link   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
        
    <!-- Bootstrap CSS Link   -->  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
        
        <style type="text/css">
            img{
                width: 200px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr><th>Image</th>
                    <th>Name</th>
                    <th>Seater</th>
                    <th>Type</th>
                    <th>Bags</th>
                    <th>Minimum Rate</th>
                    <th>Rate</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                    </tr>
                    <?php while($data = mysqli_fetch_array($run))
                    {
    
                    ?>
                    <tr><td><img src="Gallery/<?php echo $data['pic']; ?>" style="height: 100px; width: 100px;" class="img-responsive" alt=""></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['seat']; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td><?php echo $data['bags']; ?></td>
                    <td><?php echo $data['minimum']; ?></td>
                    <td><?php echo $data['rate']; ?></td>
                    <td><?php echo $data['price']; ?></td>
                    <td><a href="edit-gallery.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                    <td><a href="delete_car.php?id=<?php echo $data['id']; ?>">Delete</a></td></tr>
                    <?php 
                    }
                    ?>
                </table>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </body>
</html>