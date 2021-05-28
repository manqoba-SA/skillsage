 //  Code for Responsive Nav Bar
 const navSlider = function(){
     const burgerMenu = document.querySelector(".burger-menu")
     const nav = document.querySelector(".nav-lists")

     burgerMenu.addEventListener("click", function(){
         nav.classList.toggle("nav-active")
     })
 }
 

 navSlider()
 
 
// Code for the Fixed Nav Bar
 $(document).ready(function(){ 
     $('.intro-page-js').waypoint(function(direction){
         if(direction == "down"){
             $('nav').addClass('fixed-nav')
         }else
         {
            $("nav").removeClass('fixed-nav')
         }
     })
    /*
    var waypoints = $('#handler-first').waypoint(function(direction) {
    notify(this.element.id + ' hit 25% from top of window') 
    }, {
    offset: '25%'
    })
    */

 })