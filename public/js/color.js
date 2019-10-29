var square = document.querySelectorAll(".square");
var displayColor = document.querySelector(".displayColor");
var h1 = document.querySelector("h1");
var message = document.querySelector("#message");
var reset = document.querySelector("#reset");

var colors = generateRandomColor(6);

pickedColor = colors[randomColor()];
displayColor.innerHTML = pickedColor;

reset.addEventListener("click",function () {

    colors = generateRandomColor(6);

    pickedColor = colors[randomColor()];

    displayColor.innerHTML = pickedColor;

    for (var i = 0; i<square.length; i++){
        square[i].style.backgroundColor = colors[i];
    }

});

for (var i = 0; i<square.length; i++)
{
    square[i].style.backgroundColor = colors[i];
    square[i].addEventListener("click",function () {
        chooseColor = this.style.backgroundColor;
        if (chooseColor === pickedColor){
            h1.style.backgroundColor = pickedColor;
            matchColor(pickedColor);
            message.innerHTML = "Correct";
        }else {
            this.style.backgroundColor =  "#232323";
            message.innerHTML = "Incorrect";
        }
    }) ;
}

function matchColor(color) {
    for (var i = 0; i<square.length; i++)
    {
        square[i].style.backgroundColor = color;
    }
}

function randomColor() {
    // "rgb(255, 255, 0)",
    var randomNumber = Math.floor(Math.random() * colors.length);
    return randomNumber;
}

function generateRandomColor(number) {
    colors = [];
    for (var i = 0; i<number; i++)
    {
       randomcolors();
        colors.push(randomcolors())
    }
    return colors;
}
function randomcolors() {
    var r = Math.floor(Math.random() * 256);
    var g = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);

    return  "rgb" + "(" + r +", " + g +", " + b +")";
}



// var square = document.querySelectorAll(".square");
// var displayColor = document.querySelector(".displayColor");
// var h1 = document.querySelector("h1");
// var message = document.querySelector("#message");
//
// var colors = generateRandomColor(6);
//
// var pickedColor = colors[randomColors()];
// displayColor.innerHTML = pickedColor;
//
// for (var i = 0; i<square.length; i++){
//     square[i].style.backgroundColor = colors[i];
//     square[i].addEventListener("click",function () {
//         var chooseColor = this.style.backgroundColor;
//         if (chooseColor === pickedColor)
//         {
//             h1.style.backgroundColor = pickedColor;
//             matchColor(pickedColor);
//             message.innerHTML = "Correct";
//         }else{
//             this.style.backgroundColor = "#232323";
//             message.innerHTML = "In Correct";
//         }
//     });
// }
//
// function matchColor(color) {
//     for (var i = 0; i<square.length; i++) {
//         square[i].style.backgroundColor = color;
//     }
// }
//
// function randomColors() {
//     colorNumber = Math.floor(Math.random() * colors.length);
//     return colorNumber;
// }
//
// function generateRandomColor(number) {
//     var colors = [];
//     for (var i = 0; i<number; i++){
//         randomColor();
//         colors.push(randomColor());
//
//
//     }
//     return colors;
// }
// function randomColor() {
//     var r = Math.floor(Math.random() * 256);
//     var g = Math.floor(Math.random() * 256);
//     var b = Math.floor(Math.random() * 256);
//     return  "rgb"+ "(" + r +", " + g +", " + b + ")";
// }






// var square = document.querySelectorAll(".square");
// var displayColor = document.querySelector(".displayColor");
// var h1 = document.querySelector("h1");
// var message = document.querySelector("#message");
//
// var colors= generateRandomColor(6);
// // [
// //
// //     "rgb(255, 255, 0)",
// //     "rgb(0, 255, 0)",
// //     "rgb(255, 0, 0)",
// //     "rgb(255, 0, 255)",
// //     "rgb(0, 0, 255)",
// //     "rgb(0, 255, 255)",
// // ];
// var pickedColor = colors[randomColor()];
// displayColor.innerHTML = pickedColor;
//
//
//
// for (var i = 0; i<square.length; i++){
//     square[i].style.backgroundColor = colors[i];
//     square[i].addEventListener("click",function () {
//             var chooseColor = this.style.backgroundColor;
//             if (chooseColor === pickedColor)
//             {
//                 h1.style.backgroundColor = pickedColor;
//                 matchColor(pickedColor);
//                 message.innerHTML = "Correct";
//
//             } else{
//                 this.style.backgroundColor = "#232323";
//                 message.innerHTML = "Wrong";
//             }
//     })
// }
// function matchColor(color) {
//     for(var i = 0; i<square.length; i++){
//         square[i].style.backgroundColor = color;
//     }
// }
//
// function randomColor() {
//     var randomNumber =  Math.floor(Math.random() * colors.length);
//     return randomNumber;
// }
//
// function generateRandomColor(number) {
//     var colors = [];
//     for (var i = 0; i<number; i++){
//         randomColors();
//         colors.push(randomColors());
//     }
//     return colors;
// }
//
// function randomColors() {
//     // generate color "rgb(255, 0, 0)",
//     // red 0-255
//     // green 0-255
//     // blue 0-255
//     var r = Math.floor(Math.random() * 256);
//     var g = Math.floor(Math.random() * 256);
//     var b = Math.floor(Math.random() * 256);
//
//     return "rgb" + "(" + r +", " + g +", " + b + ")";
// }









// var square = document.querySelectorAll(".square");
// var displayColor = document.querySelector(".displayColor");
// var h1 = document.querySelector("h1");
// var message = document.querySelector("#message");
// var colors= [
//     "rgb(255, 0, 0)",
//     "rgb(255, 255, 0)",
//     "rgb(255, 255, 255)",
//     "rgb(0, 255, 0)",
//     "rgb(255, 0, 255)",
//     "rgb(0, 0, 255)",
// ];
// var picColor = pickedRandomColor(colors);
// displayColor.innerHTML = picColor;
//
// for (var i = 0; i<square.length; i++)
// {
//     square[i].style.backgroundColor = colors[i];
//     square[i].addEventListener("click",function () {
//         var chooseColor = this.style.backgroundColor;
//         if (chooseColor === picColor)
//         {
//             h1.style.backgroundColor = picColor;
//             message.innerHTML = "correct";
//             matchColor(picColor);
//             // alert("yes!");
//             // alert("you are right");
//         }else {
//             this.style.backgroundColor = "#232323";
//             message.innerHTML = "Try again";
//             // alert("you are worng");
//         }
//     });
// }
//
// function matchColor(color) {
//     for (var i = 0 ; i<square.length; i++)
//     {
//         square[i].style.backgroundColor = color;
//     }
// }
// function pickedRandomColor(colors) {
//     var randomNumber = Math.floor(Math.random() * colors.length);
//     return colors[randomNumber];
// }








// alert("connected");
// var square = document.querySelectorAll(".square");
// var displayColor = document.querySelector(".displayColor");
// var colors= [
//     "rgb(255, 0, 0)",
//     "rgb(255, 255, 0)",
//     "rgb(255, 255, 255)",
//     "rgb(0, 255, 0)",
//     "rgb(255, 0, 255)",
//     "rgb(0, 0, 255)",
// ];
// var pickColor = colors[2];
// displayColor.innerHTML = pickColor;
// for (var i = 0; i < square.length; i++)
// {
//     square[i].style.backgroundColor = colors[i];
//     square[i].addEventListener("click",function () {
//         // alert("click");
//         var choosenColor = this.style.backgroundColor;
//         if (choosenColor === pickColor)
//         {
//             alert("you are right");
//         }else {
//             alert("you are wrong");
//         }
//     })
// }
