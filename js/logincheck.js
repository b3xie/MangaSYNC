function logincheck(){
    var logged 
    x = "none"
    y = "block"
    z = "Login"
    if (logged == false){
        document.getElementById('profile').style.display = x;
        document.getElementById('login-opt').style.display = y
        document.getElementById('login-opt').innerHTML = z
    } else if (logged == true) {
        document.getElementById('profile').style.display = y
    }
}