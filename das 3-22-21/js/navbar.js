//variable declaration
let navPath = document.getElementById("navibar");

window.addEventListener("scroll", function () {
    navChange();
});


function navChange() {
    //console.log("navChange() fired");
    //checks for if the page is at the top
    if (window.scrollY < 5) {
       // console.log("scrolltop true");
        //changes the background color to transparent
        navPath.style.backgroundColor = 'transparent';
    }
    else {
        //console.log("scrolltop false");
        //changes background color to a more opaque color
        navPath.style.backgroundColor = 'rgba(51, 98, 0, .9)';
    }
}
