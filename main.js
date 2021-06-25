// // Slider compétences 
// let sizeSlider = $( "div.slider figure img" ).length

// let count = 0;
   
// let sliderInterval = window.setInterval(function(){ 
//     if(count>sizeSlider*-500){
//         document.querySelector("div.slider figure").style.left = `${count}px`
//         count+= -500;
        
//     }else{
//         count = 0
//         document.querySelector("div.slider figure").style.left = `${count}px`
//     }
//   }, 1000);


// Back to top 
mybutton = document.getElementById("backToTopBTN");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function backToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}