var btnSingin = document.querySelector("#singin");
var btnSingup = document.querySelector("#singup");

var body = document.querySelector("body");


btnSingin.addEventListener("click", function() {

    body.className = "sing-in-js";

});


btnSingup.addEventListener("click", function() {

    body.className = "sing-up-js"
});