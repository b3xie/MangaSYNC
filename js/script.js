document.addEventListener('DOMContentLoaded', function () {   
    var button = document.getElementById('scroll');
    button.onclick = function () {
        document.getElementById('slider').scrollLeft += 500;
    };
}, false);
document.addEventListener('DOMContentLoaded', function () {   
    var button = document.getElementById('scrollback');
    button.onclick = function () {
        document.getElementById('slider').scrollLeft = 0;
    };
}, false);



function menu(){
    var x = document.getElementById("nav");
    if(x.style.display == "none"){
        x.style.display = "block";
        x.style.opacity = "100%";
    }else{
    x.style.display = "none";
    }
    
}
