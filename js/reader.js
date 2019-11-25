
var height = window.innerHeight;
var width = window.innerWidth;
var max = height - 60;
function screen(){
    document.getElementById("display").style.maxHeight = "2000px";
    document.getElementById("display").style.maxWidth = width+"px";
    document.getElementById("right").style.minHeight = height+"px";
    document.getElementById("left").style.minHeight = height+"px";    
    document.getElementById("display").scr="/assets/chapters/test/01/2.jpg"
}
function crop(){
    if (document.getElementById("display").style.maxHeight == max+"px" || $cuck==true){
        document.getElementById("display").style.maxHeight = "2000px";
    }else{
    document.getElementById("display").style.maxHeight = max+"px";     
    $cuck = true;   
    }

}
function full() {
    Element.requestFullscreen()
  }
  function move(){
    document.getElementById("display").scr="/assets/chapters/test/01/2.jpg"
  }