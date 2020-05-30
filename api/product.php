<?php
//include config

include_once 'config/db_config.php';


 //display all product
 function readAllProduct(){
     //open connection
$con=connect();
// if con==null:connection failed
if(!$con)
    die();
//query
$sql_query='SELECT * From product ORDER BY created_at DESC';
// statement
$stmt=$con->prepare($sql_query);
// execute query
$stmt->execute();

return $stmt;
}
//display product by ID


function readProductByID($id){
    //to do :sanitize params

 //open connection
 $con=connect();
 // if con==null:connection failed
 if(!$con)
     die();   
//query
$sql_query='SELECT * FROM product WHERE ID=? LIMIT 0,1';
// statement
$stmt=$con->prepare($sql_query);
// bind params
$stmt->bindParam(1,$id);
// execute query
$stmt->execute();
//read single product
$row=$stmt->fetch(PDO::FETCH_ASSOC);
return $row;

    }

//create product
     function createProduct($name,$description,$qte){
 //to do :sanitize params

 //open connection
 $con=connect();
 // if con==null:connection failed
 if(!$con)
     die();  
     //query
$sql_query='INSERT INTO `product`( `name`, `description`, `qte`) VALUES (?,?,?) ';
// statement
$stmt=$con->prepare($sql_query);
// bind params
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$description);
$stmt->bindParam(3,$qte);
// execute query
if ($stmt->execute()){
      return true;
    }
      return false;

}
// update function
function updateProduct($id,$name,$description,$qte){
    $update_at=date('y-m-d h:i:s');
//open connection
$con=connect();
if(!$con)
die();
// query
$sql_query='UPDATE `product` SET `name`=? ,`description`=? ,`qte`=? ,`update_at`=? WHERE ID=?';

//statement
$stmt=$con->prepare($sql_query);
//bind params
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$description);
$stmt->bindParam(3,$qte);
$stmt->bindParam(4,$update_at);
$stmt->bindParam(5,$id);
 
// executable query
if($stmt->execute())
return true;

return false;

}
// function delete
function deleteProduct($id){
    //open connection
    $con=connect();
    if(!$con)
    die();
    // query
    $sql_query='DELETE FROM `product` WHERE ID=?';
    //statement
    $stmt=$con->prepare($sql_query);
    //bind params
    
    $stmt->bindParam(1,$id);
    // executable query
    if($stmt->execute())
    return true;
    
    return false;
    
    }
    ?>
