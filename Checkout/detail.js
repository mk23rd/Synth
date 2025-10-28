var small = document.querySelector(".small");
var medium = document.querySelector(".medium");
var large = document.querySelector(".large");
var extral = document.querySelector(".very-large");

$(document).ready(function(){
    $(small).click(function(){
        $(small).css('background-color', '#88543B')
        $(small).css('color', 'white')

        $(medium).css('background-color', 'white')
        $(medium).css('color', 'black')

        $(large).css('background-color', 'white')
        $(large).css('color', 'black')

        $(extral).css('background-color', 'white')
        $(extral).css('color', 'black')
    })

    $(medium).click(function(){
        $(medium).css('background-color', '#88543B')
        $(medium).css('color', 'white')

        $(small).css('background-color', 'white')
        $(small).css('color', 'black')

        $(large).css('background-color', 'white')
        $(large).css('color', 'black')

        $(extral).css('background-color', 'white')
        $(extral).css('color', 'black')
    })

    $(large).click(function(){
        $(large).css('background-color', '#88543B')
        $(large).css('color', 'white')

        $(medium).css('background-color', 'white')
        $(medium).css('color', 'black')

        $(small).css('background-color', 'white')
        $(small).css('color', 'black')

        $(extral).css('background-color', 'white')
        $(extral).css('color', 'black')
    })

    $(extral).click(function(){
        $(extral).css('background-color', '#88543B')
        $(extral).css('color', 'white')

        $(medium).css('background-color', 'white')
        $(medium).css('color', 'black')

        $(large).css('background-color', 'white')
        $(large).css('color', 'black')

        $(small).css('background-color', 'white')
        $(small).css('color', 'black')
    })
})

// const addBtn = document.getElementById("btn-add-to-cart");

// cartArray = localStorage.getItem("cartArray");
// if (!cartArray) {
//   localStorage.setItem("cartArray", JSON.stringify([]));
// }
// arrayOfObjects = JSON.parse(localStorage.getItem("cartArray"));

// addBtn.addEventListener("click", () => {
//   const quantity = document.getElementById("quantity");
//   const price = document.getElementById("picked-product-price");
//   const names = document.getElementById("picked-name");
//   // localStorage.setItem('cart','hello')
//   // console.log(localStorage.getItem('cart'));
//   let total = Number(price.innerText) * Number(quantity.value);

//   const itemObj = {
//     name: names.textContent,
//     quantity: quantity.value,
//     price: price.textContent,
//   };

//   console.log("arrayOfObjects:", arrayOfObjects);
//   arrayOfObjects.push(itemObj);
//   localStorage.setItem("cartArray", JSON.stringify(arrayOfObjects));
//   console.log("New object created:", itemObj);
//   console.log("hello ", localStorage.getItem("cartArray"));

//     console.log(
//       "Hello ",
//       names.textContent,
//       " The price is ",
//       price.textContent,
//       " And you have picked ",
//       quantity.value,
//       " items, the total is going to be: ",
//       total
//     );
// });