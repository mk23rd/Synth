$(window).resize(function(){location.reload();});

var allcat = document.querySelector(".allcatbtn");
var allgen = document.querySelector(".allgenbtn");


var searchbtn = document.querySelector(".form-search");

var menbtn = document.querySelector(".menbtn");
var womenbtn = document.querySelector(".womenbtn");
var jacketbtn = document.querySelector(".jacketbtn");
var beltbtn = document.querySelector(".beltbtn");
var bagbtn = document.querySelector(".bagbtn");

var allreveal = document.querySelector(".all");

var searchreveal = document.querySelector(".search");
var jacketreveal = document.querySelector(".jacket");
var beltreveal = document.querySelector(".belt");
var bagreveal = document.querySelector(".bag");
var menreveal = document.querySelector(".men");
var womenreveal = document.querySelector(".women");


$(allreveal).hide();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).show();

$(searchbtn).submit(function(){
    if( e.which == 13 ) {
    $(allreveal).hide();
    $(jacketreveal).hide();
    $(beltreveal).hide();
    $(bagreveal).hide();
    $(menreveal).hide();
    $(womenreveal).hide();
    $(searchreveal).show();}
});

/* $(document).ready(function(){
$(allreveal).show();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).hide();
}); */

/* $(searchbtn).on('keypress',function(e) {
    if(e.which == 13) {
        alert('You pressed enter!');
    }
}); */




$(document).ready(function(){
  
$(allcat).click(function(){

$(allreveal).show();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).hide();
})

});

$(document).ready(function(){

$(allgen).click(function(){

$(allreveal).show();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).hide();
})

});

$(document).ready(function(){

$(jacketbtn).click(function(){

$(allreveal).hide();
$(jacketreveal).show();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).hide();
})

});

$(document).ready(function(){

$(beltbtn).click(function(){

$(allreveal).hide();
$(jacketreveal).hide();
$(beltreveal).show();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).hide();
})

});

$(document).ready(function(){

$(bagbtn).click(function(){

$(allreveal).hide();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).show();
$(menreveal).hide();
$(womenreveal).hide();
$(searchreveal).hide();
})

});

$(document).ready(function(){

$(menbtn).click(function(){

$(allreveal).hide();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).show();
$(womenreveal).hide();
$(searchreveal).hide();
})

});

$(document).ready(function(){

$(womenbtn).click(function(){
  
$(allreveal).hide();
$(jacketreveal).hide();
$(beltreveal).hide();
$(bagreveal).hide();
$(menreveal).hide();
$(womenreveal).show();
$(searchreveal).hide();
})

});



var cartbtn = document.querySelector(".cart-product-link");
var iframe = document.querySelector(".iframe");

$(document).ready(function(){
    $(cartbtn).click(function(){
        $(iframe).slideToggle("slow");
    })
});

