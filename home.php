<?php

require_once("./php/configer.php");
$_POST['l-url']=NULL;
$tiny=NULL;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>URl Shortener </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <div class="box">
    <h1 >URL -SHORTENER</h1>
    <?php
    if(isset($_GET['error'])){
        ?>
        <div class="er"><?php echo($_GET['error']. " try again!"); ?></div>
        <?php
    }
    ?>
    
    <form onsubmit = "event.preventDefault()"  method="post">
        <P>Enter a long url to make tinyURL </P>
        <input id="l-url" class="box" type="text" name="l-url" value="<?php echo($_POST["l-url"]) ?>">
        
        <div class="s-url" style=" display: no;" >
            <P>TinyURL </P>
        <input id ="t-url" class="box" type="text" name="t-url" value="<?php echo($tiny) ?>" >
        <div class="box2" onclick="visiturl()">Visit URL</div>
        <!-- <div class="box2" onclick="showinemail()" >Email</div> -->
        <div class="box2"><p onclick="myFunction()" >Copy text</p></div>
        <!-- <div class="email" style="display:none;">
        <p>Enter Email</p>
        <div class="box2"><input type="email" id="email" class="box" name="email"></div>
        <div class="box2"><button class="box box1" onclick="sendmail()">send</button>
        </div>       </div> -->
        
        <button  class="box box1" onclick= "window.location.assign('/URL/home.php')" >Shortener another</button>
        </div>
        <button  class="box box1" onclick="submitData()"  >Make TinyURL!</button>        
    </form>
<script src="js/home.js">

   

  </script>
</div>
    
</body>

</html>