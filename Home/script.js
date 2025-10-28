$(window).resize(function(){location.reload();});



var img1 = document.querySelector(".wrapper1 .one img");
var img2 = document.querySelector(".wrapper1 .two span img");
var span2 = document.querySelector(".wrapper1 .two span");
var img3 = document.querySelector(".wrapper1 .six img");
var img4 = document.querySelector(".wrapper1 .eight img");
var img5 = document.querySelector(".wrapper1 .nine img");


var one = document.querySelector(".wrapper1 .one");
var two = document.querySelector(".wrapper1 .two");
var eight = document.querySelector(".wrapper1 .eight");
var nine = document.querySelector(".wrapper1 .nine");


var jacketr = document.querySelector(".wrapper2 .main .cloth .red img");
var jacketg = document.querySelector(".wrapper2 .main .cloth .green img");
var jacketb = document.querySelector(".wrapper2 .main .cloth .blue img");
var jackety = document.querySelector(".wrapper2 .main .cloth .yellow img");
var jacket2 = document.querySelector(".suggestions .sample1 img");
var jacket3 = document.querySelector(".suggestions .sample2 img");



// lightweight custom easing for smoother height animation without extra libs
if (window.jQuery && jQuery.easing && !jQuery.easing.easeOutCubic) {
    jQuery.easing.easeOutCubic = function (x, t, b, c, d) {
        t /= d; t--;
        return c * (t * t * t + 1) + b;
    };
}
if (window.jQuery && jQuery.easing && !jQuery.easing.easeOutQuart) {
    jQuery.easing.easeOutQuart = function (x, t, b, c, d) {
        t /= d; t--;
        return -c * (t*t*t*t - 1) + b;
    };
}
if (window.jQuery && jQuery.easing && !jQuery.easing.easeOutQuint) {
    jQuery.easing.easeOutQuint = function (x, t, b, c, d) {
        t /= d; t--;
        return c * (t*t*t*t*t + 1) + b;
    };
}
if (window.jQuery && jQuery.fx && typeof jQuery.fx.interval === 'number') {
    // slightly higher refresh rate for smoother animations
    jQuery.fx.interval = 8;
}

$(document).ready(function(){
    $(one)
        .css({'will-change':'height', 'transform':'translateZ(0)'})
        .stop(true, false)
        .delay(100)
        .animate({ height: '160px' }, 1300, 'easeOutQuint', function(){ $(this).css({'will-change':'auto','transform':''}); });

    $(two)
        .css({'will-change':'height', 'transform':'translateZ(0)'})
        .stop(true, false)
        .delay(200)
        .animate({ height: '230px' }, 1300, 'easeOutQuint', function(){ $(this).css({'will-change':'auto','transform':''}); });

    $(eight)
        .css({'will-change':'height', 'transform':'translateZ(0)'})
        .stop(true, false)
        .delay(400)
        .animate({ height: '160px' }, 1100, 'easeOutQuart', function(){ $(this).css({'will-change':'auto','transform':''}); });

    $(nine)
        .css({'will-change':'height', 'transform':'translateZ(0)'})
        .stop(true, false)
        .delay(300)
        .animate({ height: '130px' }, 1300, 'easeOutQuint', function(){ $(this).css({'will-change':'auto','transform':''}); });

    $(img1).delay(600).fadeIn(800);
    $(img2).delay(900).fadeIn(800);
    $(img3).delay(1200).fadeIn(800);
    $(img4).delay(1800).fadeIn(800);
    $(img5).delay(1500).fadeIn(800);
})



var redcolor = document.querySelector(".wrapper2 .main .color .c1 img");
var greencolor = document.querySelector(".wrapper2 .main .color .c2 img");
var bluecolor = document.querySelector(".wrapper2 .main .color .c3 img");
var yellowcolor = document.querySelector(".wrapper2 .main .color .c4 img");

$(document).ready(function(){
    $(jacketr).show();

    $(redcolor).click(function(){
        $(jacketr).fadeIn(800);
        $(jacketg).fadeOut();
        $(jacketb).fadeOut();
        $(jackety).fadeOut();
    })

    $(greencolor).click(function(){
        $(jacketr).fadeOut();
        $(jacketg).fadeIn(800);
        $(jacketb).fadeOut();
        $(jackety).fadeOut();
    })

    $(bluecolor).click(function(){
        $(jacketr).fadeOut();
        $(jacketg).fadeOut();
        $(jacketb).fadeIn(800);
        $(jackety).fadeOut();
    })

    $(yellowcolor).click(function(){
        $(jacketr).fadeOut();
        $(jacketg).fadeOut();
        $(jacketb).fadeOut();
        $(jackety).fadeIn(800);
    })
})



$(document).ready(function(){
    if($(jacketr).css("width") == '300px'){
        $(jacket2).click(function(){
            $(jacket2).animate({
                top: '-445px',
                right: '-5px',
                width: '280px'
            });
    });
    }

    if($(jacket3).css("width") <= '330px'){
        $(jacket2).click(function(){
            $(jacketr).animate({
                width: '100px',
                top: '1300px',
                left: '300px'
            })

            $(jacket2).animate({
                top: '-445px',
                right: '-5px',
                width: '280px'
            });

            $(jacket3).animate({
                top: '30px',
                left: '-150px',
                width: '110px'
            })
        })
    }
})

$(document).ready(function(){

    if($(jacketr).css("left") >= '190px'){
        $(jacketr).click(function(){
            $(jacketr).animate({
                width: '300px',
                top: '835px',
                left: '50px'
            });

            $(jacket2).animate({
                top: '30px',
                right: '50px',
                width: '90px'
            });
    })

    }

    if($(jacketr).css("left") >= '310px'){
        $(jacketr).click(function(){
            $(jacketr).animate({
                width: '300px',
                top: '835px',
                left: '50px'
            });
    
            $(jacket3).animate({
                top: '35px',
                left: '-10px',
                width: '100px'
            });

        })
    }
})

$(document).ready(function(){

    if($(jacketr).css("width") == '300px'){
        $(jacket3).click(function(){
            $(jacket3).animate({
                top: '-430px',
                left: '-280px',
                width: '330px'
            });
    
            $(jacketr).animate({
                width: '100px',
                top: '1300px',
                left: '310px'
            });
        }) 
    }

    if($(jacket2).css("width") >= '280px'){
        $(jacket3).click(function(){
            $(jacket2).animate({
                top: '30px',
                right: '50px',
                width: '90px'
            });
        })
    }
})


var hamburger = document.querySelector(".btn input");
var cancel = document.querySelector(".sidebar .cancel");
var sidebar = document.querySelector(".sidebar");
var home = document.querySelector(".sidebar .home");
var product = document.querySelector(".sidebar .product");
var support = document.querySelector(".sidebar .support");

$(document).ready(function(){
    $(cancel).click(function(){
        $(sidebar).animate({
            left: '-1000px'
        });
    })
})

$(document).ready(function(){
    $(hamburger).click(function(){
        $(sidebar).animate({
            left: '0px'
        });

        $(home).delay(500).fadeIn(500);
        $(product).delay(800).fadeIn(800);
        $(support).delay(1200).fadeIn(800);
    })
})

