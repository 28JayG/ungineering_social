var pass= document.getElementById("pass");
var email=document.getElementById("email");
var cpass= document.getElementById("conpass");
var but=document.getElementById("submit");
$flag=0;

document.getElementById("submit").addEventListener("click",function(){
    if(cpass.value!= "" && pass.value!="" && cpass.value!=pass.value && $flag==0){
        alert("Password not matched!");
        return false;
    }
});