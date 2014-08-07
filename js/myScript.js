$(function() {
///////////////////////////////////
//   Navigation
///////////////////////////////////
    //Hide and show navigation
      $(".navbar.navbar-default.navbar-fixed-top").fadeOut(0);
    $(window).scroll(function(){
  if($(window).scrollTop() > 300){
      $(".navbar.navbar-default.navbar-fixed-top").fadeIn(0);
  }
});
    $(window).scroll(function(){
  if($(window).scrollTop() < 300){
      $(".navbar.navbar-default.navbar-fixed-top").fadeOut(.001);
  }
});
    //Highlight the current nav
//    $("#home a:contains('Home')").parent().addClass('active');
//    $("#register a:contains('Register')").parent().addClass('active');
//    
    $('.activeToggle').click(function() {
    var myClass = $(this).attr("class");
    if(myClass == "activeToggle target1"){
  $('.activeToggle').removeClass('active'); 
  $(".target1").addClass('active');
    }else if
        (myClass == "activeToggle target2"){
  $('.activeToggle').removeClass('active'); 
  $(".target2").addClass('active');
    }else if
        (myClass == "activeToggle target3"){
  $('.activeToggle').removeClass('active'); 
  $(".target3").addClass('active');
    }else if
        (myClass == "activeToggle target4"){
  $('.activeToggle').removeClass('active'); 
  $(".target4").addClass('active');
    }else if
        (myClass == "activeToggle target5"){
  $('.activeToggle').removeClass('active'); 
  $(".target5").addClass('active');
    }else 
    {}      
}); 
// Make menus drop down - not using -
// use if i need to implement a drop down
    $('ul.nav li.dropdown').hover(function() {
        $('.dropdown-menu', this).fadeIn();
    }, function() {
        $('.dropdown-menu', this).fadeOut('fast');    
    });//hover
    //-END navigation
    
///////////////////////////////////
//   Parallax Scrolling
///////////////////////////////////  
          $(function(){
      var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
    $('.bg2').css('height', (jumboHeight-scrolled) + 'px');
}
$(window).scroll(function(e){
    parallax();
});
      });
    
///////////////////////////////////
//   Body
///////////////////////////////////
    //Images
        var $window = $(window),
        $myClass = $('.col-sm-4.col-xs-6');
    
    function resize() {
        if ($window.width() < 480) {
            $myClass.removeClass('col-xs-6');
            return $myClass.addClass('col-xs-12');
        }
        $myClass.removeClass('col-xs-12');
        $myClass.addClass('col-xs-6');
    }
    $window
        .resize(resize)
        .trigger('resize');
    //images end
    
    //Activate form in colorbox modal window
    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%", fixed:true}); 
     //Activate form in Fontastic modal window
    $(".iframeFontastic").colorbox({iframe:true, width:"100%", height:"100%", fixed:true});
    
///////////////////////////////////
//   Carousel
///////////////////////////////////
    $('#artCarousel').carousel({
        interval: 5000,
        cycle: true
    });     
///////////////////////////////////
//   glyphicons
///////////////////////////////////
// Use this only if you need to. I am currently adding the color by CSS alone
//    $('.activeToggle').hover(
//       function(){ $(this).find(".glyphicon").addClass('gliphColor') },
//       function(){ $(this).find(".glyphicon").removeClass('gliphColor') }
//)
    
///////////////////////////////////
//   ColorBox Plugin
///////////////////////////////////
    $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%", fixed:true});
    $(".group2").colorbox({rel:'group2', transition:"none", width:"75%", height:"75%", fixed:true});
    $(".group1").colorbox({rel:'group1', transition:"none", width:"75%", height:"75%", fixed:true});
    
///////////////////////////////////
//   Footer
///////////////////////////////////
    //Back to top
    $('#backToTop').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
    });
});//jQuery is loaded