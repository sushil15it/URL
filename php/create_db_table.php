<?php
$conn= mysqli_connect("localhost","root","");
if(!$conn){
    echo"error to connecting server please contact to the admin of website ";
}else{
    
    $sqlcdb="CREATE DATABASE url";
    if(mysqli_query($conn,$sqlcdb)){
        
        $conn= mysqli_connect("localhost","root","","url");
        if($conn){
            
            $sctable="CREATE TABLE shortner ( 
            id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fulllink VARCHAR(255) NOT NULL , 
            tinylink VARCHAR(50) NOT NULL , 
            click INT(5) NOT NULL DEFAULT '0')";
            if(mysqli_query($conn,$sctable)){
                header("location:http://localhost/URL/home.php");
                 }else{
                      echo("error in creating table\n");
                }
        }else{
            echo("error in connecting to db url\n");
        }
        
}}

?>