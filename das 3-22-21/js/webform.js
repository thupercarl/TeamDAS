

//load categories
document.getElementById("companycategory").onload = populateCategories();
document.getElementById("companyarea").onload = populateArea();


//Categories array
function populateCategories()
{
    let categories = [
        {
            "ID": "Agriculture",
            "Category": "Agriculture"
        },
        {
            "ID": "Circular Economy",
            "Category": "Circular Economy"
        },
        {
            "ID": "Clothing",
            "Category": "Clothing"
        },
        {
            "ID": "Consumer Goods",
            "Category": "Consumer Goods"
        },
        {
            "ID": "Ecology",
            "Category": "Ecology"
        },
        {
            "ID": "Education",
            "Category": "Education"
        },
        {
            "ID": "Energy",
            "Category": "Energy"
        },
        {
            "ID": "Healthcare",
            "Category": "Healthcare"
        },
        {
            "ID": "Housing",
            "Category": "Housing"
        },
        {
            "ID": "Lighting",
            "Category": "Lighting"
        },
        {
            "ID": "Manufacturing",
            "Category": "Manufacturing"
        },
        {
            "ID": "Transportation",
            "Category": "Transportation"
        },
        {
            "ID": "Wastewater",
            "Category": "Wastewater"
        },
        {
            "ID": "Water",
            "Category": "Water"
        },
    ];

    let ele = document.getElementById('companycategory');
    for (let i = 0; i < categories.length; i++) {
        ele.innerHTML = ele.innerHTML +
            '<option value="' + categories[i]['ID'] + '">' + categories[i]['Category'] + '</option>';
    }
}

function populateArea() {
    let areas = [
        {
            "ID": "Local",
            "Category": "Local"
        },
        {
            "ID": "Regional",
            "Category": "Regional"
        },
        {
            "ID": "State",
            "Category": "State"
        },
        {
            "ID": "National",
            "Category": "National"
        },
        {
            "ID": "Global",
            "Category": "Global"
        },
    ];

    let ele = document.getElementById('companyarea');
    for (let i = 0; i < areas.length; i++) {
        ele.innerHTML = ele.innerHTML +
            '<option value="' + areas[i]['ID'] + '">' + areas[i]['Category'] + '</option>';
    }
}

// reveal tagline
function revealTagline() {
    let taglineField = document.getElementById("taglinefield");
    taglineField.classList.remove("hidden");
   taglineField.classList.add()
}

// Error Checking
document.getElementById("companyform").onsubmit = validate;
let filesize;

function validate()
{
    //Create a flag variable
    let isValid = true;

    console.log("validate fires!")

    // clear all error messages
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    //initialize validation regex
    let phoneRegex = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
    let emailRegex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    // Check company name
    let name = document.getElementById("companyname").value;
    if (name === "") {
        let errName = document.getElementById("err-cname");
        errName.style.display = "inline";
        isValid = false;
    }

    //check company email
    let cemail = document.getElementById("companyemail").value;
    let cEmailResult = emailRegex.test(cemail);

    if (!(cemail === "") && !cEmailResult) {
        let errEmail = document.getElementById("err-cemail");
        errEmail.style.display = "inline";
        isValid = false;
    }

    //check company phone
    let cphone = document.getElementById("companyphone").value;
    let cPhoneResult = phoneRegex.test(cphone);
    if (!(cphone === "") && !cPhoneResult) {
        let errCphone = document.getElementById("err-cphone");
        errCphone.style.display = "inline";
        isValid = false;
    }

    //check company url
    let url = document.getElementById("companyurl").value;
    if (url === "" || !url.includes(".") || url.charAt(url.length-1) === '.' || url.charAt(0) === '.') {
        let errUrl = document.getElementById("err-curl");
        errUrl.style.display = "inline";
        isValid = false;
    }

    //check company category
    let category = document.getElementById("companycategory").value;
    if (category === "000") {
        let errCategory = document.getElementById("err-ccategory");
        errCategory.style.display = "inline";
        isValid = false;
    }

    //check img upload
    let fileUpload = document.getElementById("clogo");
/*    let filesize;
    if (fileUpload.hasOwnProperty('files[0]')) {
        console.log("has files!");
        filesize = fileUpload.files[0].size;
    }
    else {
        console.log('no');
        console.log(fileUpload.value);
        isValid = false;
    }*/


    //console.log(filesize/1024/1024);
    console.log(fileUpload.files[0]);

    //check if file exists
    if (fileUpload.files[0] === undefined) {
        //console.log("is undefined");
        let errFileUpload = document.getElementById('err-clogo');
        errFileUpload.style.display = "inline";
        isValid = false;
    }
    else {
        //console.log("Not undefined");
        filesize = fileUpload.files[0].size;
        //checks for extension and filesize
        if (!(checkExtension(fileUpload.value)) || filesize/1024/1024 > 5) {
            let errFileUpload = document.getElementById('err-clogo');
            errFileUpload.style.display = "inline";
            isValid = false;
        }
    }


    //check contact person first name
    let cfname = document.getElementById("cpfname").value;
    if (cfname === "") {
        let errName = document.getElementById("err-cfname");
        errName.style.display = "inline";
        isValid = false;
    }

    //check contact person last name
    let cplname = document.getElementById("cplname").value;
    if (cplname === "") {
        let errName = document.getElementById("err-cplname");
        errName.style.display = "inline";
        isValid = false;
    }

    //check contact phone number
    let cpphone = document.getElementById("cpphone").value;
    let cpPhoneResult = phoneRegex.test(cpphone);
    if (cpphone === "" || !cpPhoneResult) {
        let errCpphone = document.getElementById("err-cpphone");
        errCpphone.style.display = "inline";
        isValid = false;
    }

    //check contact email
    let cpemail = document.getElementById("cpemail").value;
    let cpEmailResult = emailRegex.test(cpemail);
    if (cpemail === "" || !cpEmailResult) {
        let errEmail = document.getElementById("err-cpemail");
        errEmail.style.display = "inline";
        isValid = false;
    }

    //check city empty
    let city = document.getElementById("city").value;
    if (city === "") {
        let errCity = document.getElementById("err-city");
        errCity.style.display = "inline";
        isValid = false;
    }

    //check state/province empty
    let state = document.getElementById("state").value;
    if (state === "") {
        let errState = document.getElementById("err-state");
        errState.style.display = "inline";
        isValid = false;
    }

    //check service area
    let carea = document.getElementById("companyarea").value;
    if (carea === "000") {
        let errArea = document.getElementById("err-carea");
        errArea.style.display = "inline";
        isValid = false;
    }

    return isValid;

}

