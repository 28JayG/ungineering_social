var pass= document.getElementById("pass");
var email=document.getElementById("email");
var cpass= document.getElementById("conpass");
var but=document.getElementById("submit");
var user=document.getElementById("name");
var str=pass.length;

function validation(){

    if(user.value==""){
        document.getElementById("sname").innerHTML = "**Please fill the name field";
        document.getElementById("semail").innerHTML = "";
        document.getElementById("spass").innerHTML = "";
        document.getElementById("sconf").innerHTML = "";
        return false;
    }

    if(email.value==""){
        document.getElementById("sname").innerHTML = "";
        document.getElementById("semail").innerHTML = "**Please fill the email field";
        document.getElementById("spass").innerHTML = "";
        document.getElementById("sconf").innerHTML = "";
        return false;
    }

    if(pass.value==""){
        document.getElementById("sname").innerHTML = "";
        document.getElementById("semail").innerHTML = "";
        document.getElementById("spass").innerHTML = "**Please fill the password field";
        document.getElementById("sconf").innerHTML = "";
        return false;
    }

    if(cpass.value==""){
        document.getElementById("sname").innerHTML = "";
        document.getElementById("semail").innerHTML = "";
        document.getElementById("spass").innerHTML = "";
        document.getElementById("sconf").innerHTML = "**Please fill the password field";
        return false;
    }

    if(str<=8){
        document.getElementById("spass").innerHTML = "Need more than 8 or more characters";
        return false;
    }

    if(cpass.value!=pass.value){
        alert("Password not matched!");
        return false;
    }
}