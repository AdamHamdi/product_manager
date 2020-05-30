<?php
// database access("declaration des constantes")
define("DB_HOST","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_DATABASE_NAME","product_manager");

//function to connect
function connect(){
  try{
$con=new PDO("mysql:host=".DB_HOST.";dbname=".DB_DATABASE_NAME,DB_USERNAME,DB_PASSWORD);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $con;
  }
catch (PDOException $e){
    return null;
}
  


}