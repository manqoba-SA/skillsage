
var username = document.getElementById("username");
username.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

username.onblur = function() {
  document.getElementById("message").style.display = "none";
}

var email = document.getElementById("email");
email.onfocus = function() {
  document.getElementById("message-email").style.display = "block";
}

email.onblur = function() {
  document.getElementById("message-email").style.display = "none";
}


var pws = document.getElementById("pws");
pws.onfocus = function() {
  document.getElementById("message-pws").style.display = "block";
}

pws.onblur = function() {
  document.getElementById("message-pws").style.display = "none";
}



// When the user starts to type something inside the password field
pws.onkeyup = function() {

    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(pws.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(pws.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(pws.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate names
    if(pws.value.length >= 10) {
    
      names.classList.remove("invalid");
      names.classList.add("valid");
    } else {
      names.classList.remove("valid");
      names.classList.add("invalid");
    }

  }
  