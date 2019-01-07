var pass= document.getElementById("pass");
var email=document.getElementById("email");

function validation(){
    if(email.value==""){
        document.getElementById("semail").innerHTML = "**Please fill the email field";
        document.getElementById("spass").innerHTML = "";
        return false;
    }

    if(pass.value==""){
        document.getElementById("semail").innerHTML = "";
        document.getElementById("spass").innerHTML = "**Please fill the password field";
        return false;
    }
}
