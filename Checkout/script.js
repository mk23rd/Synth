$(window).resize(function(){location.reload();});

var left = document.querySelector(".bottom .color .left");
var pic = document.querySelector(".bottom .color .left img");
var bar = document.querySelector(".bottom .color");
var purple = document.querySelector(".bottom .color .options .one");
var red = document.querySelector(".bottom .color .options .two");
var green = document.querySelector(".bottom .color .options .three");

$(document).ready(function(){
    $(left).click(function(){
        if($(bar).css("width") < '250px'){
            $(left).animate({
                left: '83px'
            })
            $(pic).delay(20).css('transform', 'rotateZ(180deg)')
            $(bar).animate({
                width: '250px'
            })
            $(green).animate({
                left: '60px'
            })
            $(red).animate({
                left: '40px'
            })
            $(purple).animate({
                left: '20px'
            })
        }
        if($(bar).css("width") >= '250px'){
            $(left).animate({
                left: '8px'
    
            })
            $(pic).delay(20).css('transform', 'rotateZ(0deg)')
            $(bar).animate({
                width: '170px'
            })
            $(green).animate({
                left: '-10px'
            })
            $(red).animate({
                left: '0px'
            })
            $(purple).animate({
                left: '10px'
            })
        }

    })
})

var smallP = document.querySelector(".SP");
var mediumP = document.querySelector(".MP");
var largeP = document.querySelector(".LP");
var extralP = document.querySelector(".XLP");

$(document).ready(function(){
    $(smallP).click(function(){
        $(smallP).css('background-color', '#88543B')
        $(smallP).css('color', 'white')

        $(mediumP).css('background-color', 'white')
        $(mediumP).css('color', 'black')

        $(largeP).css('background-color', 'white')
        $(largeP).css('color', 'black')

        $(extralP).css('background-color', 'white')
        $(extralP).css('color', 'black')
    })

    $(mediumP).click(function(){
        $(mediumP).css('background-color', '#88543B')
        $(mediumP).css('color', 'white')

        $(smallP).css('background-color', 'white')
        $(smallP).css('color', 'black')

        $(largeP).css('background-color', 'white')
        $(largeP).css('color', 'black')

        $(extralP).css('background-color', 'white')
        $(extralP).css('color', 'black')
    })

    $(largeP).click(function(){
        $(largeP).css('background-color', '#88543B')
        $(largeP).css('color', 'white')

        $(mediumP).css('background-color', 'white')
        $(mediumP).css('color', 'black')

        $(smallP).css('background-color', 'white')
        $(smallP).css('color', 'black')

        $(extralP).css('background-color', 'white')
        $(extralP).css('color', 'black')
    })

    $(extralP).click(function(){
        $(extralP).css('background-color', '#88543B')
        $(extralP).css('color', 'white')

        $(mediumP).css('background-color', 'white')
        $(mediumP).css('color', 'black')

        $(largeP).css('background-color', 'white')
        $(largeP).css('color', 'black')

        $(smallP).css('background-color', 'white')
        $(smallP).css('color', 'black')
    })
});