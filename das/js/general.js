//variable declaration
let navPath = document.getElementById("navibar");

window.addEventListener("scroll", function () {
    navChange();
});


function navChange() {
    //console.log("navChange() fired");
    if (window.scrollY < 5) {
       // console.log("scrolltop true");
        navPath.style.backgroundColor = 'transparent';
    }
    else {
        //console.log("scrolltop false");
        navPath.style.backgroundColor = 'rgba(105, 105, 105, .9)';
    }
}
