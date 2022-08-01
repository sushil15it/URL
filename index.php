<?php
require_once("./php/configer.php");
if(isset($_GET["u"])){
$_POST['l-url']=NULL;
$tiny=$_GET["u"];
$sqllurl="SELECT * from shortner where tinylink='$tiny' ";
$result=mysqli_query($conn,$sqllurl);
if (mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $lurl=$row['fulllink'];
    $click=$row['click']+1;
    $sqlup="UPDATE shortner SET click='$click' WHERE tinylink='$tiny'";
    if (mysqli_query($conn,$sqlup)){
        header("location:$lurl");

    }
    
}else{
header("location:http://localhost/URL/home.php?error=invalid Tinyurl");
}}
else{ header("location:http://localhost/URL/home.php");
   
}
    
?>