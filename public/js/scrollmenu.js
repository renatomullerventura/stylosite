$(function() {
    $('.scroll-menu li a[href^="#"]').on('click', function (e) {
        
        e.preventDefault();
        
        //$(document).off("scroll");
        
        $('.scroll-menu li a').each(function () {
            $(this).parent().removeClass('active');
        })
        
        $(this).parent().addClass('active');
        
        var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000, 'swing');
                //return false;
        }
        
    });
    
    $('.scroll').on('click', function(){
        
        var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top-65
            }, 1000, 'swing');
                //return false;
        }
        
    });
    
});


function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('.scroll-menu li a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if ((refElement.position().top-64) <= scrollPos && (refElement.position().top-64) + refElement.height() > scrollPos) {
          $('.scroll-menu li').removeClass("active");
          currLink.parent().addClass("active");
      }
      
  });
}

$(document).ready(function () {
  
    //MENU
    $(document).on("scroll", onScroll);
    
    $('.carousel').carousel();
    
    $(".button-collapse").sideNav();
    
    $('.side-nav li a').click(function(){
    
    $('.button-collapse').sideNav('hide');
    
    });
    
    //ISSO FAZ COM QUE O MENU FIQUE PRESO
    $('.menu_preso').pushpin();//{ top: $('.conteiner_topo').height() });
                  
    //ISSO INICIA O SLIDER
    $('.slider').slider();
    
    //INICIA PARALLAX
    $('.parallax').parallax();
    
    $('select').material_select();
    
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 100 // Creates a dropdown of 15 years to control year
    });
      
    $("#grade_de_aulas").animatedModal({
        modalTarget: 'grade_modal',
        animatedIn:'zoomIn',
        animatedOut:'bounceOut',
        color: '#9c27b0'
    });
    ////
    
    $('input[length]').characterCounter();
    
	$('.materialboxed').materialbox();
	
});