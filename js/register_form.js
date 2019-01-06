var pass= document.getElementById("pass");
var cpass= document.getElementById("conpass");
var but=document.getElementById("submit");
$flag=0;

document.getElementById("submit").addEventListener("click",function(){
    while(cpass.value!= "" && pass.value!="" && cpass.value!=pass.value && $flag==0){
        alert("Password not matched!");
        $flag++;
    }
});