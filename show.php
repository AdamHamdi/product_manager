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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="create-product.php">New Product</a>
                </li>
                
              </ul>
              
            </div>
        
        </nav>
        <div class="container">
           <div class="row mt-3">
               <div class="col-2"></div>
               <div class="col-8">
                   <h4><a href="index.php"><i class="fas fa-arrow-left"></i></a> Product</h4>
                   <?php
                   
                   $id=$_GET['id'];
                   $row=readProductByID($id)
                   
                   
                   
                   ?>
                   <div class="jumbotron jumbotron-fluid mt-4">
                    <div class="container">
                      <h1 class="display-4"><strong><?php echo $row['name'];?></strong></h1>
                      <p class="lead">Description:<?php echo $row['description'];?></p>
                      <p class="lead">Quantity:<?php echo $row['qte'];?></p>
                      <p class="lead">Created At:<?php echo $row['created_at'];?></p>
                      <p class="lead">Updeted At:<?php echo $row['update_at'];?></p>
                    </div>
                    <div class="float-right mr-5">
                        <a href="#" class="btn btn-danger btn-sm"><i class ="fas fa-eye"></i>delete</a>
                        <a href="update.php?id=<?php echo $row['ID'];?>" class="btn btn-info btn-sm"><i class ="fas fa-edit"></i>Update</a>
                    </div>
                  </div>
             

               </div>
               <div class="col-2"></div>



           </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>