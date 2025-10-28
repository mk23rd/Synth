





































$(window).resize(function(){location.reload();});

// Reveal bottom controls after DOM ready to avoid initial flash
$(document).ready(function(){
  $('.left-btn, .right-btn, .showcase-suggestions').css('opacity', '1');
});

var image1_top = document.querySelector(
  ".wrapper section .home-images .image1-container .image1-top-color"
);
var image1_bottom = document.querySelector(
  ".wrapper section .home-images .image1-container .image1-bottom-color"
);
var image1_img = document.querySelector(
  ".wrapper section .home-images .image1-container img"
);
var home_description = document.querySelector(
  ".wrapper section .home-description"
);

$(document).ready(function () {
  $(image1_top).delay(100).animate({
    left: "26.75%",
  });
  $(image1_top).css("display", "Block");

  $(image1_bottom).delay(100).animate({
    left: "26.75%",
  });
  $(image1_bottom).css("display", "Block");
  
  $(image1_img).delay(600).fadeIn(500);
  $(home_description).delay(600).fadeIn(500);
});

var image2_top = document.querySelector(
  ".wrapper section .home-images .image2-container .image2-top-color"
);
var image2_bottom = document.querySelector(
  ".wrapper section .home-images .image2-container .image2-bottom-color"
);
var image2_img = document.querySelector(
  ".wrapper section .home-images .image2-container img"
);

$(document).ready(function () {
  $(image2_top).delay(100).animate({
    left: "5%",
  });
  $(image2_top).css("display", "Block");

  $(image2_bottom).delay(100).animate({
    left: "5%",
  });
  $(image2_bottom).css("display", "Block");
  $(image2_img).delay(600).fadeIn(500);
});

var image3_top = document.querySelector(
  ".wrapper section .home-images .image3-container .image3-top-color"
);
var image3_bottom = document.querySelector(
  ".wrapper section .home-images .image3-container .image3-bottom-color"
);
var image3_img = document.querySelector(
  ".wrapper section .home-images .image3-container img"
);

$(document).ready(function () {
  $(image3_top).delay(100).animate({
    top: "569px",
  });
  $(image3_top).css("display", "Block");

  $(image3_bottom).delay(100).animate({
    top: "569px",
  });
  $(image3_bottom).css("display", "Block");
  $(image3_img).delay(600).fadeIn(500);
});

var wrap_left_picture = document.querySelector(".wrap-left-picture");
var wrap_right_picture = document.querySelector(".wrap-right-picture");
var wrapper = document.querySelector(".wrapper");
var showcase = document.querySelector(".showcase");

$(window).on('scroll', function() {
  var y = jQuery(this).scrollTop();
  $(wrap_left_picture).toggleClass('slide-in-left', y > 700 && y < 1300);
  $(wrap_right_picture).toggleClass('slide-in-right', y > 700 && y < 1300);
});


$(document).scroll(function () {

    if ($(document).scrollTop() > 700 && $(document).scrollTop() < 1300)
     {

      $(showcase).delay(15).fadeIn(800);
      $('.left-btn, .right-btn, .showcase-suggestions').fadeIn(200);

     }
     else
     {

      $(showcase).delay(15).fadeOut(800);
      $('.left-btn, .right-btn, .showcase-suggestions').hide();

     }

});




var jacket_red = document.querySelector(
  ".showcase-image-container .big-red-jacket img"
);
var jacket_brown = document.querySelector(".sample1");
var jacket_green = document.querySelector(".sample2");
var jacket_black = document.querySelector(".sample3");

