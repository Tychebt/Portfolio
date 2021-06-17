/*let currentSlide = $( "div.slider figure" )
*/
let sizeSlider = $( "div.slider figure img" ).length

let count = 0;
//for(let i = 0; i<document.querySelectorAll( "div.slider figure img" ).length;i++){
   
let sliderInterval = window.setInterval(function(){ 
    if(count>sizeSlider*-500){
        document.querySelector("div.slider figure").style.left = `${count}px`
        count+= -500;
        
    }else{
        count = 0
        document.querySelector("div.slider figure").style.left = `${count}px`
    }
  }, 1000);



// let sizeSlider = $( "div.slider figure img" ).length

// let count = 0;
   
// let sliderInterval = window.setInterval(function(){ 
//     for(count = 0; i<sizeSlider*-500+500; i++){
//         document.querySelector("div.slider figure").style.left = `${count}px`
//         count+= -500;
//         console.log(count)
//     }

//   }, 1000);


/* Tant que count != sizeSliders
left = 500px */