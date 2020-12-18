function validateuser(){
    var username = document.getElementById("username");
    var userinfo = document.getElementById("userinfo");
    

    if( username.value.length > 4){
        userinfo.innerText = "Username is good!";
        userinfo.style.color = "green";
        userinfo.style.visibility = "visible";
        username.style.borderColor = "green";
        return true;    
    }
    else{
        userinfo.innerText = "Username must be at least 4 characters";
        userinfo.style.color = "#c80004";
        userinfo.style.visibility = "visible";
        username.style.borderColor = "#c80004";
    }
}
function validatepass(){
    var password = document.getElementById("password");
    var passwordinfo = document.getElementById("passwordinfo");

    if( password.value.length > 5){
        passwordinfo.innerText = "Password is good!";
        passwordinfo.style.color = "green";
        passwordinfo.style.visibility = "visible";
        password.style.borderColor = "green";
        return true;
    }
    else{
        passwordinfo.innerText = "Password must be at least 6 characters";
        passwordinfo.style.color = "#c80004";
        passwordinfo.style.visibility = "visible";
        password.style.borderColor = "#c80004";
    } 
}
