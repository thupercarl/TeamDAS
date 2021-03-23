/**
 *
 * This script deals with scroll events mainly the scroll to top button, connected to index.php
 *
 * @author Jean-Kenneth Antonio
*/

//Get the button
let returnBtn = document.getElementById("returnButton");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        returnBtn.style.display = "block";
    } else {
        returnBtn.style.display = "none";
    }
}

/*let interval = setInterval(function () {
    console.log(window.scrollY);
}, 5000);*/

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
