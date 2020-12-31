// define const and local variable
const header = document.querySelector(".site-header");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

// change the background when the header is not on the top of the page ( at the page loading )
if ( window.pageYOffset >= 50 ){
  header.style = "background:rgba(23,23,23,0.8)"
}else {
  header.style = "background:transparent"
}

// Remove Menu when scroll down and apear when scroll up
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
      header.classList.remove(scrollUp);
      return;
    }
    if (currentScroll > lastScroll && !header.classList.contains(scrollDown)) {
      // down
      header.classList.remove(scrollUp);
      header.classList.add(scrollDown);
    } else if (currentScroll < lastScroll && header.classList.contains(scrollDown)) {
      // up
      header.classList.remove(scrollDown);
      header.classList.add(scrollUp);
    }
    lastScroll = currentScroll;
    

  });


// adding slacknav function to display slacknav menu before the header ( for Mobile menu )
/** Using jquery .scroll() event to change the background color of the header when scroling 
 * ---> ( simpler than using an event listner )  */
 jQuery(document).ready(function($){

    // Display Slacknav Menu ( Mobile Menu )
    $(function(){
        $('#menu-menu-nav').slicknav();
    });

    // call the Owl initializer function
    $(document).ready(function(){
        $(".testimonials").owlCarousel();
        $(".owl-carousel").owlCarousel();

    });
    var testimonials = $('.testimonials');
    testimonials.owlCarousel({ 
      items:1,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      nav:false,
      margin:10,
      responsive:{
        0:{
            items:1
        }
      }
    })
    
    // autoplay the owlcrousel and stop when hover
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items:3,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      nav:false,
      margin:10,
      responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3
        }
      }

    });
   
    
    // Changing the header background color when scroll
    var $header = $('.site-header')
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 50 ) {
            $header.css('background','rgba(23,23,23,0.8)');
        } else {
            $header.css('background','transparent');
        }
    });
})

