// Check E-mail pattern if valid
/*Coded with the help of https://www.youtube.com/channel/UCbwXnUipZsLfUckBPsC7Jog*/
function validate() {
  var form = document.getElementById("contact-us-form");
  var email = document.getElementById("email").value;
  var emailVerify = document.getElementById("email-verify");
  var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if(email.match(pattern)){
    form.classList.add("valid");
    form.classList.remove("invalid");
    emailVerify.innerHTML = "Valid E-mail Address";
    emailVerify.style.color = "#00cc00";
  }
  else{
    form.classList.remove("valid");
    form.classList.add("invalid");
    emailVerify.innerHTML = "Please Enter Valid E-mail Address";
    emailVerify.style.color = "#cc0000";
  }
  if(email == ""){
    form.classList.remove("valid");
    form.classList.remove("invalid");
    emailVerify.innerHTML = "";
  }
}

//Show alert message when submitting the form

function alertMessage(){
  var message = document.getElementById("message").value;
  var email = document.getElementById("email").value;
  var text = document.getElementById("text");
  var emailVerify = document.getElementById("email-verify");

  text.style.padding= "0px 0px 5px 0px";

  if(email.length < 6){
    emailVerify.innerHTML = "Please Enter Your E-mail";
    emailVerify.style.color = "#cc0000";
    return false;
  }
  if (message.length < 1) {
    text.innerHTML = "Please Enter Your Message";
    text.style.color = "#cc0000";
    return false;
  }
  alert("Thank You For Your Message! --- You'll Be Redirected To Home Page.");
}
