var hamburger = document.querySelector(".hamburger input");
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
});



