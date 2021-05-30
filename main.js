/*let currentSlide = $( "div.slider figure" )
*/
let sizeSlider = $( "div.slider figure img" ).length

let count = 0;
// for(let i = 0; i<document.querySelectorAll( "div.slider figure img" ).length;i++){
    if(count < sizeSlider*500+500){
let sliderInterval = window.setInterval(function(){ 
    if(count>sizeSlider*-500+500){
        count+= -500;
        document.querySelector("div.slider figure").style.left = `${count}px`
    }else{
        count = 0
        document.querySelector("div.slider figure").style.left = `${count}px`
    }
  }, 1000);
}
