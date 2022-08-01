
function submitData(){
    var vars="l-url="+document.getElementsByName('l-url')[0].value;
    var url="./php/storeurl.php"
    const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    $tiny="http://localhost/URL/?u=" +this.responseText;
    document.getElementById("t-url").value =$tiny;
    hide();
  }
  xhttp.open("POST", url);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(vars);
}  

  function visiturl(){
    var url=document.getElementsByName('l-url')[0].value;
    window.location.assign(url);
  }
function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("t-url");
   /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999);
     /* For mobile devices */

  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
    
    
    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  }
  function hide(){
    if (document.getElementById("t-url").value==""){
        document.getElementsByClassName("s-url")[0].style.display="none"
        
    }else{
        document.getElementsByClassName("box1")[1].style.display="none"
        document.getElementsByClassName("s-url")[0].style.display="block"
    }
}
hide();
// function showinemail() {
    //   var x = document.getElementsByClassName("email")[0];
      
    //   if (x.style.display === "none") {
    //     x.style.display = "block";
    //   } else {
    //     x.style.display = "none";
    //   }
    // }
    // function sendmail(){
    //     if(ValidateEmail()){
    //         Email.send({
    //         Host: "smtp.gmail.com",
    //         Username: "sender@email_address.com",
    //         Password: "Enter your password",
    //         To: 'receiver@email_address.com',
    //         From: "sender@email_address.com",
    //         Subject: "Sending Email using javascript",
    //         Body: "Well that was easy!!",
    //       })
    //         .then(function (message) {
    //           alert("mail sent successfully")
    //         });
    //     }
    // }
    // function ValidateEmail()
    // {
    //     var inputText=document.getElementById('email');
    // var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    // if(inputText.value.match(mailformat))
    // {
    // return true;
    // }
    // else
    // {
    // alert("You have entered an invalid email address!");
    // return false;
    // }
    // }