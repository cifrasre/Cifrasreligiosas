function Menu(){
   if (document.querySelector('.menu').style.display == "flex"){
    document.querySelector('.menu').style.display = "none";
   }else{
    document.querySelector('.menu').style.display = "flex";
   }
}
function Menuzin(x) {
    if (x.matches) { 
      document.querySelector('.menu').style.display = "flex";
    } else {
        document.querySelector('.menu').style.display = "none";
    }
  }
  
  var x = window.matchMedia("(min-width: 900px)")
  Menuzin(x) 
  x.addListener(Menuzin)