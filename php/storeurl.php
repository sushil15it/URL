<?php
require_once("configer.php");
$tinyurl=NULL;
if( isset($_POST['l-url'])){
    $lurl=$_POST["l-url"];    
    $sqltiny="SELECT tinylink FROM shortner WHERE fulllink= '$lurl'";
    $result=mysqli_query($conn,$sqltiny);
    if (mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $tinyurl=$row['tinylink'];
        echo($tinyurl);
    }else{
        $insfull=" INSERT INTO shortner( fulllink, tinylink , click )
        VALUES('$lurl','0',0)";
        if (mysqli_query($conn,$insfull)){
            $lastid= mysqli_insert_id($conn);
            $tinyurl=$lastid."".rand(10000,99999);
            $updtiny="UPDATE shortner SET tinylink='$tinyurl' WHERE id='$lastid'";
            if (mysqli_query($conn,$updtiny)==TRUE){
                echo($tinyurl);
            }
        }

    }
}

?>