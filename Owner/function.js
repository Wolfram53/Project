function passwordhide(){
    var x=document.getElementById("password")
    if(x.type==="password"){
        x.type="text";
    }else{
        x.type="password";
    }
    var x=document.getElementById("passwordagain")
    if(x.type==="password"){
        x.type="text";
    }else{
        x.type="password";
    }
}

