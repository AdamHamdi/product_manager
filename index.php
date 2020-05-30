<?php

include_once 'api/product.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">PRODUCT MANAGER</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create-product.php">New Product</a>
                </li>
                
                
              </ul>
              
            </div>
        
        </nav>
        <div class="container">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name </th>
                    <th scope="col">Description</th>
                    <th scope="col">quantity</th>
                    <th scope="col" class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                $stmt=readAllProduct();
               while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
                
                <tr>
                    <th scope="row"><?php echo $row['ID'];?></th>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['qte'];?></td>
                    <td  class="text-center">
                    
                   
                        <a href="show.php?id=<?php echo $row['ID'];?>" class="btn btn-dark btn-sm"><i class ="fas fa-eye"></i>Show</a>
                        <a href="update.php?id=<?php echo $row['ID'];?>" class="btn btn-info btn-sm"><i class ="fas fa-edit"></i>Update</a>
                        
                    <button class="btn btn-danger btn-sm"
                    onclick= " if (confirm ('Delete product?')){
                               var id='<?php echo $row['ID'];?>';
                                location.href='delete-product.php?id='+id;
                     }
                    
                    
                    
                    "
                    
                    
                    
                    >

                    <i class ="fas fa-trash"></i>Delete
                    </button>
                    </td>
                  </tr>
             <?php
               }
                ?>
                
                  
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>