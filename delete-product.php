<?php




include_once 'api/product.php';

if (isset($_GET['id'])){
    $id=$_GET['id'];
    deleteProduct($id);
   
   } 
    header('location:index.php');
    


   


?>