$(document).ready(function () {
  function metrics($el){
    return {
      top: $el.offset().top,
      left: $el.offset().left,
      width: $el.outerWidth(),
      height: $el.outerHeight()
    };
  }

  function swapJackets($mainImg, $thumbImg){
    var a = $mainImg, b = $thumbImg;
    var aM = metrics(a), bM = metrics(b);

    var aClone = a.clone().appendTo('body');
    var bClone = b.clone().appendTo('body');

    aClone.css({position:'absolute', top:aM.top, left:aM.left, width:aM.width, height:aM.height, 'z-index': 9999});
    bClone.css({position:'absolute', top:bM.top, left:bM.left, width:bM.width, height:bM.height, 'z-index': 9999});

    a.css('visibility','hidden');
    b.css('visibility','hidden');

    aClone.animate({ top:bM.top, left:bM.left, width:bM.width, height:bM.height }, 500);
    bClone.animate({ top:aM.top, left:aM.left, width:aM.width, height:aM.height }, 500, function(){
      // swap sources on originals
      var aSrc = a.attr('src');
      a.attr('src', b.attr('src'));
      b.attr('src', aSrc);

      // apply consistent enlarged scale based on which thumbnail was clicked
      var targetWidth = 550; // default enlarged size
      if (b.is('.sample2')) { // green
        targetWidth = 420; // slightly smaller
      } else if (b.is('.sample3')) { // black
        targetWidth = 600; // larger
      } else if (b.is('.sample1')) { // brown
        targetWidth = 550; // default
      }
      a.css('width', targetWidth + 'px');

      // nudge green enlarged jacket slightly to the right
      if (b.is('.sample2')) {
        var currentLeft = parseInt(a.css('left')) || 0;
        a.css('left', (currentLeft + 90) + 'px');
      }

      a.css('visibility','');
      b.css('visibility','');
      aClone.remove();
      bClone.remove();
    });
  }

  $(jacket_red).click(function () {
    if ($(jacket_brown).css("width") == "500px") {
      swapJackets($(jacket_red), $(jacket_brown));
    }

    if ($(jacket_green).css("width") == "420px") {
      swapJackets($(jacket_red), $(jacket_green));
    }

    if ($(jacket_black).css("width") == "1000px") {
      swapJackets($(jacket_red), $(jacket_black));
    }
  });

  $(jacket_brown).click(function(){ swapJackets($(jacket_red), $(jacket_brown)); });
  $(jacket_green).click(function(){ swapJackets($(jacket_red), $(jacket_green)); });
  $(jacket_black).click(function(){ swapJackets($(jacket_red), $(jacket_black)); });
});

var redcolorbtn = document.querySelector(".red-color");
var greencolorbtn = document.querySelector(".green-color");
var bluecolorbtn = document.querySelector(".purple-color");
var yellowcolorbtn = document.querySelector(".yellow-color");

var redcolorjacket = document.querySelector(".big-red-jacket img");
var greencolorjacket = document.querySelector(".green-jacket img");
var bluecolorjacket = document.querySelector(".purple-jacket img");
var yellowcolorjacket = document.querySelector(".yellow-jacket img");

$(document).ready(function () {
  $(redcolorbtn).click(function () {
    $(redcolorjacket).fadeIn(800);
    $(greencolorjacket).fadeOut();
    $(bluecolorjacket).fadeOut();
    $(yellowcolorjacket).fadeOut();
  });

  $(greencolorbtn).click(function () {
    $(redcolorjacket).fadeOut();
    $(greencolorjacket).fadeIn(800);
    $(bluecolorjacket).fadeOut();
    $(yellowcolorjacket).fadeOut();
  });

  $(bluecolorbtn).click(function () {
    $(redcolorjacket).fadeOut();
    $(greencolorjacket).fadeOut();
    $(bluecolorjacket).fadeIn(800);
    $(yellowcolorjacket).fadeOut();
  });

  $(yellowcolorbtn).click(function () {
    $(redcolorjacket).fadeOut();
    $(greencolorjacket).fadeOut();
    $(bluecolorjacket).fadeOut();
    $(yellowcolorjacket).fadeIn(800);
  });
});


var cartbtn = document.querySelector(".cart-home-link");
var iframe = document.querySelector(".iframe");
var home_desc = document.querySelector(".home-description");

$(document).ready(function(){
    $(cartbtn).click(function(){
        $(iframe).slideToggle("slow");
        if($(home_desc).css("z-index") == "1"){
          $(home_desc).css('z-index','-1');
        }
        else{
          $(home_desc).css('z-index','1');
        }
    })
});
