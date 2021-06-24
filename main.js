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


//Get the button:
mybutton = document.getElementById("backToTopBTN");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function backToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}