<?php

include_once 'api/product.php';


$error=0;
if(isset($_POST['update_product'])){
$id=$_GET['id'];  
$name=$_POST['name'];
$description=$_POST['description'];
$qte=$_POST['quantity'];
 

$res=updateProduct($id, $name,$description,$qte);
if ($res)
 $error=1;

else
$error=2;

}


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
                if ($error==1){?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>Success!</strong> Product is updated!
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>
                 </div>
                <?php
                }else if ($error==2){
                 ?>
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong>Error!</strong> Product is not updated!
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                       </button>
                 </div>
                <?php } ?>
                 

                   <?php
              



                   $id=$_GET['id'];
                   $row=readProductByID($id);
                   
                   
                   
                   ?>
                
                
                
                   <form method="POST">
                    <div class="form-group">
                      <label for="name" >Name</label>
                      <input type="text"  name="name" class="form-control" value="<?php echo $row['name'];?>" id="name" >
                     
                    </div>
                    <div class="form-group">
                        <label for="description" >Description</label>
                        <input type="text"  name="description" class="form-control" value="<?php echo $row['description'];?>" id="description" >
                       
                      </div>
                      <div class="form-group">
                        <label for="quantity" >Quantity</label>
                        <input type="text" name="quantity" class="form-control" value="<?php echo $row['qte'];?>" id="quantity" >
                       
                      </div>
                   
                    <button type="submit" name="update_product" class="btn btn-primary btn-block">Update</button>
                  </form>


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