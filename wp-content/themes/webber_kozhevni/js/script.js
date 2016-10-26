// fancybox
jQuery.fn.getTitle = function() { 
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".fgallery"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// sliders
$('.slider-top').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  fade: true
});
$('.review-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  responsive: [
    {
      breakpoint: 995,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
        arrows: false
      }
    },
  ]
});

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// navgoco menu
$(document).ready(function() {
  $(".pro-vmenu").navgoco({
    caretHtml: ' ',
    accordion: false,
    openClass: 'open',
    slide: {
      duration: 400,
      easing: 'swing'
    }
  });
});

// send forms
function send_form (id, file, message) {
  $('#'+id).submit(function() {
    var str = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: '/mail/'+file+'.php',
      data: str,
      success: function(msg){
        if(msg == 'OK'){
          result = '<div class="form-sended">'+message+'</div>';
          $('#'+id).html(result);
        }else{
          result = msg;
          $('#'+id).html(result);
        }
      }
    });
    return false;
  });
}
send_form('form-id', 'phpform', 'message');

// change form title
function fform(title, value) {
  $('.modal-form-title').html(title);
  $('.modal-form-value').val(value);
}