/**
 *
 * This script deals with changing the background color of the navbar between transparent and another color
 *
 * @author Jean-Kenneth Antonio
 */

//variable declaration
let navPath = document.getElementById("navibar");

window.addEventListener("scroll", function () {
    navChange();
});

/*let interval = setInterval(function () {
    console.log(window.screenTop);
}, 5000);*/

function navChange() {
    //console.log("navChange() fired");

    //checks for if the page is at the top
    if (window.scrollY >= 5) {
        //console.log("scrolltop false");
        //changes background color to a more opaque color
        navPath.style.backgroundColor = 'rgba(51, 98, 0, .9)';
    }
    else {
        //changes the background color to transparent
        navPath.style.backgroundColor = 'transparent';
    }
}