//check file extension
function checkExtension(fileUpload) {
    //console.log("checkExtension Fired!")
    let extension = fileUpload.split('.').pop(); //takes the extention
    extension = extension.toLowerCase(); //makes it lowercase
    return extension === 'jpg' || extension === 'png' || extension === 'jpeg' || extension === 'gif';
}


// keyword array
//let keywords = ['sustainability']; //sets the initial keyword to sustainability
let keywords; //starts keyword array
document.onsubmit = sendKeywords;

//submit keywords to POST
function sendKeywords() {
    //places the words into an input for submitting form

    let joinKeywords = keywords.join();
    document.getElementById("hiddenKeywords").innerHTML += ("<input type='text' name='keywords' value='"+joinKeywords+"'><br>");
    //document.getElementById("hiddenKeywords").classList.remove('hidden');
}

//Runs the keyword tag box using jquery
$(function(){

    //To accept key word, press ',', 'Enter key', or anywhere not in the box.
    $("#tags input").on({
        focusout : function() {
            let txt= this.value.replace(/[^a-z0-9\+\-\.#]/ig,''); // allowed characters using regex
            if(txt) $("<span/>",{text:txt.toLowerCase(), insertBefore:this}); // Makes all text lowercase before entry
            //console.log("before push: " + keywords);
            if (!(txt === "")){
                keywords.push((txt.toLowerCase()));
            }

            this.value="";
        },
        keyup : function(ev) {
            // if: comma|enter (delimit more keyCodes with | pipe)
            if(/(188|13)/.test(ev.which)) $(this).focusout(); //delimiters and focus out to input
        }
    });

    //will remove tag when word is clicked on
    $('#tags').on('click', 'span', function() {
        //if(confirm("Remove "+ $(this).text() +"?")) //Alert confirmation box
        //if(!($(this).text() == "sustainability")) //check if sustainability

        keywords.splice((keywords.indexOf(this.innerHTML.toLocaleLowerCase())), 1);
        $(this).remove();
    });

});

//binds to onchange event logo
/*$('#clogo').bind('change', function() {

    //this.files[0].size gets the size of your file.
    filesize = this.files[0].size;

})*/

//Prevents sending the form on pressing enter to avoid accidentally submitting.
$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode === 13) {
            event.preventDefault();
            return false;
        }
    });
});

//Enables the popovers in the document
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});

/*
* Resources:
* https://www.encodedna.com/javascript/populate-select-dropdown-list-with-json-data-using-javascript.htm
*http://jsbin.com/hehurot/5/edit?html,css,js,output
*
* */