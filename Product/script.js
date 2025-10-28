$(window).resize(function(){location.reload();});

var category = document.querySelector("section .category");
var slide = document.querySelector("section .category .choose");
var display  = document.querySelector("section .slide");
var box  = document.querySelector("section .slide .below2");

$(document).ready(function(){
    $(category).click(function(){
      $(slide).slideToggle("slow");

      if($(display).css("top") < '500px'){ 
        $(display).delay(90).animate({ 
            top: '500px',
          })

        $(box).css("padding-bottom", "200px");
        $(box).css("height", "210px");
      }

      if($(display).css("top") > '480px'){
        $(display).delay(90).animate({ 
            top: '375px',
          })
      }

    });

  });

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

var allbtn_phone = document.querySelector("nav .option .allbtn-phone");

var searchbtn_phone = document.querySelector(".form-search-phone");

var menbtn_phone = document.querySelector("nav .option .menbtn-phone");
var womenbtn_phone = document.querySelector("nav .option .womenbtn-phone");
var jacketbtn_phone = document.querySelector("section .category .choose .jacketbtn-phone");
var beltbtn_phone = document.querySelector("section .category .choose .beltbtn-phone");
var bagbtn_phone = document.querySelector("section .category .choose .bagbtn-phone");

var allslide = document.querySelector("section .slide .all-phone");
var allnonslide = document.querySelector("section .non-slide .all-phone");

var menslide = document.querySelector("section .slide .men-phone");
var mennonslide = document.querySelector("section .non-slide .men-phone");

var womenslide = document.querySelector("section .slide .women-phone");
var womennonslide = document.querySelector("section .non-slide .women-phone");

var jacketslide = document.querySelector("section .slide .jacket-phone");
var jacketnonslide = document.querySelector("section .non-slide .jacket-phone");

var beltslide = document.querySelector("section .slide .belt-phone");
var beltnonslide = document.querySelector("section .non-slide .belt-phone");

var bagslide = document.querySelector("section .slide .bag-phone");
var bagnonslide = document.querySelector("section .non-slide .bag-phone");

var searchslide = document.querySelector("section .slide .search-phone");
var searchnonslide = document.querySelector("section .non-slide .search-phone");


$(document).ready(function(){
$(jacketslide).hide();
$(jacketnonslide).hide();

$(beltslide).hide();
$(beltnonslide).hide();

$(bagslide).hide();
$(bagnonslide).hide();

$(menslide).hide();
$(mennonslide).hide();

$(womenslide).hide();
$(womennonslide).hide();

$(allslide).hide();
$(allnonslide).hide();

$(searchslide).show();
$(searchnonslide).show();
});

$(searchbtn_phone).submit(function(){
  if( e.which == 13 ) {
    $(jacketslide).hide();
    $(jacketnonslide).hide();
    
    $(beltslide).hide();
    $(beltnonslide).hide();
    
    $(bagslide).hide();
    $(bagnonslide).hide();
    
    $(menslide).hide();
    $(mennonslide).hide();
    
    $(womenslide).hide();
    $(womennonslide).hide();
    
    $(allslide).hide();
    $(allnonslide).hide();
    
    $(searchslide).show();
    $(searchnonslide).show();
}
});



$(document).ready(function(){
  $(allbtn_phone).click(function(){
    $(jacketslide).hide();
    $(jacketnonslide).hide();
    
    $(beltslide).hide();
    $(beltnonslide).hide();
    
    $(bagslide).hide();
    $(bagnonslide).hide();
    
    $(menslide).hide();
    $(mennonslide).hide();
    
    $(womenslide).hide();
    $(womennonslide).hide();

    $(searchslide).hide();
    $(searchnonslide).hide();
    
    $(allslide).show();
    $(allnonslide).show();
  })
});

$(document).ready(function(){
  $(menbtn_phone).click(function(){
    $(jacketslide).hide();
    $(jacketnonslide).hide();
    
    $(beltslide).hide();
    $(beltnonslide).hide();
    
    $(bagslide).hide();
    $(bagnonslide).hide();
    
    $(menslide).show();
    $(mennonslide).show();
    
    $(womenslide).hide();
    $(womennonslide).hide();

    $(searchslide).hide();
    $(searchnonslide).hide();
    
    $(allslide).hide();
    $(allnonslide).hide();
  })
});

$(document).ready(function(){
  $(womenbtn_phone).click(function(){
    $(jacketslide).hide();
    $(jacketnonslide).hide();
    
    $(beltslide).hide();
    $(beltnonslide).hide();
    
    $(bagslide).hide();
    $(bagnonslide).hide();
    
    $(menslide).hide();
    $(mennonslide).hide();
    
    $(womenslide).show();
    $(womennonslide).show();

    $(searchslide).hide();
    $(searchnonslide).hide();
    
    $(allslide).hide();
    $(allnonslide).hide();
  })
});

$(document).ready(function(){
  $(jacketbtn_phone).click(function(){
    $(jacketslide).show();
    $(jacketnonslide).show();
    
    $(beltslide).hide();
    $(beltnonslide).hide();
    
    $(bagslide).hide();
    $(bagnonslide).hide();
    
    $(menslide).hide();
    $(mennonslide).hide();
    
    $(womenslide).hide();
    $(womennonslide).hide();

    $(searchslide).hide();
    $(searchnonslide).hide();
    
    $(allslide).hide();
    $(allnonslide).hide();
  })
});

$(document).ready(function(){
  $(bagbtn_phone).click(function(){
    $(jacketslide).hide();
    $(jacketnonslide).hide();
    
    $(beltslide).hide();
    $(beltnonslide).hide();
    
    $(bagslide).show();
    $(bagnonslide).show();
    
    $(menslide).hide();
    $(mennonslide).hide();
    
    $(womenslide).hide();
    $(womennonslide).hide();

    $(searchslide).hide();
    $(searchnonslide).hide();
    
    $(allslide).hide();
    $(allnonslide).hide();
  })
});

$(document).ready(function(){
  $(beltbtn_phone).click(function(){
    $(jacketslide).hide();
    $(jacketnonslide).hide();
    
    $(beltslide).show();
    $(beltnonslide).show();
    
    $(bagslide).hide();
    $(bagnonslide).hide();
    
    $(menslide).hide();
    $(mennonslide).hide();
    
    $(womenslide).hide();
    $(womennonslide).hide();

    $(searchslide).hide();
    $(searchnonslide).hide();
    
    $(allslide).hide();
    $(allnonslide).hide();
  })
});
