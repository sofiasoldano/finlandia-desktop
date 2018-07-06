$(document).ready(function() {
    
    /* Sliders */ 
    $('.recetas-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: false,
        itemWidth: 314,
        itemMargin: 15,
        minItems: 3
        
    });
    $('.productos-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: false,
        itemWidth: 314,
        itemMargin: 15,
        minItems: 3
    });  
    $('.steps-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        animationLoop: true,
        directionNav: true,
        minItems: 1
    });
    
    // Change color on scroll
    $(document).scroll(function() {
        headerActive();
    });
    
    // Close menu
	$(".menu-icon").click(function() {
       $(".menu").removeClass("show");   
        $(".menu-icon").removeClass("visible");
        $(".menu-header li a").removeClass("active");
        $(".menu .content .inner-content").addClass("hidden");
        headerActive();
    });
    
});

// Fixed Menu - change color
function headerActive(){
    var top_of_window = $(window).scrollTop();
    if( top_of_window != 0){
        $("header").addClass("active");
        $("header .logo-default").addClass("hidden");
        $("header .logo-active").removeClass("hidden");
    }
    else if(!$(".menu").hasClass("show")){
        $("header").removeClass("active");
        $("header .logo-default").removeClass("hidden");
        $("header .logo-active").addClass("hidden");
    }
}

//Submenu
function submenu(id, num){
    event.preventDefault();
    $(".menu").addClass("show"); 
    $(".menu .content .inner-content").addClass("hidden");
    $(id).removeClass("hidden");
    $(".menu-header a").removeClass("active");
    $(".menu-header li:nth-of-type(" + num + ") a").addClass("active");
    $("header").addClass("active");
    $("header .logo-default").addClass("hidden");
    $("header .logo-active").removeClass("hidden");
    $(".menu-icon").addClass("visible");
}